<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/contacts/contacts.css">
<link rel="stylesheet" href="/contacts/contacts_mobile.css">


<?php
//require( __DIR__ . '/../navigation/index.php')
//?>

<?php
require( __DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => '/contacts', 'pageName' => 'Контакты']]);
?>

<div class="container-width">

    <div class="contacts">
        <p class="contacts_header">Контакты</p>
        <div class="contacts_city-wrapper">
            <p class="contacts_city_item city-active">Екатеринбург</p>
            <p class="contacts_city_item">Москва</p>
            <p class="contacts_city_item">Пермь</p>
            <p class="contacts_city_item">Самара</p>
            <p class="contacts_city_item">Санкт-Петербург</p>
            <p class="contacts_city_item">Казань</p>
        </div>
        <div class="contacts_content">
            <a class="contacts_content_tel" href="tel:73433020700">+7 (343) 302-07-00</a>
            <div class="contacts_information-block">
                <div class="contacts_information-item map-icon"><span>Россия, г. </span>Екатеринбург ул. Новинская д. 2</div>
                <div class="contacts_information-item clock-icon">пн-пт 09:00 - 18:00</div>
                <div class="contacts_information-item clock-icon">reformaopt@yandex.ru</div>
            </div>
        </div>
    </div>

    <div class="delivery">
        <p class="delivery_header">Доставка по городу</p>
        <div class="delivery_wrapper-items">
            <div class="delivery_item">
                <div class="delivery_item_tex-wrapper">
                    <p class="delivery_item_header">Доставка курьерской службой заказчика</p>
                    Оплата по реквизитам и описание способа другого вида оплаты
                </div>
            </div>
            <div class="delivery_item">
                <div class="delivery_item_text-wrapper">
                    <p class="delivery_item_header">Самовывозом из офиса компании</p>
                    Оплата по реквизитам и описание способа другого вида оплаты
                </div>
            </div>
        </div>
    </div>

    <div class="requisites">
        <p class="requisites_header">Реквизиты</p>
        <div class="requisites_content">
            <div class="requisites_item-wrapper">
                <div class="requisites_item">
                    Полное наименование:
                    <p class="requisites_item_data">Общество с ограниченной ответственностью «REformaopt» (ООО «reforma»)</p>
                </div>
                <div class="requisites_item">
                    Юридический адрес:
                    <p class="requisites_item_data">624070, Свердловская обл., г. Екатеринбург, пер. Автоматики, 8, пом. 23</p>
                </div>
                <div class="requisites_item">
                    ИНН/КПП:
                    <p class="requisites_item_data">0005056000/007001000</p>
                </div>
                <div class="requisites_item">
                    ОГРН:
                    <p class="requisites_item_data">0000005011734</p>
                </div>
            </div>
            <div class="requisites_file-wrapper">
                <div class="requisites_file">
                    <p class="requisites_file_header">Скачать реквизиты</p>
                    PDF файл, 24 ГБ
                </div>
            </div>
        </div>
    </div>

</div>


<?php
require( __DIR__ . '/../map/index.php');
?>

<?php
require( __DIR__ . '/../help/index.php');
?>

<?php
require( __DIR__ . '/../footer/index.php');
?>