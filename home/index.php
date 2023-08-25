<link rel="stylesheet" href="../fonts.css">
<link rel="stylesheet" href="./home.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<div class="container-width">

    <div class="about-company">
        <div class="about-company_top">
            <p class="big-text">Производственная компания</p>
            <p class="small-text">по печати и пошиву одежды</p>
        </div>
        <div class="about-company_bottom">
            <div class="about-company_bottom_image-box">
                <div class="wholesale-order">
                    <div class="background-orange">
                        Оптовый <br> заказ
                    </div>
                </div>
                <img class="wholesale-Order-img" src="./images/DSC02748-fin%202.png" alt="">
            </div>
            <div class="about-company_bottom_video-box">
                <img class="video" src="images/image 32.png" alt="">
            </div>
        </div>
    </div>

    <div class="we-work">
        Работаем с <span>2009</span> года
    </div>

    <div class="production">
        <div class="swiper production_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="production-item-img" src="./images/woman-working-with-sewing-machine%201.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="production-item-img" src="./images/woman-working-with-sewing-machine%201.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="production-item-img" src="./images/woman-working-with-sewing-machine%201.png" alt="">
                </div>
            </div>
            <div class="production_swiper_button-prev production_swiper_button"></div>
            <div class="production_swiper_button-next production_swiper_button"></div>
        </div>
    </div>

</div>

    <div class="weekly-work">
        <div class="weekly-work_content">
            <div class="weekly-work_header">
                Пошили на этой неделе:
            </div>
            <?php for($i = 0; $i < 4; $i++)  {?>
                <div class="weekly-work_item">
                    <img class="item-img" src="images/DSC01377 2.png" alt="">
                    <div class="item-header">
                        20 000 ветровок
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<div class="container-width">

    <div class="products">
        <p class="products_header">Наша продукция</p>
        <div class="products_filter" data-products-ckeckbox>
                <div class="products_filter_item active">
                    Пошив и производство футболок
                </div>
            <?php for($j = 0; $j < 4; $j++) { ?>
                <div class="products_filter_item">
                    Сорочки на заказ
                </div>
                <div class="products_filter_item">
                    Пошив толстовок оптом
                </div>
            <?php } ?>
        </div>
        <div class="products_showcase">
            <?php for($j = 0; $j < 4; $j++) { ?>
                <div class="products_showcase_item">
                    <div class="swiper products_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="products_swiper_img" src="./images/Rectangle%204829.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="products_swiper_img" src="./images/Rectangle%204829.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="products_swiper_img" src="./images/Rectangle%204829.png" alt="">
                            </div>
                        </div>
                        <div class="products_swiper_button-prev products_swiper_button"></div>
                        <div class="products_swiper_button-next products_swiper_button"></div>
                    </div>
                    <div class="descriptions">
                        Рубашка поло женская с длинным
                    </div>
                    <div class="price">
                        от 80 ₽
                    </div>
                    <a class="button-detail" href="">
                        Подробнее
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="services">
        <div class="services_header">
            Фабрика РеФорма — это строгий
            <span>контроль качества,</span>
            <br> а также
        </div>
        <div class="services_item-container">
            <div class="services_item">
                Работа
                <br> отечественными
                <br> производителями
                <div class="services_item_wrapper-svg">
                    <div class="services_item_svg item-svg-1"></div>
                </div>
            </div>
            <div class="services_item">
                Широкий
                <br> ассортимент
                <br> продукции
                <div class="services_item_wrapper-svg">
                    <div class="services_item_svg item-svg-2"></div>
                </div>
            </div>
            <div class="services_item">
                Склад готовой
                <br> продукции
                <div class="services_item_wrapper-svg">
                    <div class="services_item_svg item-svg-3 "></div>
                </div>
            </div>
        </div>
    </div>

    <div class="technologies">

        <div class="technologies_header">
            Технологии печати
        </div>

        <div class="technologies_items-container">
            <?php for($K = 0; $K < 4; $K++) { ?>

                <div class="technologies_item">
                    <img class="technologies_item_img" src="./images/anthony-roberts--OI61ziuAh0-unsplash%204.png" alt="">
                    <div class="technologies_item_footer">
                        <div class="descriptions" >Машинная вышивка на заказ</div>
                        <a class="detail" href="">Подробнее</a>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>

    <div class="guarantee">
        <div class="guarantee_item">
            <img src="./images/image%2019.png" class="guarantee_img" alt="">
        </div>
        <div class="guarantee_header">
            Нам доверяют лучшие
        </div>

        <div class="guarantee_footer_item-wrapper">
            <?php for($l = 0; $l < 5; $l++) { ?>
                <div class="guarantee_item">
                    <img src="./images/image%2036.png" class="guarantee_img" alt="">
                </div>
                <div class="guarantee_item">
                    <img src="./images/image%2038.png" class="guarantee_img" alt="">
                </div>
            <?php } ?>
        </div>
    </div>

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
                    <div class="swiper-slide">Slide 1</div>
                </div>
            </div>

            <div class="reviews_content_footer">
                <div class="reviews_footer_buttons-wrapper">
                    <a href="">Оставить отзыв</a>
                    <a href="">Читать все отзывы (30)</a>
                </div>
                <div class="slider-buttons-wrapper">
                    <div class="reviews_swiper-button-prev"></div>
                    <div class="reviews_swiper-button-next"></div>
                </div>
            </div>
        </div>

    </div>

</div>


<script src="./scripts.js"></script>