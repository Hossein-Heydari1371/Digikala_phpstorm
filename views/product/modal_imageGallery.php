<div class="modalBox" id="imageGallery">
    <div class="modalContainer">
        <div class="title flex">
            تصاویر رسمی

            <i class="fal fa-times closeModal"></i>
        </div>
        <div class="contain flex">
            <div class="right">
                <span class='zoom' id='ex1'> <img src='public/images/product/image1280/p6.jpg' id='jack'
                                                  alt='Daisy on the Ohoopee'/>
                </span>
            </div>
            <div class="left">
                <div class="productTitle">
                    گوشی موبایل هوآوی مدل Y6p MED-LX9 دو سیم کارت ظرفیت 64 گیگابایت
                </div>
                <ul class="flex">
                    <?php
                    foreach ($images as $row) {


                        ?>
                        <li class="showGallery flex">
                            <img src="public/images/product/<?=$row['product_id']?>/gallery/small/<?=$row['img']?>"
                                 data-image-1280="public/images/product/<?=$row['product_id']?>/gallery/large/<?=$row['img']?>"
                                 alt="">
                        </li>
                        <?php
                    }
                    ?>

                </ul>


            </div>
        </div>

    </div>

</div>