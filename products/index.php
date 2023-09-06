<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/products/products.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


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
                                <img class="products_swiper_img" src="/products/images/Rectangle%204829.png" alt="">
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

</div>

<script src="/products/scripts.js"></script>