<?php
//require(__DIR__ . '/../navigation/index.php')
//?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => 'printing_clothing_and_textiles', 'pageName' => 'Печать на одежде и текстиле']]);
?>

<?php
require(__DIR__ . '/../order_products/index.php');
order_product(['pageName' => '/t-shirt_printing']);
?>

<?php
require(__DIR__ . '/../call_us/index.php')
?>

<?php
require(__DIR__ . '/../additional_information/index.php')
?>

<?php
require(__DIR__ . '/../questions/index.php')
?>

<?php
require(__DIR__ . '/../services/index.php')
?>

<?php
require(__DIR__ . '/../printing_services/index.php');
printing_services(['header' => 'Услуги печати', 'grid' => 3]);
?>

<div class="container-width">

    <div class="products-wrapper">
        <p class="products-wrapper_header">Наша продукция</p>
        <?php
        require(__DIR__ . '/../products/index.php');
        products(['grid' => 4]);
        ?>
    </div>

</div>

<?php
require(__DIR__ . '/../guarantee/index.php');
?>

<?php
require(__DIR__ . '/../help/index.php')
?>

<?php
require(__DIR__ . '/../map/index.php')
?>

<?php
require(__DIR__ . '/../footer/index.php')
?>

<link rel="stylesheet" href="/t-shirt_printing/t-shirt_printing.css">