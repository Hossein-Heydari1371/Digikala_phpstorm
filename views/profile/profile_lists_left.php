<div class="profileLeft" id="lists">
    <div class="header">
                <span class="tab active">
کالاهای مورد علاقه
                </span>
        <span class="tab">
اطلاع رسانی ها
                </span>
    </div>
    <div class="body flex child">
        <?php
        foreach ($favorites as $item) {
            ?>
            <div class="item flex" data-favorite-id="<?= $item['favorite_id'] ?>">
                <a href="" class="image">
                    <img src="public/images/product/<?= $item['id'] ?>/product_350.jpg" alt="">
                </a>
                <a href="" class="title">
                    <?= $item['title'] ?>
                    <div class="oldPrice flex">
                        <del><?= number_format($item['price']) ?></del>
                        <span class="percent"><?= $item['discount'] ?>%</span>

                    </div>
                    <div class="newPrice">
                        <span><?= number_format($item['price'] - ($item['price'] * $item['discount']) / 100) ?></span>
                        تومان

                    </div>
                </a>
                <div class="removeProduct" onclick="removeAjaxFavorites(<?= $item['favorite_id'] ?>)">
                    <span></span>
                </div>


            </div>
            <?php
        }
        ?>

    </div>
    <div class="body flex child" style="display: none">
        <div class="item flex">
            <a href="" class="image">
                <img src="public/images/product/thumnail/p2.jpg" alt="">
            </a>
            <a href="" class="title">
                کاور لوکسار مدل S-220 مناسب برای گوشی موبایل شیائومی Redmi Note 8
                <div class="notification">
                    شگفت‌انگیز شدن
                </div>

            </a>
            <div class="removeProduct">
                <span></span>
            </div>


        </div>
        <div class="item flex">
            <a href="" class="image">
                <img src="public/images/product/thumnail/p2.jpg" alt="">
            </a>
            <a href="" class="title">
                کاور لوکسار مدل S-220 مناسب برای گوشی موبایل شیائومی Redmi Note 8
                <div class="notification">
                    شگفت‌انگیز شدن
                </div>
            </a>
            <div class="removeProduct">
                <span></span>
            </div>


        </div>
        <div class="item flex">
            <a href="" class="image">
                <img src="public/images/product/thumnail/p2.jpg" alt="">
            </a>
            <a href="" class="title">
                کاور لوکسار مدل S-220 مناسب برای گوشی موبایل شیائومی Redmi Note 8
                <div class="notification">
                    شگفت‌انگیز شدن
                </div>

            </a>
            <div class="removeProduct">
                <span></span>
            </div>


        </div>
    </div>
</div>

<script>
    function removeAjaxFavorites(favorite_id) {

        var url = 'profile/removeAjaxFavorites/' + favorite_id + ''
        var data = {}
        $.post(url, data, function (msg) {
            console.log(msg)
            $('#lists').find('[data-favorite-id=' + favorite_id + ']').fadeOut();

        })
    }
</script>