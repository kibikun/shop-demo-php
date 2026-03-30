<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="<?= $keyword; ?>">
    <meta name="description"
        content=" <?= $desc; ?>">
    <link rel="stylesheet" href="<?= $style; ?>">
    <link rel="stylesheet" href=" <?= $media; ?>">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body>
    <header>
        <h1 class="logo"><?= $logo['text']; ?><span><?= $logo['span']; ?></span></h1>
        <div class="header__icon">
            <button class="header__btn btn"><img src="<?= $cart_btn['src']; ?>" alt="cart"><?= $cart_btn['text']; ?></button>
        </div>
    </header>