<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Beds</title>

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="57x57"
            href="../assets/favicon/apple-icon-57x57.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="60x60"
            href="../assets/favicon/apple-icon-60x60.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="72x72"
            href="../assets/favicon/apple-icon-72x72.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="../assets/favicon/apple-icon-76x76.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="114x114"
            href="../assets/favicon/apple-icon-114x114.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="../assets/favicon/apple-icon-120x120.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="144x144"
            href="../assets/favicon/apple-icon-144x144.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="../assets/favicon/apple-icon-152x152.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="../assets/favicon/apple-icon-180x180.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="../assets/favicon/android-icon-192x192.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="../assets/favicon/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="../assets/favicon/favicon-96x96.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../assets/favicon/favicon-16x16.png"
        />
        <link rel="manifest" href="../assets/favicon/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta
            name="msapplication-TileImage"
            content="../assets/favicon/ms-icon-144x144.png"
        />
        <meta name="theme-color" content="#ffffff" />

        <!-- Reset CSS -->
        <link rel="stylesheet" href="../assets/css/reset.css" />

        <!-- Embed fonts -->
        <link rel="stylesheet" href="../assets/fonts/stylesheet.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="../assets/css/header.css" />
        <link rel="stylesheet" href="../assets/css/footer.css" />
        <link rel="stylesheet" href="../assets/css/shop.css" />
    </head>
    <body>
        <button id="scrollToTopButton">
            <svg
                width="20px"
                height="20px"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                stroke="#ffffff"
            >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M18 15L12.2278 8.26574C12.108 8.12606 11.892 8.12606 11.7722 8.26574L6 15"
                        stroke="#ffffff"
                        stroke-width="2"
                        stroke-linecap="round"
                    ></path>
                </g>
            </svg>
        </button>
        <!-- Header -->
        <header class="header">
            <div class="header__content">
                <!-- Logo -->
                <a href="../index.php">
                    <img
                        src="../assets/images/logo.svg"
                        alt="PetShop N&T"
                        class="header__logo"
                    />
                </a>

                <!-- Navbar -->
                <nav class="header__navbar">
                    <ul class="navbar__list">
                        <li>
                            <a href="../index.php" class="navbar__link">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="../shop.php" class="navbar__link">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="navbar__link"> Page </a>
                        </li>
                        <li>
                            <a href="#!" class="navbar__link"> Blog </a>
                        </li>
                        <li>
                            <a href="../contact.php" class="navbar__link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Search -->
                <div class="header__search">
                    <form action="#!" method="get">
                        <input
                            type="search"
                            name="q"
                            placeholder="Search products..."
                            id="search__form"
                        />
                        <button type="submit" class="search__button">
                            <svg
                                width="16px"
                                height="16px"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                    stroke="white"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Action -->
                <div class="header__action">
                    <a href="#!" id="account" class="action__account">
                        <div class="action__icon">
                            <svg
                                fill="currentColor"
                                width="20px"
                                height="25px"
                                viewBox="0 0 48 48"
                                data-name="Layer 1"
                                id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <title />
                                <path
                                    stroke-width="10"
                                    d="M24,21A10,10,0,1,1,34,11,10,10,0,0,1,24,21ZM24,5a6,6,0,1,0,6,6A6,6,0,0,0,24,5Z"
                                />
                                <path
                                    stroke-width="10"
                                    d="M42,47H6a2,2,0,0,1-2-2V39A16,16,0,0,1,20,23h8A16,16,0,0,1,44,39v6A2,2,0,0,1,42,47ZM8,43H40V39A12,12,0,0,0,28,27H20A12,12,0,0,0,8,39Z"
                                />
                            </svg>
                        </div>
                        <div id="login__form" class="action__login-form">
                            <div class="login-form__head">
                                <div class="login-form__sign-in">Sign in</div>
                                <a href="#!" class="login-form__create-account">
                                    Create an Account
                                </a>
                            </div>
                            <div class="login-form__container">
                                <label for="uname"
                                    ><p>
                                        Username or email <span>*</span>
                                    </p></label
                                >
                                <input
                                    type="text"
                                    placeholder="Username"
                                    name="uname"
                                    id="login-form__uname"
                                    required
                                />
                                <div class="login-form__eye-psw">
                                    <label for="psw"
                                        ><p>Password <span>*</span></p></label
                                    >
                                    <input
                                        type="password"
                                        placeholder="Password"
                                        name="psw"
                                        id="login-form__psw"
                                        required
                                    />
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="login-form__eye-close"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"
                                        />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="login-form__eye-open hidden"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                        />
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
                            <svg
                                width="26px"
                                height="23px"
                                viewBox="0 0 64 64"
                                xmlns="http://www.w3.org/2000/svg"
                                stroke-width="6"
                                stroke="currentColor"
                                fill="none"
                            >
                                <path
                                    d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z"
                                />
                            </svg>
                        </div>
                        <span class="wishlist__count count">0</span>
                    </a>
                    <a href="#!" class="action__cart">
                        <div class="action__icon">
                            <svg
                                width="26px"
                                height="23px"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 3H4.5L6.5 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM6.07142 14H18L21 5H4.78571M11 19C11 20.1046 10.1046 21 9 21C7.89543 21 7 20.1046 7 19C7 17.8954 7.89543 17 9 17C10.1046 17 11 17.8954 11 19Z"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
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
            <!-- Cta -->
            <div class="cta">
                <div class="display-area">
                    <div class="cta__content">
                        <a href="#!" class="cta__left">
                            <div class="cta__title">Dog Supplies</div>
                            <p class="cta__discount"><span>25%</span> Off</p>
                            <p class="cta__hotline">
                                Hotline Order <br />
                                <strong>(887) 834-1434</strong>
                            </p>
                            <img
                                src="../assets/images/cta-3-sub.png"
                                alt=""
                                class="cta__hotline-sub"
                            />
                        </a>
                        <a href="#!" class="cta__right">
                            <div class="cta__title">GIFT FOR PET</div>
                            <h2 class="cta__heading">
                                Premium <br />
                                Cat Food
                            </h2>
                            <p class="cta__discount">Save <span>30%</span></p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Shop -->
            <div class="shop">
                <div class="display-area">
                    <nav class="shop__to-home">
                        <a href="../index.php">Home Page</a> >
                        <a href="../shop.php">Shop</a> >
                        <p>Beds</p>
                    </nav>
                    <div class="shop__content">
                        <!-- Widget -->
                        <div class="shop__widget">
                            <!-- Categories -->
                            <div class="shop__categories">
                                <h3 class="categories__heading">
                                    Product Categories
                                </h3>
                                <ul class="categories__list">
                                    <li
                                        class="categories__item categories__active"
                                    >
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Beds
                                        </a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Bowls
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Clothing
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Crates
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Flea & Tick
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Food
                                        </a>
                                        <span>(4)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Furniture
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Pharmacy
                                        </a>
                                        <span>(4)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Toy
                                        </a>
                                        <span>(1)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Treats
                                        </a>
                                        <span>(4)</span>
                                    </li>
                                    <li class="categories__item">
                                        <a href="#!" class="categories__link">
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Uncategorized
                                        </a>
                                        <span>(5)</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Filter by price -->
                            <div class="shop__filter-price">
                                <h3 class="filter-price__heading">
                                    Filter By Price
                                </h3>
                                <div class="filter-price__price">
                                    <div class="slider">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input">
                                        <input
                                            type="range"
                                            class="range-min"
                                            min="10"
                                            max="990"
                                            value="10"
                                            step="10"
                                        />
                                        <input
                                            type="range"
                                            class="range-max"
                                            min="10"
                                            max="990"
                                            value="990"
                                            step="10"
                                        />
                                    </div>
                                    <div class="filter-price__row">
                                        <div class="filter-price__label">
                                            <span>Price: </span>
                                            <div class="field">
                                                <span>$</span>
                                                <input
                                                    type="number"
                                                    class="input-min"
                                                    value="10"
                                                />
                                            </div>
                                            <div class="separator">-</div>
                                            <div class="field">
                                                <span>$</span>
                                                <input
                                                    type="number"
                                                    class="input-max"
                                                    value="990"
                                                />
                                            </div>
                                        </div>
                                        <div class="filter-price__btn btn">
                                            <span>Filter</span>
                                            <div class="chevron">
                                                <svg
                                                    width="16px"
                                                    height="16px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M9 6L15 12L9 18"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter by brands -->
                            <div class="shop__filter-brands">
                                <h3 class="filter-brands__heading">
                                    Filter By Brands
                                </h3>
                                <ul class="filter-brands__list">
                                    <li class="filter-brands__item">
                                        <a
                                            href="#!"
                                            class="filter-brands__link"
                                        >
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Ark Naturals
                                        </a>
                                        <span>(5)</span>
                                    </li>
                                    <li class="filter-brands__item">
                                        <a
                                            href="#!"
                                            class="filter-brands__link"
                                        >
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Arm & Hammer
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="filter-brands__item">
                                        <a
                                            href="#!"
                                            class="filter-brands__link"
                                        >
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Bags on Board
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="filter-brands__item">
                                        <a
                                            href="#!"
                                            class="filter-brands__link"
                                        >
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Begin Strips
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                    <li class="filter-brands__item">
                                        <a
                                            href="#!"
                                            class="filter-brands__link"
                                        >
                                            <svg
                                                xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                xmlns:cc="http://creativecommons.org/ns#"
                                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                width="15px"
                                                height="15px"
                                                viewBox="0 0 14 14"
                                                id="svg2"
                                                fill="#000000"
                                                transform="rotate(45)"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <defs id="defs6" />
                                                    <rect
                                                        width="14"
                                                        height="14"
                                                        x="0"
                                                        y="0"
                                                        id="canvas"
                                                        style="
                                                            fill: none;
                                                            stroke: none;
                                                            visibility: hidden;
                                                        "
                                                    />
                                                    <path
                                                        d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                                                        id="pet"
                                                        style="
                                                            fill: currentColor;
                                                            fill-opacity: 1;
                                                            stroke: none;
                                                        "
                                                    />
                                                </g>
                                            </svg>
                                            Canine Carry Outs
                                        </a>
                                        <span>(3)</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Best Seller -->
                            <div class="shop__best-seller">
                                <h3 class="best-seller__heading">
                                    Best Seller Products
                                </h3>
                                <div class="best-seller__list">
                                    <!-- Item 1 -->
                                    <div class="best-seller__item">
                                        <img
                                            src="../assets/images/product-1.jpg"
                                            alt="Ergonomic Paper Clock"
                                            class="best-seller__img"
                                        />

                                        <div class="best-seller__caption">
                                            <a
                                                href="#!"
                                                class="best-seller__title"
                                            >
                                                Ergonomic Paper Clock
                                            </a>
                                            <div class="product__rating">
                                                <div class="product__star">
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-empty.svg"
                                                        alt=""
                                                    />
                                                </div>
                                                <span class="product__review"
                                                    >(5 reviews)</span
                                                >
                                            </div>
                                            <strong class="best-seller__price"
                                                >$853.93</strong
                                            >
                                        </div>
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="best-seller__item">
                                        <img
                                            src="../assets/images/product-3.jpg"
                                            alt="Practical Rubber Bottle"
                                            class="best-seller__img"
                                        />
                                        <div class="best-seller__caption">
                                            <a
                                                href="#!"
                                                class="best-seller__title"
                                            >
                                                Practical Rubber Bottle
                                            </a>
                                            <div class="product__rating">
                                                <div class="product__star">
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-empty.svg"
                                                        alt=""
                                                    />
                                                </div>
                                                <span class="product__review"
                                                    >(5 reviews)</span
                                                >
                                            </div>
                                            <strong class="best-seller__price"
                                                >$131.01</strong
                                            >
                                        </div>
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="best-seller__item">
                                        <img
                                            src="../assets/images/product-5.jpg"
                                            alt="Fantastic Plastic Clock"
                                            class="best-seller__img"
                                        />

                                        <div class="best-seller__caption">
                                            <a
                                                href="#!"
                                                class="best-seller__title"
                                            >
                                                Fantastic Plastic Clock
                                            </a>
                                            <div class="product__rating">
                                                <div class="product__star">
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-empty.svg"
                                                        alt=""
                                                    />
                                                </div>
                                                <span class="product__review"
                                                    >(5 reviews)</span
                                                >
                                            </div>
                                            <strong class="best-seller__price"
                                                >$305.49</strong
                                            >
                                        </div>
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="best-seller__item">
                                        <img
                                            src="../assets/images/product-6.jpg"
                                            alt="Intelligent Wooden Shirt"
                                            class="best-seller__img"
                                        />

                                        <div class="best-seller__caption">
                                            <a
                                                href="#!"
                                                class="best-seller__title"
                                            >
                                                Intelligent Wooden Shirt
                                            </a>
                                            <div class="product__rating">
                                                <div class="product__star">
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-empty.svg"
                                                        alt=""
                                                    />
                                                </div>
                                                <span class="product__review"
                                                    >(5 reviews)</span
                                                >
                                            </div>
                                            <strong class="best-seller__price"
                                                >$426.03</strong
                                            >
                                        </div>
                                    </div>
                                    <!-- Item 5 -->
                                    <div class="best-seller__item">
                                        <img
                                            src="../assets/images/product-7.jpg"
                                            alt="Rustic Marble Car"
                                            class="best-seller__img"
                                        />

                                        <div class="best-seller__caption">
                                            <a
                                                href="#!"
                                                class="best-seller__title"
                                            >
                                                Rustic Marble Car
                                            </a>
                                            <div class="product__rating">
                                                <div class="product__star">
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-full.svg"
                                                        alt=""
                                                    />
                                                    <img
                                                        src="../assets/icons/star-empty.svg"
                                                        alt=""
                                                    />
                                                </div>
                                                <span class="product__review"
                                                    >(5 reviews)</span
                                                >
                                            </div>
                                            <strong class="best-seller__price"
                                                >$899.41</strong
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter by tags -->
                            <div class="shop__filter-tags">
                                <h3 class="filter-tags__heading">
                                    Filter By Tags
                                </h3>
                                <div class="filter-tags__action">
                                    <button class="filter-tags__btn">
                                        Collection
                                    </button>
                                    <button class="filter-tags__btn">
                                        Food Pet
                                    </button>
                                    <button class="filter-tags__btn">
                                        Kitten Food
                                    </button>
                                    <button class="filter-tags__btn">
                                        Pet Essentials
                                    </button>
                                    <button class="filter-tags__btn">
                                        Puppy
                                    </button>
                                    <button class="filter-tags__btn">
                                        Treat
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Site main -->
                        <div class="shop__site-main">
                            <div class="shop__sorting">
                                <div class="sorting__action">
                                    <a href="#!" class="sorting__icon">
                                        <svg
                                            width="16px"
                                            height="16px"
                                            viewBox="0 0 28 28"
                                            version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                                            fill="#000000"
                                        >
                                            <g
                                                id="SVGRepo_bgCarrier"
                                                stroke-width="0"
                                            />

                                            <g
                                                id="SVGRepo_tracerCarrier"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />

                                            <g id="SVGRepo_iconCarrier">
                                                <title>grid</title>
                                                <desc>
                                                    Created with Sketch Beta.
                                                </desc>
                                                <defs></defs>
                                                <g
                                                    id="Page-1"
                                                    stroke="none"
                                                    stroke-width="1"
                                                    fill="none"
                                                    fill-rule="evenodd"
                                                    sketch:type="MSPage"
                                                >
                                                    <g
                                                        id="Icon-Set-Filled"
                                                        sketch:type="MSLayerGroup"
                                                        transform="translate(-104.000000, -935.000000)"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            d="M128,935 L124,935 C121.791,935 120,936.791 120,939 L120,943 C120,945.209 121.791,947 124,947 L128,947 C130.209,947 132,945.209 132,943 L132,939 C132,936.791 130.209,935 128,935 L128,935 Z M128,951 L124,951 C121.791,951 120,952.791 120,955 L120,959 C120,961.209 121.791,963 124,963 L128,963 C130.209,963 132,961.209 132,959 L132,955 C132,952.791 130.209,951 128,951 L128,951 Z M112,951 L108,951 C105.791,951 104,952.791 104,955 L104,959 C104,961.209 105.791,963 108,963 L112,963 C114.209,963 116,961.209 116,959 L116,955 C116,952.791 114.209,951 112,951 L112,951 Z M112,935 L108,935 C105.791,935 104,936.791 104,939 L104,943 C104,945.209 105.791,947 108,947 L112,947 C114.209,947 116,945.209 116,943 L116,939 C116,936.791 114.209,935 112,935 L112,935 Z"
                                                            id="grid"
                                                            sketch:type="MSShapeGroup"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="#!" class="sorting__icon">
                                        <svg
                                            width="25px"
                                            height="25px"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g
                                                id="SVGRepo_bgCarrier"
                                                stroke-width="0"
                                            />

                                            <g
                                                id="SVGRepo_tracerCarrier"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />

                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M8 6L21 6.00078M8 12L21 12.0008M8 18L21 18.0007M3 6.5H4V5.5H3V6.5ZM3 12.5H4V11.5H3V12.5ZM3 18.5H4V17.5H3V18.5Z"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </g>
                                        </svg>
                                    </a>
                                    <select id="sorting__select">
                                        <option value="default">
                                            Default sorting
                                        </option>
                                        <option value="popularity">
                                            Sort by popularity
                                        </option>
                                        <option value="average">
                                            Sort by average rating
                                        </option>
                                        <option value="latest">
                                            Sort by latest
                                        </option>
                                        <option value="low-to-high">
                                            Sort by price: low to high
                                        </option>
                                        <option value="high-to-low">
                                            Sort by price: high to low
                                        </option>
                                    </select>
                                </div>
                                <div class="sorting__result">
                                    Showing 1–12 of 19 results
                                </div>
                            </div>
                            <div class="shop__list">
                                <!-- Product 1 -->
                                <a href="#!" class="shop__product product">
                                    <div class="product__thumb">
                                        <img
                                            src="../assets/images/product-16.jpg"
                                            alt="Lightweight Aluminum Clock"
                                            class="product__img"
                                        />
                                        <button class="product__wishlist">
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 64 64"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke-width="5"
                                                stroke="currentColor"
                                                fill="none"
                                            >
                                                <path
                                                    d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z"
                                                />
                                            </svg>
                                        </button>
                                        <button class="product__compare">
                                            <svg
                                                fill="currentColor"
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g>
                                                    <path
                                                        d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="product__quick-view">
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                        <button
                                            class="product__add-to-cart btn"
                                        >
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product__caption">
                                        <span class="product__price"
                                            >$60.40 – $98.32</span
                                        >
                                        <h3 class="product__name">
                                            Lightweight Aluminum Clock
                                        </h3>
                                        <div class="product__rating">
                                            <div class="product__star">
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-empty.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span class="product__review"
                                                >(5 reviews)</span
                                            >
                                        </div>
                                    </div>
                                </a>
                                <!-- Product 2 -->
                                <a href="#!" class="shop__product product">
                                    <div class="product__thumb">
                                        <img
                                            src="../assets/images/product-19.jpg"
                                            alt="Lightweight Iron Watch"
                                            class="product__img"
                                        />
                                        <button class="product__wishlist">
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 64 64"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke-width="5"
                                                stroke="currentColor"
                                                fill="none"
                                            >
                                                <path
                                                    d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z"
                                                />
                                            </svg>
                                        </button>
                                        <button class="product__compare">
                                            <svg
                                                fill="currentColor"
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g>
                                                    <path
                                                        d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="product__quick-view">
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                        <button
                                            class="product__add-to-cart btn"
                                        >
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product__caption">
                                        <span class="product__price"
                                            >$915.18</span
                                        >
                                        <h3 class="product__name">
                                            Lightweight Iron Watch
                                        </h3>
                                        <div class="product__rating">
                                            <div class="product__star">
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-empty.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span class="product__review"
                                                >(5 reviews)</span
                                            >
                                        </div>
                                    </div>
                                </a>
                                <!-- Product 3 -->
                                <a href="#!" class="shop__product product">
                                    <div class="product__thumb">
                                        <img
                                            src="../assets/images/product-17.jpg"
                                            alt="Practical Linen Knife"
                                            class="product__img"
                                        />
                                        <button class="product__wishlist">
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 64 64"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke-width="5"
                                                stroke="currentColor"
                                                fill="none"
                                            >
                                                <path
                                                    d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z"
                                                />
                                            </svg>
                                        </button>
                                        <button class="product__compare">
                                            <svg
                                                fill="currentColor"
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g>
                                                    <path
                                                        d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                        <button class="product__quick-view">
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"
                                                />

                                                <g
                                                    id="SVGRepo_tracerCarrier"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />

                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                        <button
                                            class="product__add-to-cart btn"
                                        >
                                            <svg
                                                width="20px"
                                                height="20px"
                                                viewBox="0 0 24 24"
                                                fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product__caption">
                                        <span class="product__price"
                                            >$857.64</span
                                        >
                                        <h3 class="product__name">
                                            Practical Linen Knife
                                        </h3>
                                        <div class="product__rating">
                                            <div class="product__star">
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-full.svg"
                                                    alt=""
                                                />
                                                <img
                                                    src="../assets/icons/star-empty.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span class="product__review"
                                                >(5 reviews)</span
                                            >
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
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
                            <a href="../index.php">
                                <img
                                    src="../assets/images/logo.svg"
                                    alt=""
                                    class="logo"
                                />
                            </a>
                            <p class="footer__desc">
                                We know pets are like family, so we are
                                committed to providing the highest-quality
                                products that you can trust.
                            </p>
                            <div class="footer__hotline">
                                <img src="../assets/icons/hotline.svg" alt="" />
                                <p>
                                    Hotline Order <br /><span
                                        >(877) 834 1434</span
                                    >
                                </p>
                            </div>
                            <div class="footer__social">
                                <a href="#!" class="footer__btn">
                                    <svg
                                        width="25px"
                                        height="25px"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </a>
                                <a href="#!" class="footer__btn">
                                    <svg
                                        width="15px"
                                        height="15px"
                                        viewBox="0 -2 20 20"
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <g
                                            id="Page-1"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            fill="currentColor"
                                            fill-rule="evenodd"
                                        >
                                            <g
                                                id="Dribbble-Light-Preview"
                                                transform="translate(-60.000000, -7521.000000)"
                                                fill="currentColor"
                                            >
                                                <g
                                                    id="icons"
                                                    transform="translate(56.000000, 160.000000)"
                                                >
                                                    <path
                                                        d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                        id="twitter-[#154]"
                                                    ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#!" class="footer__btn">
                                    <svg
                                        width="15px"
                                        height="15px"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        stroke="currentColor"
                                    >
                                        <g
                                            id="SVGRepo_bgCarrier"
                                            stroke-width="0"
                                        />

                                        <g
                                            id="SVGRepo_tracerCarrier"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />

                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                                fill="currentColor"
                                            />
                                        </g>
                                    </svg>
                                </a>
                                <a href="#!" class="footer__btn">
                                    <svg
                                        width="15px"
                                        height="15px"
                                        viewBox="0 0 20 20"
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <g
                                            id="Page-1"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            fill="currentColor"
                                            fill-rule="evenodd"
                                        >
                                            <g
                                                id="Dribbble-Light-Preview"
                                                transform="translate(-220.000000, -7399.000000)"
                                                fill="currentColor"
                                            >
                                                <g
                                                    id="icons"
                                                    transform="translate(56.000000, 160.000000)"
                                                >
                                                    <path
                                                        d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239"
                                                        id="pinterest-[#180]"
                                                    ></path>
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
                                    <a href="#!" class="footer__item"
                                        >New Products</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Best Sellers</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Bundle & Save</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Online Gift Card</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Discount</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Pet Store Locator</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="footer__column">
                            <h3 class="footer__title">MY ACCOUNT</h3>
                            <ul class="footer__list">
                                <li>
                                    <a href="#!" class="footer__item"
                                        >My Profile</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >My Order History</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >My Wish List</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Order Tracking</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Shipping Info</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Shopping Cart</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="footer__column">
                            <h3 class="footer__title">COMPANY</h3>
                            <ul class="footer__list">
                                <li>
                                    <a href="#!" class="footer__item"
                                        >About Us</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Careers</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item">Blog</a>
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Affiliate</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Contact Us</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="footer__item"
                                        >Gift Cards</a
                                    >
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
                                    <input
                                        type="email"
                                        name="q"
                                        placeholder="Enter your email..."
                                        id="email__form"
                                    />
                                    <button type="submit" class="email__button">
                                        <svg
                                            width="20px"
                                            height="20px"
                                            viewBox="0 -1.5 21 21"
                                            version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                        >
                                            <g
                                                id="Free-Icons"
                                                stroke="none"
                                                stroke-width="1"
                                                fill="none"
                                                fill-rule="evenodd"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <g
                                                    transform="translate(-1190.000000, -83.000000)"
                                                    id="Group"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                >
                                                    <g
                                                        transform="translate(1189.000000, 80.000000)"
                                                        id="Shape"
                                                    >
                                                        <polyline
                                                            points="3.99663853 5 12 10 19.995112 5"
                                                        ></polyline>
                                                        <path
                                                            d="M9,18 C7.23084308,18 7.69638925,18 4.39663853,18 C3.62343988,18 2.99663853,17.4428432 2.99663853,16.7555556 L2.99663853,5.24444444 C2.99663853,4.55715676 3.62343988,4 4.39663853,4 L19.595112,4 C20.3683106,4 20.995112,4.55715676 20.995112,5.24444444 C20.9992147,7.80802349 21.001266,9.72654201 21.001266,11"
                                                        ></path>
                                                        <path
                                                            d="M17,13 L17,20 M20.5,16.5 L13.5,16.5"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                                <div class="footer__download">
                                    <div class="download__desc">
                                        <img
                                            src="../assets/icons/smartphone.svg"
                                            alt=""
                                        />
                                        <p>Download Our App</p>
                                    </div>
                                    <div class="download__system">
                                        <img
                                            src="../assets/images/App-Store.jpg"
                                            alt=""
                                        />
                                        <img
                                            src="../assets/images/Google-Play.jpg"
                                            alt=""
                                        />
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
                            <a
                                href="https://www.facebook.com/SevenCoder03"
                                target="_blank"
                                >Seven</a
                            >
                            and
                            <a
                                href="https://www.facebook.com/DucThiep02"
                                target="_blank"
                                >Jully</a
                            >. All rights reserved.
                        </p>
                        <img
                            src="../assets/images/payment.png"
                            alt=""
                            class="footer__payment-list"
                        />
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
        <script src="../assets/js/search.js"></script>
        <script src="../assets/js/login.js"></script>
        <script src="../assets/js/email.js"></script>
        <script src="../assets/js/scrollToTop.js"></script>
        <script src="../assets/js/range.js"></script>
    </body>
</html>
