<link rel="stylesheet" href="/sewing_t-shirt/sewing_t-shirt.css">

<?php
require(__DIR__ . '/../navigation/index.php')
?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => '/printing_clothing_and_textiles', 'pageName' => 'Пошив одежды оптом Екатеринбург'],['url' => '/printing_clothing_and_textiles', 'pageName' => 'Пошив футболок оптом'],['url' => '/sewing_t-shirt', 'pageName' => 'Пошив классической футболки']]);
?>

<?php
require(__DIR__ . '/../order_products/index.php')
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

<?php
require(__DIR__ . '/../products/index.php');
?>

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