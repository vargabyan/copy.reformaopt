<link rel="stylesheet" href="/fonts.css">

<?php
require(__DIR__ . '/../navigation/index.php')
?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => '/Print_technologies', 'pageName' => 'Технологии печати']]);
?>

<?php
require(__DIR__ . '/component_print_technologies.php')
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

<link rel="stylesheet" href="/print_technologies/print_technologies.css">