<section class="description">
    <div class="productTitleFa">
        <h1><?= $productInfo['title'] ?></h1>
    </div>
    <div class="productConfig">
                    <span class="productTitleEn">
                        Samsung Galaxy A31 SM-A315F/DS Dual SIM 128GB Mobile Phone
                    </span>
        <div class="engagement flex">
            <div class="item">
                <i class="fas fa-star"></i>
                ۴.۴(۹۹۴)

            </div>
            <div class="comments">
                ۱۳۳۶ دیدگاه کاربران
            </div>
            <div class="questionsAnswers">
                ۳۵۴ پرسش و پاسخ
            </div>
        </div>
        <div class="directory">
            <ul class="flex">
                <li>
                    برند :
                    <a href="">سامسونگ</a>
                </li>
                <li>
                    دسته بندی :
                    <a href="">
                        گوشی موبایل
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="productColor flex">
        <span>انتخاب رنگ:</span>
        <div class="colors">
            <?php
            foreach ($productInfo['colors'] as $color) {
                ?>
                <input type="radio" id=" <?= $color['title'] ?>" name="colors"
                       value="<?= $color['id'] ?>">
                <label for=" <?= $color['title'] ?>">
                    <span style="background-color:  <?= $color['hex_code'] ?>"></span>
                    <?= $color['title'] ?>
                </label>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="productFeatures">
        <ul data-title="ویژگی های محصول">

            <Li>حافظه داخلی:
                128 گیگابایت
            </Li>
            <Li>
                شبکه های ارتباطی:
                4G، 3G، 2G
            </Li>
            <Li>
                سیستم عامل:
                Android
            </Li>
            <Li>
                رزولوشن عکس:
                16 مگاپیکسل
            </Li>
            <Li>
                نسخه سیستم عامل:
                Pie 9.0
            </Li>
            <Li>
                فناوری:
                Dynamic AMOLED
            </Li>

        </ul>
        <div class="showMore">
                        <span>
                             + نمایش بیشتر
                        </span>
        </div>
    </div>
</section>
