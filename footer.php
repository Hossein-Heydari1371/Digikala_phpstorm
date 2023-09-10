<?php

$options = Model::getOptions();

?>
<?php

$user = Model::sessionGet('user_id');

if ($user == '') {
    ?>
    <div id="loginModal" style="display: none">

        <div class="contain">
            <div class="header">
                ورود
            </div>

            <label>
                پست الکترونیک خود را وارد کنید
                <input type="text" name="email">
            </label>
            <label>
                رمز عبور خود را وارد کنید
                <input type="password" name="password">
            </label>
            <div class="error">
            </div>


            <button onclick="checkUserLogin()" class="login">
                ورود به فروشگاه
            </button>
        </div>
    </div>
    <?php
}
?>


<footer>

    <div class="scrollTop flex">
        برگشت به بالا
    </div>
    <div class="contain container">
        <nav class="feature flex container mx1450">
            <a href="public/"><img src="public/images/footer/item1.svg" alt="">
                <div class="itemTitle">
                    تحول اکسپرس
                </div>
            </a>
            <a href="public/"><img src="public/images/footer/item2.svg" alt="">
                <div class="itemTitle">
                    پشتیبانی ۲۴ساعته
                </div>
            </a>
            <a href="public/"><img src="public/images/footer/item3.svg" alt="">
                <div class="itemTitle">
                    پرداخت در محل
                </div>
            </a>
            <a href="public/"><img src="public/images/footer/item4.svg" alt="">
                <div class="itemTitle">
                    ۷ روز ضمانت بازگشت
                </div>
            </a>
            <a href="public/"><img src="public/images/footer/item5.svg" alt="">
                <div class="itemTitle">
                    ضمانت اصل بودن کالا
                </div>
            </a>
        </nav>
        <div class="middleBar mx1450 container flex">
            <div class="right flex">
                <nav>
                    <a href="public/">راهنمای خرید از دیجی کالا</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                </nav>
                <nav>
                    <a href="public/">خدمات مشتریان</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                    <a href="public/">نحوه ثبت سفارش</a></nav>
                <nav>
                    <a href="public/">با دیجی کالا</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                    <a href="public/">نحوه ثبت سفارش</a>
                    <a href="public/">نحوه ثبت سفارش</a></nav>
            </div>
            <div class="left">
                <div>
                    از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر شوید:
                </div>
                <div class="form">
                    <form action="">
                        <input type="text" placeholder="آدرس ایمیل خود را وارد کنید">
                        <button>ارسال</button>
                    </form>
                </div>
                <div>
                    دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:
                </div>
                <div class="socialMedia flex">
                    <a href="<?= $options['twitter_footer'] ?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?= $options['Instagram_footer'] ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?= $options['linkedin_footer'] ?>"> <i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <nav class="contactUs container">
            <ul class="flex">
                <li>
                    هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم
                    شماره تماس :
                </li>
                <li>
                    شماره تماس :
                    <a href="public/">
                        <?= $options['phone_footer'] ?>
                    </a>
                </li>
                <li>
                    آدرس ایمیل :
                    <a href="public/">
                        <?= $options['email_footer'] ?>
                    </a>
                </li>
            </ul>
            <div class="downloadApp flex">
                <a href="<?= $options['download_app_playstore'] ?>">
                    <img src="public/images/footer/playstore.png" width="150px" alt="">
                </a>
                <a href="<?= $options['download_app_bazar'] ?>">
                    <img src="public/images/footer/bazar.png" width="150px" alt="">
                </a>
                <a href="<?= $options['download_app_sibapp'] ?>">
                    <img src="public/images/footer/sibapp.png" width="150px" alt="">
                </a>
            </div>
        </nav>
    </div>
    <div class="info ">
        <div class="description flex container">
            <div class="right">
                <h1>
                    فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین
                </h1>
                <p>
                    دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه
                    اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های
                    معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌کالا با دنیایی
                    از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
                </p>
            </div>
            <div class="left flex">
                <a href="public/"><img src="public/images/footer/c1.png" width="100px" alt=""></a>
                <a href="public/"><img src="public/images/footer/c2.png" width="200px" alt=""></a>
                <a href="public/"><img src="public/images/footer/c3.png" width="200px" alt=""></a>
            </div>
        </div>
        <nav class="partners">
            <ul class="flex container">
                <li><a href="public/"><img src="public/images/footer/digi%20pay.svg" alt=""></a></li>
                <li><a href="public/"><img src="public/images/footer/digi%20style.svg" alt=""></a></li>
                <li><a href="public/"><img src="public/images/footer/digikala%20aff.svg" alt=""></a></li>
                <li><a href="public/"><img src="public/images/footer/digikala%20fidibo.svg" alt=""></a></li>
                <li><a href="public/"><img src="public/images/footer/digikala%20mag.svg" alt=""></a></li>
                <li><a href="public/"><img src="public/images/footer/digikala%20club.svg" alt=""></a></li>
            </ul>
        </nav>
        <div class="copyRight">
            <p>
                <?= $options['copyright_footer'] ?>
            </p>
        </div>
    </div>


</footer>
<script>
    $('[data-countdown]').each(function () {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('%H:%M:%S'));
        });
    });
</script>
<script>
    $('.login').on('click', function () {
        $('#loginModal').fadeIn();
        $('body').addClass('active');
    })

    function checkUserLogin() {
        var email = $("input[name='email']").val();
        var password = $('input[name="password"]').val();

        var url = 'login/checkUserLogin';
        var data = {'email': email, 'password': password};
        $.post(url, data, function (msg) {
            console.log(msg);
            if (msg == 1) {

                window.location = window.location.href;

            } else {

                var error = '<div>نام کاربری یا رمز عبور اشتباه است.</div>';
                $('#loginModal .error').html(error);

            }

        })

    }

    //function of close modal if press ESC
    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            $('#loginModal').fadeOut()
            $('body').removeClass('active');
        }
    })

    //function of close modal if outside click
    var modal = document.getElementById('loginModal');

    window.addEventListener("click", OutSide);

    function OutSide(e) {
        if (e.target == modal) {
            modal.style.display = 'none';

            $('body').removeClass('active');
        }
    }

</script>

</body>
</html>