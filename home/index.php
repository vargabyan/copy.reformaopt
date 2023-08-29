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
    <marquee>
        <div class="weekly-work_content">
            <div class="weekly-work_header">
                Пошили на этой неделе:
            </div>
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="weekly-work_item">
                    <img class="item-img" src="images/DSC01377 2.png" alt="">
                    <div class="item-header">
                        20 000 ветровок
                    </div>
                </div>
            <?php } ?>
        </div>
    </marquee>
</div>

<div class="container-width">

    <div class="products">
        <p class="products_header">Наша продукция</p>
        <div class="products_filter" data-products-ckeckbox>
            <div class="products_filter_item active">
                Пошив и производство футболок
            </div>
            <?php for ($j = 0; $j < 4; $j++) { ?>
                <div class="products_filter_item">
                    Сорочки на заказ
                </div>
                <div class="products_filter_item">
                    Пошив толстовок оптом
                </div>
            <?php } ?>
        </div>
        <div class="products_showcase">

            <div class="swiper products_swiper">
                <div class="swiper-wrapper">
                    <?php for ($j = 0; $j < 8; $j++) { ?>
                        <div class="swiper-slide">
                            <div class="products_showcase_item">
                                <img class="products_swiper_img" src="./images/Rectangle%204829.png" alt="">
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
                        </div>
                    <?php } ?>
                </div>
                <div class="products_swiper_button-prev products_swiper_button"></div>
                <div class="products_swiper_button-next products_swiper_button"></div>
            </div>

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
            <?php for ($K = 0; $K < 4; $K++) { ?>

                <div class="technologies_item">
                    <img class="technologies_item_img" src="./images/anthony-roberts--OI61ziuAh0-unsplash%204.png"
                         alt="">
                    <div class="technologies_item_footer">
                        <div class="descriptions">Машинная вышивка на заказ</div>
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
            <?php for ($l = 0; $l < 5; $l++) { ?>
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
                    <a class="button-leave-review" href="">Оставить отзыв</a>
                    <a class="button-reade-all-reviews" href="">Читать все отзывы (30)</a>
                </div>
                <div class="wrapper-slider-buttons">
                    <div class="reviews_swiper-button-prev reviews_swiper-buttons"></div>
                    <div class="reviews_swiper-button-next reviews_swiper-buttons"></div>
                </div>
            </div>
        </div>

    </div>

    <div class="help">
        <div class="help_contacts-block">
            <p class="help-header">
                Обращайтесь
                <br> по <span>любым </span>
                вопросам
            </p>
            <a class="contact-item contact-email" href="mailto:reformaopt@yandex.ru">reformaopt@yandex.ru</a>
            <a class="contact-item contact-phone" href="tel:+73433020700">+7 (343) 302-07-00</a>
            <div class="contact-item contact-location">Россия, г. Екатеринбург ул. Новинская д. 2</div>
        </div>
        <div class="help_form-block">
            <input class="form-item" type="text" placeholder="Евгения">
            <input class="form-item" type="text" placeholder="8 (905) 880-50-49">
            <input class="form-item" type="text" placeholder="Email">
            <textarea class="form-item form-textarea" rows="10" placeholder="Дополнительный комментарий"></textarea>
            <input class="form-submit" type="submit" value="Отправить сообщение">
        </div>
    </div>

    <div class="map">
        <p class="map_header">Как нас найти</p>
        <img class="map-card" src="/home/images/image%2050.png" alt="">
    </div>

    <div class="SEO">
        <p class="SEO_header">SEO текст</p>
        <div class="SEO_container">
            SEO—статья – это текст, оптимизированный под определенный список запросов, основной целью которого является
            занятие ведущих позиций по ним. Он должен быть написан с учётом требований, предъявляемых поисковыми
            системами и ориентированным на пользователей. Он должен быть написан с учётом требований, предъявляемых
            поисковыми системами
        </div>
        <button class="SEO_button">Читать подробнее</button>
    </div>

</div>

<div class="footer">
    <div class="container-width">

        <div class="footer_contacts">
            <div class="footer_item">
                <a class="footer_phone" href="tel:+73433020700">+7 (343) 302-07-00</a>
                <a class="footer_leave-reviews" href="">Оптовый заказ</a>
            </div>
            <div class="footer_item">
                <a class="footer_write-to-director" href="">Написать директору</a>
                <a class="footer_email" href="">reformaopt@yandex.ru</a>
            </div>
        </div>
        <div class="footer-content">
            <div class="wrapper-footer-navigation">
                <div class="footer_navigation">
                    <a class="footer_navigation_item" href="">Пошив одежды</a>
                    <a class="footer_navigation_item" href="">Печать</a>
                    <a class="footer_navigation_item" href="">Технологии</a>
                    <a class="footer_navigation_item" href="">Отзывы</a>
                    <a class="footer_navigation_item" href="">Контакты</a>
                </div>
                <div class="wrapper-footer-logo">
                    Печать и пошив <br> одежды оптом
                    <img class="footer_logo" src="/home/images/Group%202054.png" alt="">
                </div>
            </div>
            <div class="working-time">
                <div class="working-days">
                    <span>Время работы:</span>
                    понедельник - пятница с 09:00 до 18:00
                </div>
                <div class="working-days">
                    <span>Адрес:</span>
                    Россия, г. Екатеринбург, ул. Новинская д. 2
                </div>
            </div>
        </div>
        <div class="rules">
            <a class="rules_item" href="">Карта сайта</a>
            <a class="rules_item" href="">Пользовательское соглашение</a>
            <a class="rules_item" href="">Политика конфиденциальности</a>
        </div>

    </div>
</div>


<script src="./scripts.js"></script>