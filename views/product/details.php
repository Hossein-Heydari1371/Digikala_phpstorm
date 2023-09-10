<section class="details">
    <div class="box">
        <div class="seller">
            <div class="sellerName">
                فروشنده :
                <span>دیجی کالا</span>
            </div>
            <div class="sellerScore">
                عملکرد :
                <span>۵ از ۵</span>
            </div>
        </div>
        <div class="garanti" data-guarantee-id="<?= $productInfo['guaranteeTitle']['id'] ?>">
            <?= $productInfo['guaranteeTitle']['title'] ?>
        </div>
        <div class="info">
            موجود در انبار دیجی کالا
            <div>ارسال توسط دیجی کالا</div>
        </div>
        <div class="price">
            <?php
            if ($productInfo['special'] == 1) {
                ?>
                <div class="oldPrice">
                    <del><?= number_format($productInfo['price']) ?></del>
                    <span class="percent"><?= $productInfo['discount'] ?>٪</span>

                </div>
                <?php
            }
            ?>
            <div class="newPrice">
                <?= number_format($productInfo['price_total']) ?>
            </div>
            <?php
            if ($productInfo['number'] < 10) {
                ?>
                <div class="cartNotification">
                    <span><?= $productInfo['number'] ?></span>
                    عدد در انبار باقیست - پیش از اتمام بخرید

                </div>
                <?php
            }
            ?>
            <a href="javascript:void(0)" class="addToBasket" onclick="addToBasket(<?= $productInfo['id'] ?>)">
                افزودن به سبد خرید
            </a>
        </div>
    </div>
    <div class="bestPrice flex">
        آیا قیمت مناسب‌تری سراغ دارید؟
        <div class="yes">بلی</div>
        <div class="no">خیر</div>
    </div>
</section>

<script>
    //add To Basket

    $('.colors input:first-child').trigger('click');

    function addToBasket(id) {
        var guarantee_id = $('.garanti').attr('data-guarantee-id');
        var color_selected = $('.colors input[type="radio"]:checked').val();
        var url = 'product/addToBasket/' + id + '';
        var data = {'color_selected': color_selected, 'guarantee_id': guarantee_id};
        $.post(url, data, function (msg) {
            console.log(msg);
        })
    }
</script>