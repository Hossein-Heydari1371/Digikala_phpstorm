<div class="swiper-container s1 swiper1">
    <div class="headline">
        <span>منتخب جدیدترین کالاها</span>
    </div>

    <div class="swiper-wrapper">
        <?php
        $last_products = $data[3];
        foreach ($last_products as $row) {
            ?>
            <div class="swiper-slide">
                <a class="card" href="product/index/<?= $row['id'] ?>">
                    <div class="image">
                        <img src="public/images/product/<?= $row['id'] ?>/product_350.jpg" alt="">
                    </div>
                    <div class="title">
                        <?= $row['title'] ?>
                    </div>
                    <div class="price">
                        <div class="oldPrice">
                            <del> <?= $row['price'] ?></del>
                            <span class="percent">    <?=$row['discount']?>٪</span>
                        </div>
                        <div class="newPrice">
                            <span>    <?=$row['price_total']?></span>
                            <span>تومان</span>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }

        ?>

    </div>
    <div class="swiper-button-next next"></div>
    <div class="swiper-button-prev prev"></div>
</div>