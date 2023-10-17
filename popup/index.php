<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/popup/popup.css">
<link rel="stylesheet" href="/popup/popup_mobile.css">


<?php function popup_printing()
{ ?>
    <div class="popup-wrapper">
        <div class="popup">
            <button class="popup_button-close" data-popup-button-close></button>
            <p class="popup_header">Печать на футболках</p>
            <div class="popup_params-wrapper">
                <p>Количество: 10 штук</p>
                <p>Цвет: более 3х</p>
            </div>
            <div class="popup_input-wrapper">
                <input class="popup-input" type="text" placeholder="Ваше имя">
                <input class="popup-input" type="text" placeholder="Контактный телефон">
                <input class="popup-input" type="text" placeholder="Email">
                <textarea class="popup-input popup-textarea" cols="30" rows="8"
                          placeholder="Ваш вопрос/комментарий"></textarea>
            </div>
            <div class="popup-button-wrapper">
                <a class="popup-button popup-button-download" href="">Загрузить логотип</a>
                <a class="popup-button popup-button-orange" href="">Отправить сообщение</a>
            </div>
        </div>
    </div>
<?php }

function popup_call()
{ ?>
    <div class="popup-wrapper">
        <div class="popup">
            <button class="popup_button-close" data-popup-button-close></button>
            <p class="popup_header">Заказать звонок</p>
            <div class="popup_input-wrapper">
                <input class="popup-input" type="text" placeholder="Ваше имя">
                <input class="popup-input" type="text" placeholder="Контактный телефон">
            </div>
            <div class="popup-button-wrapper popup-button-right">
                <a class="popup-button popup-button-orange" href="">Отправить</a>
            </div>
        </div>
    </div>
<?php }

function popup_city()
{ ?>
    <div class="popup-wrapper">
        <div class="popup popup-city">
            <button class="popup_button-close" data-popup-button-close></button>
            <p class="popup_header">Выберите город</p>
            <div class="popup_input-wrapper">
                <input class="popup-input popup-city-item" type="text" placeholder="Город">
                <div class="selection_item-wrapper">
                    <div class="selection_item">
                        <p class="selection_item-header">Москва</p>
                        Московская область
                    </div>
                    <div class="selection_item">
                        <p class="selection_item-header">Санкт-Петербург</p>
                        Ленинградская область
                    </div>
                    <div class="selection_item selection_item-active">
                        <p class="selection_item-header">Екатеринбург</p>
                        Свердловская область
                    </div>
                    <div class="selection_item">
                        <p class="selection_item-header">Нижний Новгород</p>
                        Нижегородская область
                    </div>
                    <div class="selection_item">
                        <p class="selection_item-header">Нижний Новгород</p>
                        Нижегородская область
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }

function popup_city_mini()
{ ?>
    <div class="popup-city-mini">
        <div class="popup-city-mini-row">
            <p class="popup-city-mini_header">Ваш город Екатеринбург ?</p>
            <button class="popup-city-mini_button-close" data-popup-city-mini-button-close></button>
        </div>
        <div class="popup-city-mini-row">
            <a class="popup-city-mini-button popup-button-other" href="">Другой</a>
            <a class="popup-city-mini-button popup-button-correct" href="">Верно</a>
        </div>
    </div>
<?php }

function popup_success()
{ ?>
    <div class="popup-wrapper">
        <div class="popup popup-success">
            <button class="popup_button-close" data-popup-button-close></button>
            <div class="popup-success_item-wrapper">
                    <div class="popup-success_icon"></div>
                    <div class="popup-success_text-wrapper">
                        <p class="popup-success_header">Заявка получена</p>
                        <p class="popup-success_text">Наш менеджер вам перезвонит</p>
                    </div>
            </div>
        </div>
    </div>
<?php } ?>


<script src="/popup/scripts.js"></script>

<?php popup_printing(); ?>
<?php popup_call(); ?>
<?php popup_city(); ?>
<?php popup_city_mini(); ?>
<?php popup_success(); ?>

