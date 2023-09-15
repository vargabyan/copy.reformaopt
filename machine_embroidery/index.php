<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/fonts.css">


<?php
//require(__DIR__ . '/../navigation/index.php');
//?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
\
    breadcrumb([['url' => '/print_technologies', 'pageName' => 'Технологии печати'], ['url' => '/machine_embroidery', 'pageName' => 'Машинная вышивка']]);
?>

<div class="container-width">

    <div class="machine-embroidery">
        <div class="machine-embroidery_top-block">
            <img class="machine-embroidery_img" src="/machine_embroidery/images/65f64180b77425afc95f6086daefae55.jpeg"
                 alt="">
            <div class="machine-embroidery_params-wrapper">
                <p class="machine-embroidery_header">Машинная вышивка на заказ</p>
                <p class="machine-embroidery_description">Оптовый заказ от 2 000 шт <br> И еще важная информация про
                    заказ</p>
                <p class="machine-embroidery_price">от 45 ₽</p>
                <a class="machine-embroidery_order-button" href="">Заказать</a>
            </div>
        </div>
        <div class="machine-embroidery_characteristic">
            <ul class="characteristic_menu-wrapper">
                <li class="characteristic_menu_item item-creation menu_item-active">Процесс создания</li>
                <li class="characteristic_menu_item item-usage">Использование</li>
                <li class="characteristic_menu_item item-advantages">Преимущества</li>
                <li class="characteristic_menu_item item-price">Цены</li>
            </ul>
            <div class="characteristic_hidden-item for-creation  hidden-item-active">
                Компьютерная вышивка начинаются ссоздания дизайна накомпьютере, который затем загружаются ввышивальную
                машину. Вышивальная машина использует нити разных цветов, чтобысоздать узор наткани вышивки, следуя
                инструкциям, заданным вдизайне позаказу. Каждый шовсоздаётся автоматически исвысокой точностью,
                чтопозволяет создавать сложные икрасочные дизайны логотипам вещей иразному виду текстиля.
            </div>
            <div class="characteristic_hidden-item for-usage">
                Компьютерная вышивка который затем загружаются ввышивальную машину. Вышивальная машина использует нити
                разных цветов, чтобысоздать узор наткани вышивки, следуя инструкциям, заданным вдизайне позаказу. Каждый
                шовсоздаётся автоматически исвысокой точностью, чтопозволяет создавать сложные икрасочные дизайны
                логотипам вещей иразному виду текстиля.
            </div>
            <div class="characteristic_hidden-item for-advantages">
                Компьютерная вышивка начинаются альная машина использует нити разных цветов, чтобысоздать узор наткани
                вышивки, следуя инструкциям, заданным вдизайне позаказу. Каждый шовсоздаётся автоматически исвысокой
                точностью, чтопозволяет создавать сложные икрасочные дизайны логотипам вещей иразному виду текстиля.
            </div>
            <div class="characteristic_hidden-item for-price">
                <div class="for-price_items-wrapper">
                    <div class="for-price_row border-none">
                        <div class="for-price_col for-price_col-header">
                            <p class="for-price_header">Размер</p>
                        </div>
                        <div class="for-price_col for-price_col-header">
                            <p class="for-price_header">Тираж</p>
                        </div>
                        <div class="for-price_col for-price_col-header border-none">
                            <p class="for-price_header">Цена печати в рублях за 1 шт.</p>
                        </div>
                    </div>
                    <div class="for-price_row">
                        <div class="for-price_col"></div>
                        <div class="for-price_col"></div>
                        <div class="for-price_col padding-none border-none">
                            <div class="for-price_row-mini">
                                <p>1 цвет</p>
                                <p>2 цвета</p>
                                <p>3 цвета</p>
                            </div>
                        </div>
                    </div>

                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="for-price_row response-data">
                            <div class="for-price_col">
                                <p class="for-price-header">А5</p>
                            </div>
                            <div class="for-price_col" data-characteristic-col>
                                <p data-characteristic-col-text>до 50 шт</p>
                                <p data-characteristic-col-text>от 50 до 99</p>
                                <p data-characteristic-col-text>от 100 до 500</p>
                                <p data-characteristic-col-text>от 501 до 1 000</p>
                                <p data-characteristic-col-text>более 1000</p>
                            </div>
                            <div class="for-price_row-mini">
                                <div class="for-price_col border-none" data-characteristic-col>
                                    <p data-characteristic-col-text>индивидуально</p>
                                    <p data-characteristic-col-text>30</p>
                                    <p data-characteristic-col-text>25</p>
                                    <p data-characteristic-col-text>15</p>
                                    <p data-characteristic-col-text>12</p>
                                </div>
                                <div class="for-price_col border-none" data-characteristic-col>
                                    <p data-characteristic-col-text>индивидуально</p>
                                    <p data-characteristic-col-text>40</p>
                                    <p data-characteristic-col-text>34</p>
                                    <p data-characteristic-col-text>23</p>
                                    <p data-characteristic-col-text>19</p>
                                </div>
                                <div class="for-price_col border-none" data-characteristic-col>
                                    <p data-characteristic-col-text>индивидуально</p>
                                    <p data-characteristic-col-text>50</p>
                                    <p data-characteristic-col-text>43</p>
                                    <p data-characteristic-col-text>31</p>
                                    <p data-characteristic-col-text>26</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <div class="for-price_items-wrapper-mobile">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="for-price_col-mobile">
                            <p class="for-price_header-mobile">Размер А5</p>
                        </div>
                        <div class="for-price_row-mobile border-none">
                            <div class="for-price_col-mobile for-price_col-header">
                                <p class="for-price_header">Тираж</p>
                            </div>
                            <div class="for-price_col-mobile for-price_col-header border-none">
                                <p class="for-price_header">Цена печати в рублях за 1 шт.</p>
                            </div>
                        </div>
                        <div class="for-price_row-mobile">
                            <div class="for-price_col-mobile"></div>
                            <div class="for-price_col-mobile padding-none border-none">
                                <div class="for-price_row-mini-mobile">
                                    <p>1 цвет</p>
                                    <p>2 цвета</p>
                                    <p>3 цвета</p>
                                </div>
                            </div>
                        </div>
                        <div class="for-price_row-mobile response-data">
                            <div class="for-price_col-mobile">
                                <p data-characteristic-col-text>до 50 шт</p>
                                <p data-characteristic-col-text>от 50 до 99</p>
                                <p data-characteristic-col-text>от 100 до 500</p>
                                <p data-characteristic-col-text>от 501 до 1 000</p>
                                <p data-characteristic-col-text>более 1000</p>
                            </div>

                            <div class="for-price_col-mobile">
                                <div class="for-price_col-mobile">
                                    <p data-characteristic-col-text>индивидуально</p>
                                </div>
                                <div class="for-price_row-mini-mobile">
                                    <div class="for-price_col-mobile border-none">
                                        <p data-characteristic-col-text>30</p>
                                        <p data-characteristic-col-text>25</p>
                                        <p data-characteristic-col-text>15</p>
                                        <p data-characteristic-col-text>12</p>
                                    </div>
                                    <div class="for-price_col-mobile border-none" data-characteristic-col>
                                        <p data-characteristic-col-text>40</p>
                                        <p data-characteristic-col-text>34</p>
                                        <p data-characteristic-col-text>23</p>
                                        <p data-characteristic-col-text>19</p>
                                    </div>
                                    <div class="for-price_col-mobile border-none" data-characteristic-col>
                                        <p data-characteristic-col-text>50</p>
                                        <p data-characteristic-col-text>43</p>
                                        <p data-characteristic-col-text>31</p>
                                        <p data-characteristic-col-text>26</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

    <?php
    require(__DIR__ . '/../questions/index.php');
    ?>


    <?php
    require(__DIR__ . '/../services/index.php');
    ?>

    <?php
    require(__DIR__ . '/../printing_services/index.php');
    printing_services(['header' => 'Услуги печати', 'grid' => 3]);
    ?>


    <?php
    require(__DIR__ . '/../products/index.php');
    products(['grid' => 4]);
    ?>

    <?php
    require(__DIR__ . '/../guarantee/index.php');
    ?>

    <?php
    require(__DIR__ . '/../help/index.php');
    ?>

    <?php
    require(__DIR__ . '/../map/index.php');
    ?>

    <?php
    require(__DIR__ . '/../footer/index.php');
    ?>


    <link rel="stylesheet" href="/machine_embroidery/machine_embroidery.css">
    <link rel="stylesheet" href="/machine_embroidery/machine_embroidery_mobile.css">
    <script src="/machine_embroidery/scripts.js"></script>