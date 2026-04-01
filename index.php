<?php
require_once "./autoload.php";
$components = [
    'header' => component("Header", "pages/headerData.php"),
    'main_nav' => component("MainNav", "pages/mainNavData.php"),
    'side_bar' => component("SideBar", "pages/sideBarData.php"),
    'card' => component("Card", "pages/cardData.php"),
    'footer' => component("Footer", "pages/footerData.php")
];

$components['header']->render();
?>

<main>
    <?php
    $components['main_nav']->render();
    ?>
    <div class="container">
        <div class="list">
            <?php $components['side_bar']->render(); ?>
        </div>
        <div class="item__container">
            <?php $components['card']->render(); ?>
        </div>
    </div>
</main>

<?php $components['footer']->render(); ?>