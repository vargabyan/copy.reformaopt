<link rel="stylesheet" href="/reviews/reviews.css">

<?php
require(__DIR__ . '/../navigation/index.php');
?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => 'letter_to_director', 'pageName' => 'Написать письмо директору']]);
?>

<?php
require(__DIR__ . '/../reviews/component-reviews.php');
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