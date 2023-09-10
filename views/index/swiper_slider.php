<article class="container">
    <div class="flex">
        <section class="slider">
            <!-- Swiper -->
            <div class="swiper-container s0">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($data[0] as $slider) {
                        ?>
                        <div class="swiper-slide"><a href="<?=$slider['link']?>"><img src="<?=$slider['img'] ?>" alt=""></a>
                        </div>
                        <?php
                    }
                    ?>


                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <aside class="bannerLeft">
            <a href="public/#"><img src="public/images/banner/b1.gif" alt=""></a>
            <a href="public/#"><img src="public/images/banner/b2.jpg" alt=""></a>
        </aside>
    </div>
</article>