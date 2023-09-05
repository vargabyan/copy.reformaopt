<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/breadcrumb/breadcrumb.css">


<?php function breadcrumb($params) { ?>
<div class="container-width">

    <div class="breadcrumb_items">
        <a class="breadcrumb_item breadcrumb_arrow" href="/">
            Главная
        </a>
        <?php foreach ($params as $index => $value ) {
                if ($value['pageName'] !== end($params)['pageName']) {
            ?>
            <a class="breadcrumb_item breadcrumb_arrow" href="<?php echo $value['url'] ?>">
                <?php echo $value['pageName'] ?>
            </a>
        <?php }} ?>
        <div class="breadcrumb_item last-element">
            <?php echo end($params)['pageName'] ?>
        </div>
    </div>

</div>

<?php } ?>