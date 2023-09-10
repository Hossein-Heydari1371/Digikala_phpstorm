<section>
    <div class="swiper-container s1 swiper1">
        <div class="headline">
            <span>محصولات مرتبط</span>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="card" href="">
                    <div class="image">
                        <img src="public/images/product/m1.jpg" alt="">
                    </div>
                    <div class="title">
                        محصول شماره ۱
                    </div>
                    <div class="price">
                        <div class="oldPrice">
                            <del>۲۳۰۰۰</del>
                            <span class="percent">۲۰٪</span>
                        </div>
                        <div class="newPrice">
                            <span>۱۸۰۰۰</span>
                            <span>تومان</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="card" href="">
                    <div class="image">
                        <img src="public/images/product/m2.jpg" alt="">
                    </div>
                    <div class="title">
                        محصول شماره ۲
                    </div>
                    <div class="price">
                        <div class="oldPrice">
                            <del>۲۳۰۰۰</del>
                            <span class="percent">۲۰٪</span>
                        </div>
                        <div class="newPrice">
                            <span>۱۸۰۰۰</span>
                            <span>تومان</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="card" href="">
                    <div class="image">
                        <img src="public/images/product/m3.jpg" alt="">
                    </div>
                    <div class="title">
                        محصول شماره ۳
                    </div>
                    <div class="price">
                        <div class="oldPrice">
                            <del>۲۳۰۰۰</del>
                            <span class="percent">۲۰٪</span>
                        </div>
                        <div class="newPrice">
                            <span>۱۸۰۰۰</span>
                            <span>تومان</span>
                        </div>
                    </div>

                </a>
            </div>
            <div class="swiper-slide">
                <a class="card" href="">
                    <div class="image">
                        <img src="public/images/product/m4.jpg" alt="">
                    </div>
                    <div class="title">
                        محصول شماره ۳
                    </div>
                    <div class="price">
                        <div class="oldPrice">
                            <del>۲۳۰۰۰</del>
                            <span class="percent">۲۰٪</span>
                        </div>
                        <div class="newPrice">
                            <span>۱۸۰۰۰</span>
                            <span>تومان</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="card" href="">
                    <div class="image">
                        <img src="public/images/product/m5.jpg" alt="">
                    </div>
                    <div class="title">
                        محصول شماره ۵
                    </div>
                    <div class="price">
                        <div class="oldPrice">
                            <del>۲۳۰۰۰</del>
                            <span class="percent">۲۰٪</span>
                        </div>
                        <div class="newPrice">
                            <span>۱۸۰۰۰</span>
                            <span>تومان</span>
                        </div>
                    </div>
                    <div class="timer" data-countdown="2023/03/01 11:23"></div>
                </a>
            </div>
        </div>
        <div class="swiper-button-next next"></div>
        <div class="swiper-button-prev prev"></div>
    </div>
</section>
<script type="text/javascript" src="public/js/swiper-bundle.min.js"></script>
<script>
    var swiper1 = new Swiper('.s1', {
        slidesPerView: 4,
        spaceBetween: 20,
        direction: getDirection(),
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            resize: function () {
                swiper.changeDirection(getDirection());
            }
        }
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

        return direction;
    }
</script>