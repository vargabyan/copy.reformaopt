
<?php
//    require(__DIR__ . '/../navigation/index.php');
//?>

<?php
    require(__DIR__ . '/../breadcrumb/index.php');
    breadcrumb([['url'=> '/printing_clothing_and_textiles', 'pageName' => 'Печать на одежде и текстиле']]);
?>

<?php

require(__DIR__ . '/../printing_services/index.php');
printing_services(['header' => 'Печать на одежде и текстиле', 'grid' => 13]);
?>

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


<link rel="stylesheet" href="/printing_clothing_and_textiles/printing_clothing_and_textiles.css">
