<!-- Header -->
<?php
include_once("./templates/header.php");
?>
<!-- Main -->
<main>
    <div class="account">
        <div class="display-area">
            <div class="account__content">
                <nav class="account__row-1">
                    <a href="index.php">Home Page</a> >
                    <p>My account</p>
                </nav>
                <div class="account__row-2">
                    <!-- Login -->
                    <div class="account__login-form">
                        <h2 class="login-form__heading">Log in</h2>
                        <form class="login-form__container" action="./src/controller/login-handle.php" method="POST">
                            <label for="uname">
                                <p>
                                    Username or email <span>*</span>
                                </p>
                            </label>
                            <input type="text" name="uname" id="login-form__uname" required />
                            <div class="login-form__eye-psw">
                                <label for="psw">
                                    <p>
                                        Password <span>*</span>
                                    </p>
                                </label>
                                <input type="password" name="psw" id="login-form__psw" class="login-form__psw-2" required />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="login-form__eye-close eye-close-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="login-form__eye-open eye-open-2 hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="login-form__remember">
                                <input type="checkbox" name="remember" />
                                Remember me
                            </div>
                            <button type="submit" name="submit" class="login-form__btn">
                                Log In
                            </button>
                        </form>
                        <a href="#!" class="login-form__lost-pass">
                            Lost your password?
                        </a>
                    </div>
                    <!-- Register -->
                    <div class="account__register-form">
                        <h2 class="register-form__heading">Register</h2>
                        <form class="register-form__container" id="registerForm" action="./src/controller/register-handle.php" method="POST"> 
                            <div class="register-form__row">
                                <div class="register-form__group">
                                    <label for="uname">
                                        <p>
                                            Username <span>*</span>
                                        </p>
                                    </label>
                                    <input type="text" name="uname" id="register-form__uname" class="form-control" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="register-form__group">
                                    <label for="name">
                                        <p>
                                            Name <span>*</span>
                                        </p>
                                    </label>
                                    <input type="text" name="name" id="register-form__phone" class="form-control" />
                                    <span class="form-message"></span>
                                </div>
                            </div>
                            <div class="register-form__row">
                                <div class="register-form__group">
                                    <label>
                                        <p>Gender <span>*</span></p>
                                    </label>
                                    <div class="form-control">
                                        <div class="form-control__row">
                                            <input type="radio" name="gender" value="1" />
                                            <label for="genderMale">Male</label>
                                        </div>

                                        <div class="form-control__row">
                                            <input type="radio" name="gender" value="0" />
                                            <label for="genderFemale">Female</label>
                                        </div>
                                    </div>
                                    <span class="form-message"></span>
                                </div>
                                <!-- <div class="register-form__group">
                                    <label>
                                        <p>Hobbies <span>*</span></p>
                                    </label>
                                    <div class="form-control">
                                        <div class="form-control__row">
                                            <input type="checkbox" name="hobby" value="dog" id="register-form__hobbyDog">
                                            <label for="hobbyDog">Cat</label>
                                        </div>

                                        <div class="form-control__row">
                                            <input type="checkbox" name="hobby" value="cat" id="register-form__hobbyCat">
                                            <label for="hobbyCat">Dog</label>
                                        </div>
                                    </div>
                                    <span class="form-message"></span>
                                </div> -->
                                <div class="register-form__group">
                                    <label for="phone">
                                        <p>
                                            Phone <span>*</span>
                                        </p>
                                    </label>
                                    <input type="text" name="phoneNumber" id="register-form__phone" class="form-control" />
                                    <span class="form-message"></span>
                                </div>
                            </div>
                            <div class="register-form__group">
                                <label>
                                    <p>Country <span>*</span></p>
                                </label>
                                <select id="register-form__country" name="country">
                                    <option value="">Select country</option>
                                    <option value="afghanistan">Afghanistan</option>
                                    <option value="albania">Albania</option>
                                    <option value="algeria">Algeria</option>
                                    <option value="andorra">Andorra</option>
                                    <option value="angola">Angola</option>
                                    <option value="argentina">Argentina</option>
                                    <option value="australia">Australia</option>
                                    <option value="austria">Austria</option>
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="belgium">Belgium</option>
                                    <option value="brazil">Brazil</option>
                                    <option value="canada">Canada</option>
                                    <option value="china">China</option>
                                    <option value="colombia">Colombia</option>
                                    <option value="denmark">Denmark</option>
                                    <option value="egypt">Egypt</option>
                                    <option value="finland">Finland</option>
                                    <option value="france">France</option>
                                    <option value="germany">Germany</option>
                                    <option value="greece">Greece</option>
                                    <option value="hungary">Hungary</option>
                                    <option value="india">India</option>
                                    <option value="indonesia">Indonesia</option>
                                    <option value="ireland">Ireland</option>
                                    <option value="italy">Italy</option>
                                    <option value="japan">Japan</option>
                                    <option value="kenya">Kenya</option>
                                    <option value="malaysia">Malaysia</option>
                                    <option value="mexico">Mexico</option>
                                    <option value="netherlands">Netherlands</option>
                                    <option value="new-zealand">New Zealand</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="norway">Norway</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="philippines">Philippines</option>
                                    <option value="poland">Poland</option>
                                    <option value="portugal">Portugal</option>
                                    <option value="qatar">Qatar</option>
                                    <option value="russia">Russia</option>
                                    <option value="saudi-arabia">Saudi Arabia</option>
                                    <option value="singapore">Singapore</option>
                                    <option value="south-africa">South Africa</option>
                                    <option value="south-korea">South Korea</option>
                                    <option value="spain">Spain</option>
                                    <option value="sweden">Sweden</option>
                                    <option value="switzerland">Switzerland</option>
                                    <option value="thailand">Thailand</option>
                                    <option value="turkey">Turkey</option>
                                    <option value="uae">United Arab Emirates</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="usa">United States</option>
                                    <option value="vietnam">Vietnam</option>
                                    <option value="zimbabwe">Zimbabwe</option>
                                </select>
                                <span class="form-message"></span>
                            </div>
                            <div class="register-form__group">
                                <label for="address">
                                    <p>Address <span>*</span></p>
                                </label>
                                <input type="text" name="address" id="register-form__address" class="form-control" />
                                <span class="form-message"></span>
                            </div>
                            <div class="register-form__group">
                                <label for="email">
                                    <p>Email <span>*</span></p>
                                </label>
                                <input type="email" name="email" id="register-form__email" class="form-control" />
                                <span class="form-message"></span>
                            </div>
                            <div class="register-form__row">
                                <div class="register-form__group">
                                    <label for="psw">
                                        <p>Password <span>*</span></p>
                                    </label>
                                    <input type="password" name="psw" id="register-form__psw" class="form-control" />
                                    <span class="form-message"></span>
                                </div>
                                <div class="register-form__group">
                                    <label for="confirmPsw">
                                        <p>
                                            Confirm password
                                            <span>*</span>
                                        </p>
                                    </label>
                                    <input type="password" name="confirmPsw" id="register-form__confirmPsw" class="form-control" />
                                    <span class="form-message"></span>
                                </div>
                            </div>
                            <div class="register-form__group">
                                <label for="email">
                                    <p>Ghi chú</p>
                                </label>
                                <textarea id="register-form__note" rows="4" maxlength="200"></textarea>
                            </div>
                            <div class="register-form__agree register-form__group">
                                <input type="radio" name="agree" />
                                <label>I agree to the <a href="#!">Term</a> and <a href="#!">Privacy
                                        Policy</a></label>
                                <span class="form-message"></span>
                            </div>
                            <button type="submit" name="submit" class="register-form__btn">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php
    include_once("./templates/footer.php");
?>