<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/letter_to_director/letter_to_director.css">
<link rel="stylesheet" href="/letter_to_director/letter_to_director_mobile.css">

<?php
//require(__DIR__ . '/../navigation/index.php');
//?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => 'letter_to_director', 'pageName' => 'Написать письмо директору']]);
?>

<div class="container-width">

    <div class="letter-to-director">
        <p class="letter-to-director_header">Написать письмо директору</p>
        <div class="letter-to-director_form">
            <div class="letter-to-director_input-wrapper">
                <input class="letter-to-director_input" type="text" placeholder="Ваше имя">
                <input class="letter-to-director_input" type="text" placeholder="Контактный телефон">
                <input class="letter-to-director_input" type="text" placeholder="Email">
            </div>
            <textarea class="letter-to-director_input letter-to-director-textarea" cols="30" rows="7"
                      placeholder="Ваш вопрос / комментарий"></textarea>
        </div>
        <a class="letter-to-director_button" href="">Отправить сообщение</a>
    </div>

</div>


<?php
require(__DIR__ . '/../map/index.php')
?>

<?php
require(__DIR__ . '/../footer/index.php')
?>
