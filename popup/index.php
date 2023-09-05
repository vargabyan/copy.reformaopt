<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/popup/popup.css">


<?php function popup($params) { ?>
    <div class="popup-wrapper">
        <div class="popup">
            <button class="popup_button-close" data-popup-button-close></button>

            <?php if($params['popup-state'] === 't-shirt printing') { ?>
                <p class="popup_header">Печать на футболках</p>
                <div class="popup_params-wrapper">
                    <p>Количество: 10 штук</p>
                    <p>Цвет: более 3х</p>
                </div>
                <divl class="popup_input-wrapper">
                    <input class="popup-input" type="text" placeholder="Ваше имя">
                    <input class="popup-input" type="text" placeholder="Контактный телефон">
                    <input class="popup-input" type="text" placeholder="Email">
                    <textarea class="popup-input popup-textarea" cols="30" rows="8" placeholder="Ваш вопрос/комментарий"></textarea>
                </divl>
                <div class="popup-button-wrapper">
                    <a class="popup-button popup-button-download" href="">Загрузить логотип</a>
                    <a class="popup-button popup-button-orange" href="">Отправить сообщение</a>
                </div>
            <?php } else if($params['popup-state'] === 'request a call') { ?>
                <p class="popup_header">Заказать звонок</p>
                <divl class="popup_input-wrapper">
                    <input class="popup-input" type="text" placeholder="Ваше имя">
                    <input class="popup-input" type="text" placeholder="Контактный телефон">
                </divl>
                <div class="popup-button-wrapper popup-button-right">
                    <a class="popup-button popup-button-orange" href="">Отправить</a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>


<script src="/popup/scripts.js"></script>

<?php popup(['popup-state' => 't-shirt printing']); ?>
<?php popup(['popup-state' => 'request a call']); ?>
