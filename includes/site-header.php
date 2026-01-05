<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Author -->
    <meta name="author" content="">
    <!-- SEO Tags -->
    <meta name="robots" content="index">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- OG Tags -->
    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <!-- Content Security Policy: This directive upgrade insecure requests to Secure one -->
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Webpage Title -->
    <title>Aeeco Trading Private Limited, Your trusted partner in Engineering Solutions</title>
    <!-- Main CSS -->
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <!-- <p>Web Log Test: 2nd Update</p> -->
    <?php // if($page==='home') echo '<div class="site-preloader1"></div>' ?>
    <!-- Site Header: Start -->
    <div class="site-header" style="border: 2px solid green">
        <div class="site-header__container container">
            <div class="site-header__wrapper">
                <!-- Site Logo: Start  -->
                <a class="site-header__logo" href="index.php">
                    <img src="assets/images/site-header-logo.svg" alt="amscen-logo" class="site-header__logo-img"
                        width="110" height="27"></a>
                <!-- Site Logo: End  -->
                <!-- Phone Number and Email: Start  -->
                <div class="site-header__contact">
                    <a href="tel:0484-2977130" class="site-header__contact-link"><img
                            src="assets/images/telephone-icon.svg" alt="telephone-icon"
                            class="site-header__contact-icon"><span
                            class="site-header__contact-data">0484-2977130</span></a>
                    <a href="mailto:info@aeeco.in" class="site-header__contact-link"><img
                            src="assets/images/email-icon.svg" alt="telephone-icon"
                            class="site-header__contact-icon"><span
                            class="site-header__contact-data">info@aeeco.in</span></a>
                </div>
                <!-- Phone Number and Email: End  -->
                <!-- Site Main Navigation: Start -->
                <div class="main-nav main-nav--one">
                    <div class="main-nav__trigger-wrapper">
                        <div class="main-nav__trigger">
                            <div class="main-nav__trigger-item"></div>
                        </div>
                    </div>

                    <div class="main-nav__content">
                        <ul class="main-nav__ul">
                            <li class="main-nav__item <?php if($page==='home') echo 'main-nav__item--active'?>">
                                <a href="index.php" class="main-nav__link">Home</a>
                            </li>
                            <li class="main-nav__item <?php if($page==='who-we-are') echo 'main-nav__item--active'?>">
                                <a href="who-we-are.php" class="main-nav__link submenu-trigger">Who we are</a>
                            </li>
                            <li class="main-nav__item <?php if($page==='what-we-do') echo 'main-nav__item--active'?>">
                                <a href="what-we-do.php" class="main-nav__link">What we do</a>
                            </li>
                            <li class="main-nav__item <?php if($page==='products') echo 'main-nav__item--active'?>">
                                <a href="products.php" class="main-nav__link submenu-trigger">Products</a>
                            </li>

                            <li class="main-nav__item <?php if($page==='brands') echo 'main-nav__item--active'?>">
                                <a href="brands.php" class="main-nav__link submenu-trigger">Brands</a>
                            </li>
                            <li class="main-nav__item <?php if($page==='contactus') echo 'main-nav__item--active'?>">
                                <a href="contact-us.php" class="main-nav__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Site Main Navigation: End -->
            </div>
        </div>
    </div>
    <!-- Site Header: End -->