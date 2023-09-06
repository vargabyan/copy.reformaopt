<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/machine_embroidery/machine_embroidery.css">


<?php
require(__DIR__ . '/../navigation/index.php');
?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');\
breadcrumb([['url' => '/print_technologies', 'pageName' => 'Технологии печати'], ['url' => '/machine_embroidery', 'pageName' => 'Машинная вышивка']]);
?>

<div class="container-width">

    <div class="machine-embroidery">
        <div class="machine-embroidery_top-block">
            <img class="machine-embroidery_img" src="/machine_embroidery/images/65f64180b77425afc95f6086daefae55.jpeg" alt="">
            <div class="machine-embroidery_params-wrapper">
                <p class="machine-embroidery_header">Машинная вышивка на заказ</p>
                <p class="machine-embroidery_description">Оптовый заказ от 2 000 шт <br> И еще важная информация про заказ</p>
                <p class="machine-embroidery_price">от 45 ₽</p>
                <a class="machine-embroidery_order-button" href="">Заказать</a>
            </div>
        </div>
        <div class="machine-embroidery_characteristic">
            <ul class="characteristic_menu-wrapper">
                <li class="characteristic_menu_item item-creation">Процесс создания</li>
                <li class="characteristic_menu_item item-usage">Использование</li>
                <li class="characteristic_menu_item item-advantages">Преимущества</li>
                <li class="characteristic_menu_item item-price menu_item-active">Цены</li>
            </ul>
            <div class="characteristic_hidden-item for-creation">
                Компьютерная вышивка начинаются ссоздания дизайна накомпьютере, который затем загружаются ввышивальную машину. Вышивальная машина использует нити разных цветов, чтобысоздать узор наткани вышивки, следуя инструкциям, заданным вдизайне позаказу. Каждый шовсоздаётся автоматически исвысокой точностью, чтопозволяет создавать сложные икрасочные дизайны логотипам вещей иразному виду текстиля.
            </div>
            <div class="characteristic_hidden-item for-usage">
                Компьютерная вышивка  который затем загружаются ввышивальную машину. Вышивальная машина использует нити разных цветов, чтобысоздать узор наткани вышивки, следуя инструкциям, заданным вдизайне позаказу. Каждый шовсоздаётся автоматически исвысокой точностью, чтопозволяет создавать сложные икрасочные дизайны логотипам вещей иразному виду текстиля.
            </div>
            <div class="characteristic_hidden-item for-advantages">
                Компьютерная вышивка начинаются альная машина использует нити разных цветов, чтобысоздать узор наткани вышивки, следуя инструкциям, заданным вдизайне позаказу. Каждый шовсоздаётся автоматически исвысокой точностью, чтопозволяет создавать сложные икрасочные дизайны логотипам вещей иразному виду текстиля.
            </div>
            <div class="characteristic_hidden-item for-price hidden-item-active">
                <div class="for-price_items-wrapper">
                    <div class="for-price_row">
                        <p>Размер</p>
                        <p>Тираж</p>
                        <p>Цена печати в рублях за 1 шт.</p>
                    </div>
                    <div  class="for-price_row">
                        <div class="for-price_item"></div>
                        <div class="for-price_item"></div>
                        <div class="for-price_item">
                            <p>1 цвет</p>
                            <p>2 цвета</p>
                            <p>3 цвета</p>
                        </div>
                    </div>

                    <?php for ($i = 0; $i < 1; $i++) { ?>
                        <div class="for-price_row">
                            <p>А5</p>
                            <div>
                                <p>до 50 шт</p>
                                <p>от 50 до 99</p>
                                <p>от 100 до 500</p>
                                <p>от 501 до 1 000</p>
                                <p>более 1000</p>
                            </div>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>1</tr>
                                                <tr>2</tr>
                                                <tr>3</tr>
                                            </table>
                                        </td>
                                        <th>
                                            индивидуально
                                            30
                                            25
                                            15
                                            12
                                        </th>
                                        <th>
                                            индивидуально
                                            40
                                            34
                                            23
                                            19
                                        </th>
                                        <th>
                                            индивидуально
                                            50
                                            43
                                            31
                                            26
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </div>
                    <?php } ?>

                </div>
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
