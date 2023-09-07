<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/popup/popup.css">


<?php function popup($params)
{ ?>


    <?php if ($params['popup-state'] === 't-shirt printing') { ?>
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
<?php } else if ($params['popup-state'] === 'request a call') { ?>
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
<?php } else if ($params['popup-state'] === 'city') { ?>
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
<?php } ?>
<?php } ?>


<script src="/popup/scripts.js"></script>

<?php popup(['popup-state' => 't-shirt printing']); ?>
<?php popup(['popup-state' => 'request a call']); ?>
<?php popup(['popup-state' => 'city']); ?>
