<section class="gallery">
    <?php
    if ($productInfo['special'] == 1) {
        ?>
        <div class="galleryHeader flex">
            <div>
                <img src="public/images/offerBanner.png" alt="">
            </div>
            <div class="timer" data-countdown="<?= $productInfo['time_special'] ?>"></div>

        </div>
        <?php
    }
    ?>
    <div class="galleryOptions">
        <ul>
            <li class="flex <?php if (isset($productInfo['favorite']['id'])) echo 'active' ?>">

                <i class="far fa-heart" onclick="addToFavorites(<?= $productInfo['id'] ?>)"></i>
                <div class="tooltip">
                    افزودن به علاقه‌مندی
                </div>
            </li>
            <li class="flex">

                <i class="fas fa-share-alt"></i>
                <div class="tooltip">
                    اشتراک گذاری
                </div>
            </li>
            <li class="flex">

                <i class="far fa-bell-on"></i>
                <div class="tooltip">
                    اطلاع رسانی شگفت انگیز
                </div>
            </li>
            <li class="flex">

                <i class="fal fa-chart-line"></i>
                <div class="tooltip">
                    نمودار قیمت
                </div>
            </li>
            <li class="flex">

                <i class="fal fa-window-restore"></i>
                <div class="tooltip">
                    مقایسه
                </div>
            </li>
        </ul>
    </div>
    <div class="image">
        <img id="zoomImage" src="public/images/product/<?= $productInfo['id'] ?>/product_600.jpg" alt=""
             data-zoom-image="public/images/product/<?= $productInfo['id'] ?>/product_1280.jpg">
    </div>

    <div class="imgGallery">
        <ul class="flex">
            <?php

            foreach ($images as $row) {
                ?>
                <li class="showGallery flex"><img
                            src="public/images/product/<?= $row['product_id'] ?>/gallery/small/<?= $row['img'] ?>"
                            alt=""
                            data-image-1280="public/images/product/<?= $row['product_id'] ?>/gallery/large/<?= $row['img'] ?>">
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>
<script src='public/js/jquery.zoom.min.js'></script>
<script>
    function addToFavorites(product_id) {

        var url = 'product/addToFavorites/' + product_id + ''
        var data = {}
        $.post(url, data, function (msg) {
            console.log(msg)
            $('.galleryOptions ul li ').addClass('active')
        })


    }
</script>