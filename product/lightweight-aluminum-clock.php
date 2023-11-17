<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lightweight Aluminum Clock</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="../assets/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="../assets/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Reset CSS -->
    <link rel="stylesheet" href="../assets/css/reset.css" />

    <!-- Embed fonts -->
    <link rel="stylesheet" href="../assets/fonts/stylesheet.css" />

    <!-- CDN icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="../assets/css/product-details.css" />
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
    <?php 
        include("../templates/header.php");
    ?>

    <!-- Main -->
    <main>
        <div class="display-area">
            <!-- Nav -->
            <nav class="nav">
                <a href="../index.php">Home Page</a> >
                <a href="../shop.php">Shop</a> >
                <p>Lightweight Aluminum Clock</p>
            </nav>

            <!-- Product details -->
            <div class="product-details">
                <div class="product-details__left">
                    <img src="../assets/images/product-16.jpg" alt="Lightweight Aluminum Clock"
                        class="product-details__img">
                </div>
                <div class="product-details__right">
                    <span class="product-details__status">In Stock</span>
                    <h1 class="product-details__title">Lightweight Aluminum Clock</h1>
                    <div class="product-details__sku">SKU: LIGHTWEIGHT-ALUMINUM-CLOCK-58917473</div>
                    <div class="product-details__price">$60.40–$98.32</div>
                    <div class="product-details__rating">
                        <div class="rating__star">
                            <img src="../assets/icons/star-full.svg" alt="" />
                            <img src="../assets/icons/star-full.svg" alt="" />
                            <img src="../assets/icons/star-full.svg" alt="" />
                            <img src="../assets/icons/star-full.svg" alt="" />
                            <img src="../assets/icons/star-empty.svg" alt="" />
                        </div>
                        <span class="rating__review">(5 reviews)</span>
                    </div>
                    <p class="product-details__desc">Error quam sequi et totam unde dolorem. Eius tempora quia iure pariatur et aut. Laboriosam soluta quia rem commodi aperiam iure.</p>
                    <form class="product-details__cart">
                        <div class="cart__up">
                            <div id="cart__buy-amount">
                                <button class="cart__minus-btn" onclick="handleMinus(event)">
                                    <svg width="15px" height="15px" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                    </svg>
                                </button>
                                <input type="text" name="amount" id="amount" value="1">
                                <button class="cart__plus-btn" onclick="handlePlus(event)">
                                    <svg width="15px" height="15px" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </button>
                            </div>
                            <button class="cart__btn btn">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                        fill="currentColor" />
                                </svg>
                                Add To Cart
                            </button>
                        </div>
                        <div class="cart__down">
                            <button class="cart__wishlist-btn">
                                <svg width="29px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    stroke-width="3" stroke="currentColor" fill="none">
                                    <path
                                        d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                                </svg>
                                Brose Wishlist
                            </button>
                            <button class="cart__compare-btn">
                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z" />
                                    </g>
                                </svg>
                                Compare
                            </button>
                        </div>
                    </form>
                    <div class="product-details__categories">
                        <a href="../product-category/beds.php"><span>Categories:</span> Beds,</a>
                        <a href="../product-category/treats.php"> Treats</a>
                    </div>
                    <div class="product-details__tags">
                        <a href="../product-tag/kitten-food.php"><span>Tag:</span> Kitten Food,</a>
                        <a href="../product-tag/pet-essentials.php"> Pet Essentials</a>
                    </div>
                    <div class="product-details__share">
                        <span>Share:</span>
                        <a href="https://www.facebook.com/sharer.php?u=https://example.com" target="_blank">
                            <i class="fa-brands fa-facebook fa-xl" style="color: #146ebe;"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=https://example.com" target="_blank">
                            <i class="fa-brands fa-square-twitter fa-xl" style="color: #1d9bf0;"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://example.com"
                            target="_blank">
                            <i class="fa-brands fa-linkedin fa-xl" style="color: #01648d;"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url=https://example.com&media=image-url&description=Your%20Description"
                            target="_blank">
                            <i class="fa-brands fa-pinterest fa-xl" style="color: #e70024;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Label -->
        <div class="label">
            <div class="label__action">
                <button class="desc__btn label--active">Description</button>
                <button class="information__btn">Addition Information</button>
                <button class="review__btn">Reviews(5)</button>
            </div>
            <div class="label__content">
                <div class="desc__content">
                    <p>Et laboriosam corporis non rerum. Nihil et provident ipsum distinctio tempore quos voluptatem. Aut provident eius dolorem porro atque. Officiis doloremque quis tempora magnam mollitia veritatis aliquid.</p>
                    <p>Perspiciatis cum optio dignissimos rem doloremque. Consequuntur aut eos eveniet consectetur et ea. Fuga doloribus non doloribus ex. Quidem qui aut nobis quos. Dolor non occaecati aliquam modi corrupti ut.</p>
                    <p>Et voluptatem porro quibusdam aut et sunt. Maxime quam dolor vitae. Iure enim et rerum culpa sit occaecati porro.</p>
                </div>
                <div class="information__content">
                    <table class="information__table">
                        <tr>
                            <td>Stand Up</td>
                            <td>35″L x 24″W x 37-45″H (front to back wheel)</td>
                        </tr>
                        <tr>
                            <td>Folded (W/O Wheels)</td>
                            <td>32.5″L x 18.5″W x 16.5″H</td>
                        </tr>
                        <tr>
                            <td>Folded (W/ Wheels)</td>
                            <td>32.5″L x 24″W x 18.5″H</td>
                        </tr>
                        <tr>
                            <td>Door Pass Through</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>Frame</td>
                            <td>Aluminum</td>
                        </tr>
                        <tr>
                            <td>Weight (W/O Wheels)</td>
                            <td>20 LBS</td>
                        </tr>
                        <tr>
                            <td>Weight Capacity</td>
                            <td>60 LBS</td>
                        </tr>
                        <tr>
                            <td>Width</td>
                            <td>24″</td>
                        </tr>
                        <tr>
                            <td>Handle Height (Ground To Handle)</td>
                            <td>37-45″</td>
                        </tr>
                        <tr>
                            <td>Wheels</td>
                            <td>12″ air / wide track slick tread</td>
                        </tr>
                        <tr>
                            <td>Seat Back Height</td>
                            <td>21.5″</td>
                        </tr>
                        <tr>
                            <td>Head Room (Inside Canopy)</td>
                            <td>25″</td>
                        </tr>
                    </table>
                </div>
                <div class="review__list">
                    <div class="review__item">
                        <img src="../assets/images/avatar.png" alt="avatar" class="review__avatar">
                        <div class="review__content">
                            <div class="rating__star">
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-empty.svg" alt="" />
                            </div>
                            <div class="review__information">
                                <b class="review__name">L. Androws</b>
                                <div class="review__time">May 7, 2022</div>
                            </div>
                            <p class="review__desc">
                                I am 6 feet tall and 220 lbs. This shirt fit me perfectly in the chest and
                                shoulders. My only complaint is that it is so long! I like to wear polo shirts
                                untucked. This shirt goes completely past my rear end. If I wore it with ordinary
                                shorts, you probably wouldnt be able to see the shorts at all – completely hidden by
                                the shirt. It needs to be 4 to 5 inches shorter in terms of length to suit me. I
                                have many RL polo shirts, and this one is by far the longest. I dont understand why.
                            </p>
                        </div>
                    </div>
                    <div class="review__item">
                        <img src="../assets/images/avatar.png" alt="avatar" class="review__avatar">
                        <div class="review__content">
                            <div class="rating__star">
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-empty.svg" alt="" />
                            </div>
                            <div class="review__information">
                                <b class="review__name">Kenneth R. Myers</b>
                                <div class="review__time">May 7, 2022</div>
                            </div>
                            <p class="review__desc">
                                The shirt was not the fabric I believed it to be. It says Classic Fit but was made
                                like the older versions, not the soft cotton like my others. I don’t understand how
                                the labels are the same but a completely different shirt. Oh well, stuck with it
                                now.
                            </p>
                        </div>
                    </div>
                    <div class="review__item">
                        <img src="../assets/images/avatar.png" alt="avatar" class="review__avatar">
                        <div class="review__content">
                            <div class="rating__star">
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-empty.svg" alt="" />
                            </div>
                            <div class="review__information">
                                <b class="review__name">Mike Addington</b>
                                <div class="review__time">May 7, 2022</div>
                            </div>
                            <p class="review__desc">
                                Real authentic genuine quality however it fit me like an XL size when In fact Im L.
                                Beware
                            </p>
                        </div>
                    </div>
                    <div class="review__item">
                        <img src="../assets/images/avatar.png" alt="avatar" class="review__avatar">
                        <div class="review__content">
                            <div class="rating__star">
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-empty.svg" alt="" />
                            </div>
                            <div class="review__information">
                                <b class="review__name">Ervin Arlington</b>
                                <div class="review__time">May 7, 2022</div>
                            </div>
                            <p class="review__desc">
                                The Ralph Lauren quaility is here in abundance. My husband always says that the
                                Lauren polos fit better and last longer than any other brand.I love the new
                                “heathered” color and the price is always excellent through shop
                            </p>
                        </div>
                    </div>
                    <div class="review__item">
                        <img src="../assets/images/avatar.png" alt="avatar" class="review__avatar">
                        <div class="review__content">
                            <div class="rating__star">
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-full.svg" alt="" />
                                <img src="../assets/icons/star-empty.svg" alt="" />
                            </div>
                            <div class="review__information">
                                <b class="review__name">Patrick M. Newman</b>
                                <div class="review__time">May 7, 2022</div>
                            </div>
                            <p class="review__desc">
                                My son loved this Jacket for his Senior Prom… He got sooo many compliments! He is
                                slim build 5’11 and 150lbs … I ordered a large … it was a little big … but it was
                                fine!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="display-area">
            <!-- Related products -->
            <div class="related">
                <h2 class="related__heading">
                    Related Products
                    <img src="../assets/icons/pet-foot.png" alt="" class="related__icon" />
                </h2>
                <div class="related__list">
                    <!-- Product 1 -->
                    <a href="#!" class="related__product product">
                        <div class="product__thumb">
                            <img src="../assets/images/product-5.jpg" alt="Fantastic Plastic Clock"
                                class="product__img" />
                            <button class="product__wishlist">
                                <svg width="20px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    stroke-width="5" stroke="currentColor" fill="none">
                                    <path
                                        d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                                </svg>
                            </button>
                            <button class="product__compare">
                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__quick-view">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__add-to-cart btn">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                        fill="currentColor" />
                                </svg>
                                Add To Cart
                            </button>
                        </div>
                        <div class="product__caption">
                            <span class="product__price">$305.49</span>
                            <h3 class="product__name">
                                Fantastic Plastic Clock
                            </h3>
                            <div class="product__rating">
                                <div class="product__star">
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-empty.svg" alt="" />
                                </div>
                                <span class="product__review">(5 reviews)</span>
                            </div>
                        </div>
                    </a>
                    <!-- Product 2 -->
                    <a href="#!" class="related__product product">
                        <div class="product__thumb">
                            <img src="../assets/images/product-11.jpg" alt="Fantastic Marble Shoes"
                                class="product__img" />
                            <button class="product__wishlist">
                                <svg width="20px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    stroke-width="5" stroke="currentColor" fill="none">
                                    <path
                                        d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                                </svg>
                            </button>
                            <button class="product__compare">
                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__quick-view">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__add-to-cart btn">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                        fill="currentColor" />
                                </svg>
                                Add To Cart
                            </button>
                        </div>
                        <div class="product__caption">
                            <span class="product__price">$66.17</span>
                            <h3 class="product__name">
                                Fantastic Marble Shoes
                            </h3>
                            <div class="product__rating">
                                <div class="product__star">
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-empty.svg" alt="" />
                                </div>
                                <span class="product__review">(5 reviews)</span>
                            </div>
                        </div>
                    </a>
                    <!-- Product 3 -->
                    <a href="#!" class="related__product product">
                        <div class="product__thumb">
                            <img src="../assets/images/product-7.jpg" alt="Rustic Marble Car" class="product__img" />
                            <button class="product__wishlist">
                                <svg width="20px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    stroke-width="5" stroke="currentColor" fill="none">
                                    <path
                                        d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                                </svg>
                            </button>
                            <button class="product__compare">
                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__quick-view">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__add-to-cart btn">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                        fill="currentColor" />
                                </svg>
                                Add To Cart
                            </button>
                        </div>
                        <div class="product__caption">
                            <span class="product__price">$899.41</span>
                            <h3 class="product__name">Rustic Marble Car</h3>
                            <div class="product__rating">
                                <div. class="product__star">
                                    <img src="./assets/icons/star-full.svg" alt="" />
                                    <img src="./assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-empty.svg" alt="" />
                                </div.>
                                <span. class="product__review">(5 reviews)</span.>
                            </div>
                        </div>
                    </a>
                    <!-- Product 4 -->
                    <a href="#!" class="related__product product">
                        <div class="product__thumb">
                            <img src="../assets/images/product-14.jpg" alt="Small Bronze Chair" class="product__img" />
                            <button class="product__wishlist">
                                <svg width="20px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    stroke-width="5" stroke="currentColor" fill="none">
                                    <path
                                        d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                                </svg>
                            </button>
                            <button class="product__compare">
                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__quick-view">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__add-to-cart btn">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                        fill="currentColor" />
                                </svg>
                                Add To Cart
                            </button>
                        </div>
                        <div class="product__caption">
                            <span class="product__price">$262.45</span>
                            <h3 class="product__name">
                                Small Bronze Chair
                            </h3>
                            <div class="product__rating">
                                <div class="product__star">
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-empty.svg" alt="" />
                                </div>
                                <span class="product__review">(5 reviews)</span>
                            </div>
                        </div>
                    </a>
                    <!-- Product 5 -->
                    <a href="#!" class="related__product product">
                        <div class="product__thumb">
                            <img src="../assets/images/product-16.jpg" alt="Lightweight Aluminum Clock"
                                class="product__img" />
                            <button class="product__wishlist">
                                <svg width="20px" height="20px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    stroke-width="5" stroke="currentColor" fill="none">
                                    <path
                                        d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z" />
                                </svg>
                            </button>
                            <button class="product__compare">
                                <svg fill="currentColor" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.08,7l1,1,3.44-3.45L11,1,10,2l1.8,1.8H2v1.4h9.82ZM5.86,9l-1-1L1.42,11.5,4.91,15l1-1L4.1,12.2H14V10.8H4.1Z" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__quick-view">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M15.8053 15.8013L21 21M10.5 7.5V13.5M7.5 10.5H13.5M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__add-to-cart btn">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 2C14 1.44772 13.5523 1 13 1C12.4477 1 12 1.44772 12 2V8.58579L9.70711 6.29289C9.31658 5.90237 8.68342 5.90237 8.29289 6.29289C7.90237 6.68342 7.90237 7.31658 8.29289 7.70711L12.2929 11.7071C12.6834 12.0976 13.3166 12.0976 13.7071 11.7071L17.7071 7.70711C18.0976 7.31658 18.0976 6.68342 17.7071 6.29289C17.3166 5.90237 16.6834 5.90237 16.2929 6.29289L14 8.58579V2ZM1 3C1 2.44772 1.44772 2 2 2H2.47241C3.82526 2 5.01074 2.90547 5.3667 4.21065L5.78295 5.73688L7.7638 13H18.236L20.2152 5.73709C20.3604 5.20423 20.9101 4.88998 21.4429 5.03518C21.9758 5.18038 22.29 5.73006 22.1448 6.26291L20.1657 13.5258C19.9285 14.3962 19.1381 15 18.236 15H8V16C8 16.5523 8.44772 17 9 17H16.5H18C18.5523 17 19 17.4477 19 18C19 18.212 18.934 18.4086 18.8215 18.5704C18.9366 18.8578 19 19.1715 19 19.5C19 20.8807 17.8807 22 16.5 22C15.1193 22 14 20.8807 14 19.5C14 19.3288 14.0172 19.1616 14.05 19H10.95C10.9828 19.1616 11 19.3288 11 19.5C11 20.8807 9.88071 22 8.5 22C7.11929 22 6 20.8807 6 19.5C6 18.863 6.23824 18.2816 6.63048 17.8402C6.23533 17.3321 6 16.6935 6 16V14.1339L3.85342 6.26312L3.43717 4.73688C3.31852 4.30182 2.92336 4 2.47241 4H2C1.44772 4 1 3.55228 1 3ZM16 19.5C16 19.2239 16.2239 19 16.5 19C16.7761 19 17 19.2239 17 19.5C17 19.7761 16.7761 20 16.5 20C16.2239 20 16 19.7761 16 19.5ZM8 19.5C8 19.2239 8.22386 19 8.5 19C8.77614 19 9 19.2239 9 19.5C9 19.7761 8.77614 20 8.5 20C8.22386 20 8 19.7761 8 19.5Z"
                                        fill="currentColor" />
                                </svg>
                                Add To Cart
                            </button>
                        </div>
                        <div class="product__caption">
                            <span class="product__price">$60.40 – $98.32</span>
                            <h3 class="product__name">
                                Lightweight Aluminum Clock
                            </h3>
                            <div class="product__rating">
                                <div class="pr.oduct__star">
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="../assets/icons/star-full.svg" alt="" />
                                    <img src="./assets/icons/star-empty.svg" alt="" />
                                </div>
                                <span class="product__review">(5 reviews)</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php 
        include("../templates/footer.php");
    ?>

    <!-- Js -->
    <script src="../assets/js/search.js"></script>
    <script src="../assets/js/login.js"></script>
    <script src="../assets/js/email.js"></script>
    <script src="../assets/js/scrollToTop.js"></script>
    <script src="../assets/js/range.js"></script>
    <script src="../assets/js/amount.js"></script>
    <script src="../assets/js/details-action.js"></script>
</body>

</html>