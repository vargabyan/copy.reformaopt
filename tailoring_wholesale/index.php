<link rel="stylesheet" href="/fonts.css">
<link rel="stylesheet" href="/tailoring_wholesale/tailoring_wholesale.css">

<?php

require(__DIR__ . '/../navigation/index.php');

?>


<?php

require(__DIR__ . '/../breadcrumb/index.php');
breadcrumb([['url' => 'tailoring_wholesale', 'pageName' => 'Пошив одежды оптом в Екатеринбурге']]);

?>

<div class="container-width">

    <div class="tailoring-wholesale">
        <p class="tailoring-wholesale_header">Пошив одежды оптом в Екатеринбурге</p>

        <div class="tailoring-wholesale_content">
            <div class="tailoring-wholesale-filter">
                <ul class="tailoring-wholesale_filter_wrapper">
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив футболок</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив ветровок</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Аксессуары</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив брюк</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Водолазки</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив жилетов слоготипом</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив футболок поло</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив сорочек</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                    <li class="tailoring-wholesale_filter_item">
                        <a class="tailoring-wholesale_filter_item-toggle" href="">Пошив одежды</a>
                        <div class="tailoring-wholesale_filter_item_dropdown">
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Мужские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Женские футболки</a>
                            <a class="tailoring-wholesale_filter_item_dropdown-item" href="">Детские футболки</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tailoring-wholesale-showcase">
                <?php
                require(__DIR__ . '/../products/index.php');
                products(['grid' => 15]);
                ?>

                <?php $link = 1; ?>
                <div class="pagination">
                    <ul class="pagination_item-wrapper">
                        <li class="pagination_item"><a class="pagination_link pagination_prev" href="page=<?php echo $link - 1 ?>"></a></li>
                        <li class="pagination_item pagination_item-active"><a class="pagination_link" href="page=<?php echo $link ?>"><?php echo $link ?></a></li>
                        <li class="pagination_item"><a class="pagination_link" href="page=<?php echo $link ?>"><?php echo $link ?></a></li>
                        ...
                        <li class="pagination_item"><a class="pagination_link" href="page=<?php echo $link ?>"><?php echo $link ?></a></li>
                        <li class="pagination_item"><a class="pagination_link" href="page=<?php echo $link ?>"><?php echo $link ?></a></li>
                        <li class="pagination_item"><a class="pagination_link pagination_next" href="page=<?php echo $link + 1 ?>"></a></li>
                    </ul>
                </div>

                <?php
                require(__DIR__ . '/../seo/index.php')
                ?>
            </div>
        </div>
    </div>

</div>

<?php
require(__DIR__ . '/../questions/index.php')
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