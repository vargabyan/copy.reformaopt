<?php function products($params)
{ ?>

    <link rel="stylesheet" href="/fonts.css">
    <link rel="stylesheet" href="/products/products.css">

    <div class="products">
        <?php for ($j = 0; $j < $params['grid']; $j++) { ?>

            <div class="products_item">
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

        <?php } ?>
    </div>

<?php }