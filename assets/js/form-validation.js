function Validator(options) {
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    // Hàm thực hiện validate
    function validate(inputElement, rule) {
        var errorElement = getParent(
            inputElement,
            options.formGroupSelector
        ).querySelector(options.errorSelector);

        var errorMessage;

        // Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];

        // Lặp qua từng rule & kiểm tra
        // Nếu có lỗi thì dừng việc kiểm
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case "radio":
                case "checkbox":
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ":checked")
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            if (errorMessage) break;
        }

        if (errorMessage) {
            errorElement.innerText = errorMessage;
            getParent(inputElement, options.formGroupSelector).classList.add(
                "invalid"
            );
        } else {
            errorElement.innerText = "";
            getParent(inputElement, options.formGroupSelector).classList.remove(
                "invalid"
            );
        }

        return !errorMessage;
    }

    // Lấy element của form cần validate
    var formElement = document.querySelector(options.form);
    if (formElement) {
        // Khi submit form
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;

            // Lặp qua từng rules và validate
            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                // Trường hợp submit với javascript
                if (typeof options.onSubmit === "function") {
                    var enableInputs = formElement.querySelectorAll("[name]");
                    var formValues = Array.from(enableInputs).reduce(function (
                        values,
                        input
                    ) {
                        switch (input.type) {
                            case "radio":
                                values[input.name] = formElement.querySelector(
                                    'input[name="' + input.name + '"]:checked'
                                ).value;
                                break;
                            case "checkbox":
                                if (!input.matches(":checked")) {
                                    values[input.name] = "";
                                    return values;
                                }
                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);
                                break;
                            case "file":
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }

                        return values;
                    },
                    {});
                    options.onSubmit(formValues);
                }
                // Trường hợp submit với hành vi mặc định
                else {
                    formElement.submit();
                }
            }
        };

        // Lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input, ...)
        options.rules.forEach(function (rule) {
            // Lưu lại các rules cho mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function (inputElement) {
                // Xử lý trường hợp blur khỏi input
                inputElement.onblur = function () {
                    validate(inputElement, rule);
                };

                // Xử lý mỗi khi người dùng nhập vào input
                inputElement.oninput = function () {
                    var errorElement = getParent(
                        inputElement,
                        options.formGroupSelector
                    ).querySelector(options.errorSelector);
                    errorElement.innerText = "";
                    getParent(
                        inputElement,
                        options.formGroupSelector
                    ).classList.remove("invalid");
                };
            });
        });
    }
}

// Định nghĩa rules
// Nguyên tắc của các rules:
// 1. Khi có lỗi => Trả ra message lỗi
// 2. Khi hợp lệ => Không trả ra cái gì cả (undefined)
Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : message || "Vui lòng nhập trường này";
        },
    };
};

Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value)
                ? undefined
                : message || "Trường này phải là email";
        },
    };
};

Validator.isPhoneNumber = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
            return regex.test(value)
                ? undefined
                : message || "Trường này phải là số điện thoại";
        },
    };
};

Validator.isPassword = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            // Yêu cầu: ít nhất 1 chữ số, 1 chữ thường, 1 chữ hoa, 1 ký tự đặc biệt
            var regex =
                /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]).*$/;
            return regex.test(value)
                ? undefined
                : message ||
                      "Mật khẩu đúng phải có số, chữ thường, chữ hoa và ký tự đặc biệt";
        },
    };
};

Validator.minLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min
                ? undefined
                : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        },
    };
};

Validator.isConfirmed = function (selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue()
                ? undefined
                : message || "Giá trị nhập vào không chính xác";
        },
    };
};

document.addEventListener("DOMContentLoaded", function () {
    Validator({
        form: "#registerForm",
        formGroupSelector: ".register-form__group",
        errorSelector: ".form-message",
        rules: [
            Validator.isRequired(
                "#register-form__uname",
                "Vui lòng nhập tên đầy đủ của bạn"
            ),
            Validator.isRequired(
                "#register-form__phone",
                "Vui lòng nhập số điện thoại"
            ),
            Validator.isRequired(
                'input[name="gender"]',
                "Vui lòng chọn giới tính của bạn"
            ),
            Validator.isRequired(
                'input[name="hobby"]',
                "Vui lòng chọn sở thích của bạn"
            ),
            Validator.isRequired(
                "#register-form__country",
                "Vui lòng chọn quốc gia của bạn"
            ),
            Validator.isPhoneNumber("#register-form__phone"),
            Validator.isRequired(
                "#register-form__address",
                "Vui lòng nhập địa chỉ"
            ),
            Validator.isEmail("#register-form__email"),
            Validator.minLength(
                "#register-form__psw",
                8,
                "Mật khẩu phải chứa ít nhất 8 kí tự"
            ),
            Validator.isPassword("#register-form__psw"),
            Validator.isRequired(
                "#register-form__confirmPsw",
                "Vui lòng nhập lại mật khẩu"
            ),
            Validator.isConfirmed(
                "#register-form__confirmPsw",
                function () {
                    return document.querySelector("#register-form__psw").value;
                },
                "Mật khẩu nhập lại không chính xác"
            ),
            Validator.isRequired(
                'input[name="agree"]',
                "Vui lòng đọc và chấp nhận chính sách"
            ),
        ],
        onSubmit: function (data) {
            console.log(data);
        },
    });
});
