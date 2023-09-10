<article>
    <h2 class="h2">
        امتیاز کاربران به:
        <span>
                                گوشی موبایل سامسونگ مدل Galaxy Note 10 Plus N975F/DS دو سیم‌کارت ظرفیت 256 گیگابایت
|
۴
/ ۵
(<?= $comments_number = $data['comments_number'] ?> نفر)
                            </span>
    </h2>
    <section>
        <div class="flex">
            <div class="rating ">
                <ul>

                    <?php
                    $comment_param_new = $data['comment_param_new'];
                    $scores_total = $data['scores_total'];
                    foreach ($comment_param_new as $item) {
                        $score = $scores_total[$item['id']];
                        ?>
                        <li class="flex">
                            <div class="items">
                                <?= $item['title'] ?>
                            </div>
                            <div class="value">
                                <div class="rate" style="width: <?=$score*20?>%"></div>
                            </div>
                            <div><?=$score?></div>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
            <div class="addComment">
                                <span>
                                    شما هم می‌توانید در مورد این کالا نظر بدهید.
                                </span>
                <p>
                    برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید. اگر این محصول را قبلا از
                    دیجی‌کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.

                </p>
                <a href="">
                    افزودن نظر جدید
                </a>
            </div>
        </div>
    </section>
    <div class="filters flex">
        <span>نظرات کاربران</span>
        <ul class="flex">
            <li>نظر خریداران</li>
            <li>مفیدترین نظرات</li>
            <li>جدیدترین نظرات</li>
        </ul>
    </div>
    <div class="productComments">
        <ul>
            <?php
            $comments = $data['comments'];
            foreach ($comments as $row) {
                ?>
                <li class="flex">
                    <div class="userInfo">
                                        <span class="userName">
                                            مهرداد داداشی
                                            <span>خریدار</span>
                                        </span>
                        <span class="time"><?= $row['time'] ?></span>
                    </div>
                    <div class="matnComment">
                        <p class="commentTitle">
                            <?= $row['title'] ?>
                        </p>
                        <p class="comment">
                            <?= $row['context'] ?>
                        </p>
                        <ul class="positive">
                            <li>خوش دست بودن</li>
                            <li>خوش دست بودن</li>
                            <li>خوش دست بودن</li>
                        </ul>
                        <ul class="negetive">
                            <li>باطری متوسط</li>

                        </ul>
                    </div>
                </li>
                <?php
            }
            ?>

        </ul>
    </div>
</article>
