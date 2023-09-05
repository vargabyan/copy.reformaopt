<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/error_404/error_404.css">

<?php
require(__DIR__ . '/../navigation/index.php')
?>

<?php
require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => '/error_404', 'pageName' => 'Ошибка']]);
?>

<div class="container-width">

    <div class="error-404">
        <div class="error-404_text-wrapper">
            <p class="error-404_header">Упс!</p>
            <p class="error-404_explanation">Кажется что‑то пошло нетак! Страница, которую вызапрашиваете несуществует
                илиустарела</p>
            <a class="error-404_button" href="/">Перейти на главную</a>
        </div>
        <img class="error-404_img" src="/error_404/images/Frame%202087325235.png" alt="">
    </div>

</div>

<?php
require(__DIR__ . '/../footer/index.php')
?>
