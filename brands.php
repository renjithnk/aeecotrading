<?php $page='brands'; ?>
<?php include('includes/site-header.php') ?>

<main class="site-content">

    <div class="subpage-banner-style2">
        <picture class="subpage-banner-style2__bg-image-wrapper">
            <source media="(min-width: 992px)" width="1200" height="200" srcset="assets/images/brands-banner-lg.webp">
            <source media="(min-width: 768px)" width="768" height="200" srcset="assets/images/brands-banner-md.webp">
            <img src="assets/images/brands-banner-xs.webp" alt="products-banner" width="320" height="200"
                class="img subpage-banner-style2__bg-image">
        </picture>
        <div class="subpage-banner-style2__content">
            <h2 class="subpage-banner-style2__content-heading">Brands</h2>
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
            <li class="breadcrumbs__li">Brands</li>
        </ul>
    </div>

    <div class="brands content-section">
        <div class="brands__container container">
            <!-- <h2 class="brands__heading">Brands</h2> -->
            <div class="brands__items-wrapper">
                <a href='pumps-wilo.php' class="brands__items">
                    <img src="assets/images/brands-wilo-logo-thumb.svg" alt="brands-wilo-logo-thumb"
                        class="brands__items-image" width="79" height="34">
                </a>
                <a href="motors-havells.php" class="brands__items"><img
                        src="assets/images/brands-havells-logo-thumb.svg" alt="brands-havells-logo-thumb"
                        class="brands__items-image" width="130" height="35"></a>
                <a href="blowers-everest.php" class="brands__items"><img
                        src="assets/images/brands-everest-logo-thumb.svg" alt="brands-everest-logo-thumb"
                        class="brands__items-image" width="122" height="27"></a>
                <a href="pipes-and-fittings-prince.php" class="brands__items"><img
                        src="assets/images/brands-prince-logo-thumb.svg" alt="brands-prince-logo-thumb"
                        class="brands__items-image" width="134" height="27"></a>
                <!-- <a href="blowers-airvac.php" class="brands__items"><img src="assets/images/brands-airvac-logo-thumb.svg" alt="brands-airvac-logo-thumb" class="brands__items-image" width="95" height="40"></a> -->
                <a href="manhole-covers-aagam.php" class="brands__items"><img
                        src="assets/images/brands-aagam-logo-thumb.svg" alt="brands-aagam-logo-thumb"
                        class="brands__items-image" width="112" height="44"></a>

            </div>
        </div>
    </div>


</main>

<?php include('includes/site-footer.php') ?>


<!-- Main JS-->
<script type="module" src="assets/js/scripts.js"></script>
</body>

</html>