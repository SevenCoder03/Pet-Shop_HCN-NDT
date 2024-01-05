<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $loggedIn = (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./assets/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="./assets/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Reset CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css" />

    <!-- Embed fonts -->
    <link rel="stylesheet" href="./assets/fonts/stylesheet.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/slideshow.css">
    <link rel="stylesheet" href="./assets/css/account.css">
    <link rel="stylesheet" href="./assets/css/404.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <link rel="stylesheet" href="./assets/css/shop.css">

</head>

<body>
    <button id="scrollToTopButton">
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            stroke="#ffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M18 15L12.2278 8.26574C12.108 8.12606 11.892 8.12606 11.7722 8.26574L6 15" stroke="#ffffff"
                    stroke-width="2" stroke-linecap="round"></path>
            </g>
        </svg>
    </button>
    <!-- Header -->
    <header class="header">
        <div class="header__content">
            <!-- Logo -->
            <a href="index.php">
                <img src="./assets/images/logo.svg" alt="PetShop N&T" class="logo" />
            </a>

            <!-- Navbar -->
            <nav class="header__navbar">
                <ul class="navbar__list">
                    <li>
                        <a href="./index.php" class="navbar__link"> Home </a>
                    </li>
                    <li>
                        <a href="./shop.php" class="navbar__link"> Shop </a>
                    </li>
                    <li>
                        <a href="./page.php" class="navbar__link"> Page </a>
                    </li>
                    <li class="navbar__dropdown">
                        <a href="#" class="navbar__link navbar__management"> Management </a>
                        <ul class="navbar__dropdown-content">
                            <li><a href="./product-management.php" class="navbar__link dropdown__item">Product</a></li>
                            <li><a href="./user-management.php" class="navbar__link dropdown__item">User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./contact.php" class="navbar__link"> Contact Us </a>
                    </li>
                </ul>
            </nav>

            <!-- Search -->
            <div class="header__search">
                <form action="#!" method="get">
                    <input type="search" name="q" placeholder="Search products..." id="search__form" />
                    <button type="submit" class="search__button">
                        <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Action -->
            <div class="header__action">
                <a href="#!" id="account" class="action__account">
                    <div class="action__icon">
                        <svg fill="currentColor" width="20px" height="25px" viewBox="0 0 48 48" data-name="Layer 1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                            <title />
                            <path stroke-width="10"
                                d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z" />
                            <path stroke-width="10"
                                d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z" />
                        </svg>
                    </div>
                    <form id="login__form" class="action__login-form" action="./src/controller/login-handle.php"
                        method="POST">
                        <div class="login-form__head">
                            <div class="login-form__sign-in">Sign in</div>
                            <a href="account.php" class="login-form__create-account">
                                Create an Account
                            </a>
                        </div>
                        <div class="login-form__container">
                            <label for="uname">
                                <p>
                                    Username or email <span>*</span>
                                </p>
                            </label>
                            <input type="text" placeholder="Username" name="uname" id="login-form__uname" required />
                            <div class="login-form__eye-psw">
                                <label for="psw">
                                    <p>Password <span>*</span></p>
                                </label>
                                <input type="password" placeholder="Password" name="psw" id="login-form__psw"
                                    required />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="login-form__eye-close">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="login-form__eye-open hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <button type="submit" name="submit" class="login-form__btn">
                                LOGIN
                            </button>
                        </div>
                        <a href="#!" class="login-form__lost-pass">
                            Lost your password?
                        </a>
                    </form>
                    <div id="info__form" class="action__info-form">
                        <a id="edit_info" class="info-form__item navbar__link" href="">Edit Information</a>
                        <a id="logout" class="info-form__item navbar__link"
                            href="./src/controller/logout.php">Logout</a>
                    </div>
                    <!-- End Logout -->
                </a>
                <a href="#!" class="action__wishlist">
                    <div class="action__icon">
                        <svg width="26px" height="23px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                            stroke-width="6" stroke="currentColor" fill="none">
                            <path
                                d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                        </svg>
                    </div>
                    <span class="wishlist__count count">0</span>
                </a>
                <a href="#!" class="action__cart">
                    <div class="action__icon">
                        <svg width="26px" height="23px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 3H4.5L6.5 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM6.07142 14H18L21 5H4.78571M11 19C11 20.1046 10.1046 21 9 21C7.89543 21 7 20.1046 7 19C7 17.8954 7.89543 17 9 17C10.1046 17 11 17.8954 11 19Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <strong class="action__money">$0.00</strong>
                    </div>
                    <span class="cart__count count">0</span>
                </a>
            </div>
        </div>
    </header>