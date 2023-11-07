<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>

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
    <link rel="stylesheet" href="./assets/css/contact.css" />
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
                    <li class="navbar--active">
                        <a href="./index.php" class="navbar__link"> Home </a>
                    </li>
                    <li>
                        <a href="./shop.php" class="navbar__link"> Shop </a>
                    </li>
                    <li>
                        <a href="./page.php" class="navbar__link"> Page </a>
                    </li>
                    <li>
                        <a href="./blog.php" class="navbar__link"> Blog </a>
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
                    <div id="login__form" class="action__login-form">
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
                            <button type="submit" class="login-form__btn">
                                LOGIN
                            </button>
                        </div>
                        <a href="#!" class="login-form__lost-pass">
                            Lost your password?
                        </a>
                    </div>
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

    <!-- Main -->
    <main>
        <div class="contact">
            <div class="contact__content">
                <h1 class="contact__heading">
                    Don’t hesitate to contact us <br />
                    if you need help.
                </h1>
                <div class="contact__info">
                    <div class="contact__address">
                        <div class="contact__title">
                            <svg fill="currentColor" width="25px" height="25px" viewBox="0 0 128 128" id="Layer_1"
                                version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M97.8,15C79.1-3.6,48.9-3.6,30.2,15c-18.6,18.6-18.6,48.9,0,67.6L64,115.6l33.7-33.1l0,0C116.4,63.9,116.4,33.6,97.8,15z M92.1,76.8L64,104.4L35.9,76.9c-7.5-7.5-11.6-17.5-11.6-28.1s4.1-20.6,11.6-28.1S53.4,9,64,9s20.6,4.1,28.1,11.6 s11.6,17.5,11.6,28.1C103.8,59.4,99.6,69.3,92.1,76.8z" />
                                        <path
                                            d="M64,28.3c-11.3,0-20.4,9.2-20.4,20.4S52.7,69.2,64,69.2S84.4,60,84.4,48.8S75.3,28.3,64,28.3z M64,61.2 c-6.8,0-12.4-5.6-12.4-12.4S57.2,36.3,64,36.3s12.4,5.6,12.4,12.4S70.8,61.2,64,61.2z" />
                                        <rect height="8" width="74" x="27" y="119" />
                                    </g>
                                </g>
                            </svg>
                            <span>Address</span>
                        </div>
                        <p class="contact__desc">
                            02 Võ Oanh, Phường 25, Bình Thạnh, <br />
                            Thành phố Hồ Chí Minh, Việt Nam
                        </p>
                    </div>
                    <div class="contact__call">
                        <div class="contact__title">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17 2.75C14.6528 2.75 12.75 4.65279 12.75 7C12.75 7.68122 12.9098 8.32298 13.1931 8.89186C13.3521 9.2111 13.418 9.60224 13.3131 9.99416L13.06 10.94L14.0059 10.6869C14.3978 10.5821 14.7889 10.6479 15.1082 10.8069C15.6771 11.0903 16.3188 11.25 17 11.25C19.3472 11.25 21.25 9.34721 21.25 7C21.25 4.65279 19.3472 2.75 17 2.75ZM11.25 7C11.25 3.82436 13.8244 1.25 17 1.25C20.1757 1.25 22.75 3.82436 22.75 7C22.75 10.1756 20.1757 12.75 17 12.75C16.0816 12.75 15.2114 12.5341 14.4394 12.1496C14.4221 12.141 14.4082 12.1376 14.3998 12.1366C14.3959 12.1361 14.3936 12.1362 14.3926 12.1362L13.2806 12.4338C12.2399 12.7122 11.2878 11.7601 11.5663 10.7195L11.8638 9.60744C11.8639 9.60649 11.8639 9.60415 11.8634 9.6002C11.8624 9.5918 11.859 9.5779 11.8504 9.56061C11.4659 8.78866 11.25 7.91847 11.25 7ZM3.7177 4.09213C4.94388 2.80119 6.9721 3.04305 7.98569 4.47663L9.24668 6.26012C10.0574 7.40678 9.98893 9.00095 9.02135 10.0196L8.7765 10.2774C8.77582 10.2792 8.7751 10.2811 8.77436 10.2832C8.76142 10.3196 8.7287 10.4354 8.7609 10.6551C8.82765 11.1106 9.1793 12.0363 10.607 13.5394C12.0391 15.0472 12.9078 15.4025 13.3103 15.4679C13.484 15.4961 13.5748 15.4716 13.6038 15.4614L14.0124 15.0312C14.8862 14.1113 16.2485 13.93 17.347 14.5623L19.2575 15.662C20.8904 16.6019 21.2705 18.901 19.9655 20.2749L18.545 21.7705C18.1016 22.2373 17.497 22.6357 16.75 22.7095C14.9261 22.8895 10.701 22.655 6.27161 17.9917C2.13844 13.6403 1.35326 9.85536 1.25401 8.00613C1.20497 7.09246 1.61224 6.30877 2.14809 5.74462L2.69189 6.26114L2.1481 5.74462L3.7177 4.09213ZM6.7609 5.3426C6.24855 4.61795 5.32812 4.57471 4.80528 5.12516L3.23568 6.77765C2.90429 7.12654 2.73042 7.52644 2.75185 7.92574C2.83289 9.43555 3.48307 12.8778 7.35919 16.9587C11.4234 21.2375 15.1676 21.3584 16.6026 21.2167C16.8864 21.1887 17.1783 21.0313 17.4574 20.7375L18.8779 19.2419C19.4907 18.5968 19.3301 17.4345 18.5092 16.962L16.5987 15.8623C16.086 15.5672 15.4854 15.6584 15.1 16.0642L14.6445 16.5437L14.1008 16.0272C14.6445 16.5437 14.6439 16.5444 14.6432 16.5452L14.6417 16.5467L14.6388 16.5497L14.6324 16.5562L14.6181 16.5703C14.6078 16.5803 14.5959 16.5913 14.5825 16.6031C14.5556 16.6266 14.5223 16.6535 14.4824 16.6819C14.4022 16.7387 14.2955 16.8012 14.1606 16.8544C13.8846 16.9632 13.5201 17.0216 13.0699 16.9485C12.1923 16.806 11.0422 16.1757 9.51937 14.5724C7.99202 12.9644 7.40746 11.7647 7.27675 10.8726C7.21022 10.4185 7.26346 10.0549 7.36116 9.78033C7.40921 9.64531 7.46594 9.53764 7.51826 9.45588C7.54435 9.41512 7.56922 9.38098 7.5912 9.3532C7.60219 9.33931 7.61246 9.32701 7.62182 9.31625L7.63514 9.30127L7.64125 9.29463L7.64415 9.29152L7.64556 9.29002C7.64626 9.28929 7.64695 9.28856 8.19074 9.80507L7.64695 9.28856L7.93376 8.9866C8.3793 8.51753 8.44403 7.72315 8.02189 7.12608L6.7609 5.3426ZM17 4.25C17.4143 4.25 17.75 4.58579 17.75 5V6.25H19C19.4143 6.25 19.75 6.58579 19.75 7C19.75 7.41421 19.4143 7.75 19 7.75H17.75V9C17.75 9.41421 17.4143 9.75 17 9.75C16.5858 9.75 16.25 9.41421 16.25 9V7.75L15 7.75C14.5858 7.75 14.25 7.41421 14.25 7C14.25 6.58579 14.5858 6.25 15 6.25L16.25 6.25V5C16.25 4.58579 16.5858 4.25 17 4.25Z"
                                    fill="currentColor" />
                            </svg>
                            <span>Call Us</span>
                        </div>
                        <p class="contact__desc">(+84)328909007</p>
                        <p class="contact__desc">(+84)905323576</p>
                    </div>
                    <div class="contact__opening">
                        <div class="contact__title">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M3 5.5L5 3.5M21 5.5L19 3.5M9 12.5L11 14.5L15 10.5M20 12.5C20 16.9183 16.4183 20.5 12 20.5C7.58172 20.5 4 16.9183 4 12.5C4 8.08172 7.58172 4.5 12 4.5C16.4183 4.5 20 8.08172 20 12.5Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>
                            <span>Opening</span>
                        </div>
                        <p class="contact__desc">
                            Monday – Friday: 8am – 4pm
                        </p>
                        <p class="contact__desc">
                            Saturday – Sunday: 9am – 5pm
                        </p>
                    </div>
                    <div class="contact__email">
                        <div class="contact__title">
                            <svg width="22px" height="22px" viewBox="0 -1.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Free-Icons" stroke="currentColor" stroke-width="1" fill="none"
                                    fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <g transform="translate(-1190.000000, -83.000000)" id="Group" stroke="currentColor"
                                        stroke-width="2">
                                        <g transform="translate(1189.000000, 80.000000)" id="Shape">
                                            <polyline points="3.99663853 5 12 10 19.995112 5"></polyline>
                                            <path
                                                d="M9,18 C7.23084308,18 7.69638925,18 4.39663853,18 C3.62343988,18 2.99663853,17.4428432 2.99663853,16.7555556 L2.99663853,5.24444444 C2.99663853,4.55715676 3.62343988,4 4.39663853,4 L19.595112,4 C20.3683106,4 20.995112,4.55715676 20.995112,5.24444444 C20.9992147,7.80802349 21.001266,9.72654201 21.001266,11">
                                            </path>
                                            <path d="M17,13 L17,20 M20.5,16.5 L13.5,16.5"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span>Contact</span>
                        </div>
                        <p class="contact__desc">21H1120013@ut.edu.vn</p>
                        <p class="contact__desc">21H1120054@ut.edu.vn</p>
                    </div>
                </div>
            </div>
            <div class="contact__action">
                <div class="contact__question">
                    <h2 class="question__heading">Got Any Questions?</h2>
                    <p class="question__desc">
                        Use the form below to get in touch with the sales
                        team
                    </p>
                    <form class="question__form">
                        <input type="text" name="name" id="question-form__name" placeholder="Name" required />
                        <input type="email" name="email" id="question-form__email" placeholder="Email" required />
                        <textarea name="question" id="question-form__question" cols="40" rows="4"></textarea>
                    </form>
                    <button class="question-form__btn btn">
                        Send Your Message
                        <div class="chevron">
                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0887145900892!2d106.71422577487016!3d10.80451718934594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175293dceb22197%3A0x755bb0f39a48d4a6!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBHaWFvIFRow7RuZyBW4bqtbiBU4bqjaSBUaMOgbmggUGjhu5EgSOG7kyBDaMOtIE1pbmggLSBDxqEgc-G7nyAx!5e0!3m2!1svi!2sus!4v1697817013166!5m2!1svi!2sus"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__content">
            <div class="display-area">
                <div class="footer__row-1">
                    <div class="footer__column">
                        <a href="index.php">
                            <img src="./assets/images/logo.svg" alt="" class="logo" />
                        </a>
                        <p class="footer__desc">
                            We know pets are like family, so we are
                            committed to providing the highest-quality
                            products that you can trust.
                        </p>
                        <div class="footer__hotline">
                            <img src="./assets/icons/hotline.svg" alt="" />
                            <p>
                                Hotline Order <br /><span>(877) 834 1434</span>
                            </p>
                        </div>
                        <div class="footer__social">
                            <a href="#!" class="footer__btn">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                            <a href="#!" class="footer__btn">
                                <svg width="15px" height="15px" viewBox="0 -2 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="currentColor" stroke-width="1" fill="currentColor"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)"
                                            fill="currentColor">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                    id="twitter-[#154]"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="#!" class="footer__btn">
                                <svg width="15px" height="15px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                            fill="currentColor" />
                                    </g>
                                </svg>
                            </a>
                            <a href="#!" class="footer__btn">
                                <svg width="15px" height="15px" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="currentColor" stroke-width="1" fill="currentColor"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -7399.000000)"
                                            fill="currentColor">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239"
                                                    id="pinterest-[#180]"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer__column">
                        <h3 class="footer__title">USEFUL LINKS</h3>
                        <ul class="footer__list">
                            <li>
                                <a href="#!" class="footer__item">New Products</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Best Sellers</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Bundle & Save</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Online Gift Card</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Discount</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Pet Store Locator</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__column">
                        <h3 class="footer__title">MY ACCOUNT</h3>
                        <ul class="footer__list">
                            <li>
                                <a href="#!" class="footer__item">My Profile</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">My Order History</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">My Wish List</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Order Tracking</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Shipping Info</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Shopping Cart</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__column">
                        <h3 class="footer__title">COMPANY</h3>
                        <ul class="footer__list">
                            <li>
                                <a href="#!" class="footer__item">About Us</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Careers</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Blog</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Affiliate</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Contact Us</a>
                            </li>
                            <li>
                                <a href="#!" class="footer__item">Gift Cards</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__column">
                        <h3 class="footer__title">NEWSLETTER</h3>
                        <p class="footer__desc">
                            Subscribed & get <span>10%</span> discount. Get
                            E-mail updates about our latest shop and
                            <span>special offers</span>.
                        </p>
                        <div class="footer__email">
                            <form action="#!" method="get">
                                <input type="email" name="q" placeholder="Enter your email..." id="email__form" />
                                <button type="submit" class="email__button">
                                    <svg width="20px" height="20px" viewBox="0 -1.5 21 21" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Free-Icons" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(-1190.000000, -83.000000)" id="Group"
                                                stroke="currentColor" stroke-width="2">
                                                <g transform="translate(1189.000000, 80.000000)" id="Shape">
                                                    <polyline points="3.99663853 5 12 10 19.995112 5"></polyline>
                                                    <path
                                                        d="M9,18 C7.23084308,18 7.69638925,18 4.39663853,18 C3.62343988,18 2.99663853,17.4428432 2.99663853,16.7555556 L2.99663853,5.24444444 C2.99663853,4.55715676 3.62343988,4 4.39663853,4 L19.595112,4 C20.3683106,4 20.995112,4.55715676 20.995112,5.24444444 C20.9992147,7.80802349 21.001266,9.72654201 21.001266,11">
                                                    </path>
                                                    <path d="M17,13 L17,20 M20.5,16.5 L13.5,16.5"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                            <div class="footer__download">
                                <div class="download__desc">
                                    <img src="./assets/icons/smartphone.svg" alt="" />
                                    <p>Download Our App</p>
                                </div>
                                <div class="download__system">
                                    <img src="./assets/images/App-Store.jpg" alt="" />
                                    <img src="./assets/images/Google-Play.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="display-area">
                <div class="footer__row-2">
                    <p class="footer__copyright">
                        Copyright © 2023
                        <a href="https://www.facebook.com/SevenCoder03" target="_blank">Seven</a>
                        and
                        <a href="https://www.facebook.com/DucThiep02" target="_blank">Jully</a>. All rights reserved.
                    </p>
                    <img src="./assets/images/payment.png" alt="" class="footer__payment-list" />
                    <div class="footer__policy">
                        <a href="#!">Privacy & Cookie Policy</a>
                        |
                        <a href="#!">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js -->
    <script src="./assets/js/question.js"></script>
    <script src="./assets/js/search.js"></script>
    <script src="./assets/js/login.js"></script>
    <script src="./assets/js/email.js"></script>
    <script src="./assets/js/nav-active.js"></script>
    <script src="./assets/js/scrollToTop.js"></script>
</body>

</html>