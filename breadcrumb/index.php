<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/breadcrumb/breadcrumb.css">


<?php
$urlsAndNames = [['name' => 'Главная', 'url' => '/']];
function breadcrumb(array $params) {

//    echo 'test';
//    foreach ($params as $value) {
//        array_push($this->urlsAndNames, [$value[] => ]);
//    }
//    print_r($this->urlsAndNames );

}

?>

<div class="container-width">

    <div class="breadcrumb_items">
        <?php foreach ($urlsAndNames as $value) { ?>
            <a class="breadcrumb_item breadcrumb_arrow" href="<?php $value['url'] ?>">
                <?php echo $value['name'] ?>
            </a>
        <?php } ?>
        <div class="breadcrumb_item last-element">
            <?php echo end($urlsAndNames)['name'] ?>
        </div>
    </div>

</div>