<?php $page='products'; ?>
<?php include('includes/site-header.php') ?>

<main class="site-content">

    <div class="subpage-banner-style2">
    <picture class="subpage-banner-style2__bg-image-wrapper">
        <source media="(min-width: 992px)" width="1200" height="200"
                srcset="assets/images/products-banner-lg.webp">
        <source media="(min-width: 768px)" width="768" height="200"
                srcset="assets/images/products-banner-md.webp">
        <img src="assets/images/products-banner-xs.webp" alt="products-banner" width="320" height="200"
                            class="img subpage-banner-style2__bg-image">
                    </picture>
        <div class="subpage-banner-style2__content">
        <h2 class="subpage-banner-style2__content-heading">Products</h2>
        </div>
        
        <div class="subpage-banner-style2__bg">
            <div class="subpage-banner-style2__bg-strip1"></div>
            <div class="subpage-banner-style2__bg-strip2"></div>
            <div class="subpage-banner-style2__bg-strip3">
            </div>
        </div>
    </div>    


    <div class="breadcrumbs container">
        <ul class="breadcrumbs__ul">
        <li class="breadcrumbs__li">
            <a href="index.php" class="breadcrumbs__a">Home</a>
        </li>
        <li class="breadcrumbs__li">Products</li>
        </ul>
    </div>


<div class="product-categories content-section content-section-p-t-h">
    <div class="product-categories__container container">
        <!-- <h2 class="product-categories__heading">Product categories</h2> -->
        <div class="product-categories__wrapper">
        <a href="pumps.php" class="product-categories__items">
        <img src="assets/images/product-categories-pumps.webp" alt="product-categories-pumps" class="product-categories__image" width="170" height="170">
                <div class="product-categories__name">Pumps</div>
            </a>
            <a href="motors.php" class="product-categories__items">
            <img src="assets/images/product-categories-motors.webp" alt="product-categories-motors" class="product-categories__image" width="170" height="170">
                <div class="product-categories__name">Motors</div>
            </a>
            <a href="pipes-and-fittings.php" class="product-categories__items">
            <img src="assets/images/product-categories-pipes.webp" alt="product-categories-pipes" class="product-categories__image" width="170" height="170">
                <div class="product-categories__name">Pipes & Fittings</div>
            </a>
            <a href="ultra-filtration.php" class="product-categories__items">
            <img src="assets/images/ultra-filtration-xs.webp" alt="product-categories-ultra-filtration" class="product-categories__image" width="170" height="170" >
                <div class="product-categories__name">Ultra Filtration</div>
            </a>
            <a href="manhole-covers.php" class="product-categories__items">
            <img src="assets/images/product-categories-manhole-covers.webp" alt="product-categories-manhole-covers" class="product-categories__image" width="170" height="170">
                <div class="product-categories__name">Manhole Covers</div>
            </a>
            <a href="blowers.php" class="product-categories__items">
            <img src="assets/images/product-categories-blowers.webp" alt="product-categories-blowers" class="product-categories__image" width="170" height="170">
                <div class="product-categories__name">Blowers</div>
            </a>
            <a href="oil-and-grease-trap.php" class="product-categories__items">
                <img src="assets/images/oil-and-grease-trap-xs.webp" alt="product-categories-blowers" class="product-categories__image" width="170" height="170">
                <div class="product-categories__name">Oil and Grease Trap</div>
            </a>
        </div>
    </div>
</div>

</main>

<?php include('includes/site-footer.php') ?>


<!-- Main JS-->
<script type="module" src="assets/js/scripts.js"></script>
</body>

</html>