<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/t-shirt_printing/t-shirt_printing.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<?php
require(__DIR__ . '/../navigation/index.php')
?>

<?php
require(__DIR__ . '/../breadcrumb/index.php')
?>

<div class="container-width">

    <div class="order-product">
        <div class="order-product_swiper-wrapper">
            <div class="swiper order-product_swiper">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <div class="swiper-slide order-product_slider">
                            <img class="order-product_swiper_img" src="/t-shirt_printing/images/DSC09253-1%201.png"
                                 alt="">
                        </div>
                    <?php } ?>
                </div>
                <div class="order-product_swiper-button-prev order-product_swiper-buttons"></div>
                <div class="order-product_swiper-button-next order-product_swiper-buttons"></div>
            </div>
            <div class="swiper order-product_swiper-thumbnail">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <div class="swiper-slide order-product_thumbnail_slider">
                            <img class="order-product_swiper-thumbnail_img"
                                 src="/t-shirt_printing/images/DSC09253-1%201.png" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="order-product-description">
            <p class="order-product_header">Печать на футболках</p>
            <div class="order-product_params">
                <div class="product_params_title">
                    Выберите размер
                    <div class="product_params_select-wrapper">
                        <select class="product_params-inputs">
                            <option class="product_params-options" value="">А5</option>
                            <option class="product_params-options" value="">А4</option>
                            <option class="product_params-options" value="">А3</option>
                        </select>
                    </div>
                </div>
                <div class="product_params_title">
                    Цвет
                    <div class="product_params_select-wrapper">
                        <select class="product_params-inputs">
                            <option class="product_params-options" value="">1 цвета</option>
                            <option class="product_params-options" value="">2 цвета</option>
                            <option class="product_params-options" value="">3 цвета</option>
                            <option class="product_params-options" value="">более 3х цветов</option>
                        </select>
                    </div>
                </div>
                <div class="product_params_title">
                    Вид печати
                    <div class="product_params_select-wrapper">
                        <select class="product_params-inputs">
                            <option class="product_params-options" value="">термопечать</option>
                        </select>
                    </div>
                </div>
                <div class="product_params_title">
                    Детали
                    <div class="product_params_checkbox">
                        <div class="params_checkbox_item params_checkbox-active" data-params_checkbox_item-without>
                            <p class="params_checkbox_item-text">без нанесения лого</p>
                        </div>
                        <div class="params_checkbox_item" data-params_checkbox_item-with>
                            <p class="params_checkbox_item-text">с нанесением лого</p>
                        </div>
                    </div>
                </div>
                <div class="order-product_pips product_params_title">
                    Количество штук
                    <div class="product_pips_buttons-wrapper">
                        <button class="product_pips_buttons pips_button_decrement" data-pips_button_decrement></button>
                        <input class="product_pips-value product_params-inputs" type="text" value="100">
                        <button class="product_pips_buttons pips_button_increment" data-pips_button_increment></button>
                    </div>
                </div>
            </div>
            <div class="order-product_price">
                от 45 ₽
                <a class="order-product_button-order" href="">Заказать</a>
            </div>
            <div class="order-information">
                <p class="order-information_header">Информация с заголовком</p>
                <div class="order-information-text">
                    Футболки с принтами — самый востребованный продукт в мире одежды. Сфера применения этой услуги
                    широка и выходит за рамки просто одежды:
                    <ul>
                        <li>реклама,</li>
                        <li>печать на сувенирах,</li>
                        <li>корпоративная форма,</li>
                        <li>подарки,</li>
                        <li>печать на текстиле для швейных производств и многое другое.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
require(__DIR__ . '/../call_us/index.php')
?>

<?php
require(__DIR__ . '/../additional_information/index.php')
?>

<?php
require(__DIR__ . '/../questions/index.php')
?>

<?php
require(__DIR__ . '/../services/index.php')
?>



<?php
require(__DIR__ . '/../products/index.php');
?>

<?php
require(__DIR__ . '/../guarantee/index.php');
?>

<?php
require(__DIR__ . '/../help/index.php')
?>

<?php
require(__DIR__ . '/../map/index.php')
?>

<?php
require(__DIR__ . '/../footer/index.php')
?>


<script src="/t-shirt_printing/scripts.js"></script>