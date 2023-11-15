var quantityInputs = document.querySelectorAll('input[type="number"]');
var checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Lắng nghe sự kiện thay đổi trên các ô số lượng
quantityInputs.forEach(function (input) {
    input.addEventListener("change", updateTotal);
    input.disabled = true; // Disable quantity inputs initially
});

// Lắng nghe sự kiện thay đổi trạng thái checkbox
checkboxes.forEach(function (checkbox, index) {
    checkbox.addEventListener("change", function () {
        // Enable or disable the corresponding quantity input based on checkbox state
        quantityInputs[index].disabled = !checkbox.checked;

        // If the checkbox is unchecked, set quantity to 0
        if (!checkbox.checked) {
            quantityInputs[index].value = 0;
        }
        if (checkbox.checked) {
            quantityInputs[index].value =
                parseInt(quantityInputs[index].value) + 1;
        }

        updateTotal();
    });
});

// Hàm cập nhật tổng
function updateTotal() {
    var total = 0;
    quantityInputs.forEach(function (input, index) {
        var checkbox = checkboxes[index];

        // Only update the quantity if the checkbox is checked
        if (checkbox.checked) {
            var price = parseFloat(
                input.parentElement.previousElementSibling.textContent
            );
            var quantity = parseInt(input.value);
            var subtotal = price * quantity;

            // Update the Thành tiền column
            input.parentElement.nextElementSibling.textContent =
                subtotal.toFixed(2);

            total += subtotal;
        } else {
            // If the checkbox is unchecked, set the Thành tiền column to 0
            input.parentElement.nextElementSibling.textContent = "0.00";
        }
    });

    // Hiển thị tổng
    document.getElementById("total").textContent = total.toFixed(2);
}

// Lắng nghe sự kiện khi giá trị của thẻ select thay đổi
document
    .getElementById("filter-table__select")
    .addEventListener("change", function () {
        filterTableByPrice();
    });

function filterTableByPrice() {
    var filterValue = document.getElementById("filter-table__select").value;
    var table = document.getElementById("purchase-table");
    var rows = table
        .getElementsByTagName("tbody")[0]
        .getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        var price = parseFloat(rows[i].getElementsByTagName("td")[2].innerText);

        if (
            filterValue === "" ||
            (price <= parseFloat(filterValue) &&
                price > parseFloat(filterValue) - 200)
        ) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}
