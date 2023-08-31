<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/printing_clothing_and_textiles/printing_clothing_and_textiles.css">


<div class="container-width">

    <div class="showcase">

        <p class="showcase_header">Печать на одежде и текстиле</p>

        <div class="showcase_items">
            <?php for( $i = 0; $i < 13; $i++ ) { ?>
                         <div class="showcase_item">
                             <img class="showcase_item_img" src="/printing_clothing_and_textiles/images/DSC09253-1%201.png" alt="">
                             <p class="showcase_title">Свитшоты</p>
                             <div class="showcase_item_button-wrapper">
                                 <a class="showcase_item_button" href="">Заказать</a>
                                 <a class="showcase_item_button" href="">Подробнее</a>
                             </div>
                         </div>
            <?php } ?>
        </div>

    </div>

</div>

<?php
    require(__DIR__ . '/../questions/index.php');
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
