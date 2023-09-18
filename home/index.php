<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<?php
require(__DIR__ . '/../navigation/index.php');
?>

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
    <marquee scrollamount="10">
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

    <div class="products_showcase">
        <p class="products_showcase_header">Наша продукция <span>Листай</span></p>
        <div class="products_showcase_filter" data-products-showcase-ckeckbox>
            <div class="products_showcase_filter_item products_showcase_active">
                Пошив и производство футболок
            </div>
            <?php for ($j = 0; $j < 4; $j++) { ?>
                <div class="products_showcase_filter_item">
                    Сорочки на заказ
                </div>
                <div class="products_showcase_filter_item">
                    Пошив толстовок оптом
                </div>
            <?php } ?>
        </div>

        <div class="swiper products_showcase_swiper">
            <div class="swiper-wrapper">
                <?php
                require(__DIR__ . '/../products/index.php');
                for ($j = 0; $j < 8; $j++) { ?>
                    <div class="swiper-slide">
                        <?php
                        products(['grid' => 1]);
                        ?>
                    </div>
                <?php } ?>
            </div>
            <div class="products_showcase_swiper_button-prev products_showcase_swiper_button"></div>
            <div class="products_showcase_swiper_button-next products_showcase_swiper_button"></div>
        </div>

    </div>

</div>

<?php
require(__DIR__ . '/../services/index.php');
?>

<?php
require(__DIR__ . '/../print_technologies/component_print_technologies.php');
?>

<?php
require(__DIR__ . '/../guarantee/index.php');
?>

<?php
require(__DIR__ . '/../reviews/component-reviews.php');
?>

<?php
require(__DIR__ . '/../help/index.php');
?>

<?php
require(__DIR__ . '/../map/index.php');
?>

<?php
require(__DIR__ . '/../seo/index.php');
?>

<?php
require(__DIR__ . '/../footer/index.php');
?>


<link rel="stylesheet" href="/home/home.css">
<link rel="stylesheet" href="/home/home_mobile.css">
<script src="./scripts.js"></script>