<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/printing_services/printing_services.css">


<?php function printing_services($params){ ?>
    <div class="container-width">
        <div class="showcase">
            <p class="showcase_header"><?php echo $params['header'] ?></p>

            <div class="showcase_items">
                <?php for( $i = 0; $i < $params['grid']; $i++ ) { ?>
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
<?php } ?>
