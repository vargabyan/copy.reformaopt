<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/reviews/component-reviews.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<div class="container-width">

    <div class="reviews">

    <div class="reviews_header">
        Отзывы о нашей работе
    </div>

    <a class="reviews_button" href="">
        <div class="reviews_button_svg">
            сервис отзывов
        </div>
    </a>

    <div class="reviews_content">

        <div class="swiper reviews_swiper">
            <div class="swiper-wrapper">
                <?php for ($p = 0; $p < 4; $p++) { ?>
                    <div class="swiper-slide">
                        <div class="reviews_item">
                            <div class="reviews_item-top">
                                <img class="reviews_item-image" src="/home/images/Rectangle%204816.png" alt="">
                                <div class="reviews_item-biography">
                                    Valeria Sharipyanova
                                    <div class="reviews-stars-wrapper">
                                        <div class="reviews-stars reviews-star-active"></div>
                                        <div class="reviews-stars reviews-star-active"></div>
                                        <div class="reviews-stars reviews-star-active"></div>
                                        <div class="reviews-stars reviews-star-active"></div>
                                        <div class="reviews-stars reviews-star-semi-active"></div>
                                    </div>
                                    <span>2 отзыва на Flamp</span>
                                </div>
                            </div>
                            <div class="reviews_item-bottom">
                                Отличная компания! Обращаемся непервыйраз. Отшивали одежду скорпоративным принтом.
                                Споставленной задачей команда каждый разсправляется качественно, всрок. Обращаемся
                                непервыйраз ...
                                Отличная компания! Обращаемся непервыйраз. Отшивали одежду скорпоративным принтом.
                                Споставленной задачей команда каждый разсправляется качественно, всрок. Обращаемся
                                непервыйраз ...
                            </div>
                            <button data-reviews-button-reade-more>Читать полностью</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="reviews_content_footer">
            <div class="wrapper-reviews-buttons">
                <a class="button-leave-review reviews-button" href="">Оставить отзыв</a>
                <a class="button-reade-all-reviews reviews-button" href=""><span>Читать</span> все отзывы <span>(30)</span></a>
            </div>
            <div class="wrapper-slider-buttons">
                <div class="reviews_swiper-button-prev reviews_swiper-buttons"></div>
                <div class="reviews_swiper-button-next reviews_swiper-buttons"></div>
            </div>
        </div>
    </div>

</div>

</div>

<script src="/reviews/scripts.js"></script>