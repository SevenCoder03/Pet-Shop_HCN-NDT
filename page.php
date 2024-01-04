    <?php
        include_once("./templates/header.php");
    ?>
    <!-- Main -->
    <main>
        <div class="display-area">
            <div class="slideshow">
                <div class="slideshow__main">
                    <button class="slideshow__control prev chevron">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6L9 12L15 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="show-area"><img src="./assets/images/product-1.jpg" alt="" class="slideshow__img"></div>
                    <button class="slideshow__control next chevron">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="slideshow__list">
                    <div class="slideshow__item active"><img src="./assets/images/product-1.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-2.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-3.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-4.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-5.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-6.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-7.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-8.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-9.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-10.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-11.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-12.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-13.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-14.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-15.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-16.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-17.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-18.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-19.jpg" alt=""></div>
                    <div class="slideshow__item"><img src="./assets/images/product-10.jpg" alt=""></div>
                </div>
                <div class="slideshow__text">
                    <div><span id="slideshow__index">1</span>/20</div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php
        include_once("./templates/footer.php");
    ?>