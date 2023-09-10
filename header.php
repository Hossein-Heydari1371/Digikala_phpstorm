<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>فروشگاه اینترنتی دیجی کالا</title>
    <link rel="stylesheet" href="public/fonts/FontAwesome.Pro.5.14.0.Web/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="public/fonts/iranyekan/WebFonts/css/stylef.css">
    <link rel="stylesheet" href="public/fonts/iranyekan/Farsi_numerals/WebFonts/css/fontiran.css">
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/js/jquery.countdown.min.js"></script>
    <script src="public/js/jquery.elevateZoom-2.2.3.min.js"></script>
    <link rel="stylesheet" href="public/css/jquery-ui.min.css">
    <script src="public/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="public/css/kamadatepicker.min.css">
    <script src="public/js/kamadatepicker.min.js"></script>

    <?php
    Model::sessionInit();
     $user = Model::sessionGet('user_id');

    ?>
</head>
<body>
<header>
    <div class="header">
        <div class="headerRight">
            <a href="" class="logo"></a>
            <i class="fal fa-search"></i>
            <input type="text" class="searchBox" placeholder="جستجو در دیجی کالا . . .">
        </div>
        <div class="headerLeft">
            <?php
            if ($user == '') {
                ?>
                <a href="javascript:void(0)" class="login">
                    <i class="far fa-user-alt"></i>
                    ورود به حساب کاربری
                </a>
                <?php
            } else {
                ?>

                <a href="javascript:void(0)">
                    <i class="far fa-user-alt"></i>
                    خوش آمدید
                    <i class="far fa-chevron-down" style="font-size: 10px"></i>

                </a>

                <?php
            }
            ?>
            <a href="public/">
                <i class="far fa-shopping-cart"></i>
            </a>
        </div>
    </div>
    <nav>
        <div class="container">
            <ul class="flex">
                <li class="menu1">
                    <ul class="flex">
                        <li>
                            دسته بندی کالاها
                        </li>
                        <li><a href="public/">سوپرمارکت</a></li>
                        <li><a href="public/">تخفیف ها و پیشنهادها</a></li>
                        <li><a href="public/">دیجی کالای من</a></li>
                        <li><a href="public/">دیجی پلاس</a></li>
                        <li><a href="public/">دیجی کلاب</a></li>
                        <li><a href="public/">سوالی دارید؟</a></li>
                    </ul>

                </li>
                <li class="sendTo">
                    <span>لطفا شهر و استان خود را انتخاب کنید</span>
                </li>
            </ul>

        </div>
    </nav>
</header>