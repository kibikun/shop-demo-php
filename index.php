<?php
require_once "./classes/headerObject.php";
require_once "./classes/mainNavObject.php";
require_once "./classes/sideBarObject.php";
require_once "./classes/cardObject.php";
require_once "./classes/footerObject.php";

$main_nav = new MainNavObject("./pages/mainNavData.php");
$side_bar = new SideBarObject("./pages/sideBarData.php");
$card = new CardObject("./pages/cardData.php");
$footer = new FooterObject("./pages/footerData.php");

$header = new HeaderObject("./pages/headerData.php");
$header->render();
?>

<main>
    <?php
    $main_nav->render();
    ?>
    <div class="container">
        <div class="list">
            <?php $side_bar->render(); ?>
        </div>
        <div class="item__container">
            <?php $card->render(); ?>
        </div>
    </div>
</main>

<?php $footer->render(); ?>