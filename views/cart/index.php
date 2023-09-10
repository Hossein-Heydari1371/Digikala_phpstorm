<?php
$basket = $data['basket'];
$totalPrice = $data['totalPrice'];
$totalDiscount = $data['totalDiscount'];

?>
<main>
    <div class="container flex " id="cart">
        <div class="right">
            <ul class="productItems">
                <?php
                foreach ($basket as $row) {

                    ?>
                    <li class="item flex" data-basket-id="<?= $row['basket_id'] ?>">
                        <div class="img">
                            <img src="public/images/product/<?= $row['id'] ?>/product_350.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="productName">
                                <?= $row['title'] ?>

                            </div>
                            <div class="productColor flex">
                                <span class="circle" style="background: <?= $row['hex_code'] ?>"></span>
                                <?= $row['colorTitle'] ?>

                            </div>
                            <div class="productGuarantee">
                                <i class="fal fa-shield-check"></i>
                                <?= $row['guaranteeTitle'] ?>

                            </div>
                            <div class="productDiscount">
                                تخفیف <span><?= $row['discount'] ?></span> درصد
                            </div>
                            <div class="action flex">
                                <div class="quantity flex">
                                    <button class="increase">+</button>
                                    <input type="text" data-basket-id="<?= $row['basket_id'] ?>"
                                           value="<?= $row['number'] ?>">
                                    <button class="decrease">-</button>
                                </div>
                                <div class="remove" onclick="removeBasketItemAjax(<?= $row['basket_id'] ?>)">
                                    <i class="fal fa-trash"></i>
                                    حذف
                                </div>
                                <div class="productPrice">
                                    <span><?= number_format(($row['price'] * $row['number']) - ($row['price'] * $row['number'] * $row['discount']) / 100) ?></span>
                                    تومان

                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>

            </ul>


        </div>
        <div class="left">
            <div class="cartPrice flex">
                <div class="title">
                    قیمت کالاها (<?= sizeof($basket) ?>)

                </div>
                <div class="price">
                    <span>  <?= number_format($totalPrice) ?></span>
                    تومان
                </div>

            </div>
            <div class="cartDiscount flex">
                <div class="title">
                    تخفیف کالاها

                </div>
                <div class="discount">
                    <span><?= number_format($totalDiscount) ?></span>


                    تومان


                </div>
            </div>
            <div class="cartTotalPrice flex">
                <div class="title">
                    جمع سبد خرید

                </div>
                <div class="price">
                    <span><?= number_format($totalPrice - $totalDiscount) ?></span>

                    تومان

                </div>
            </div>
            <?php
            $user = Model::sessionGet('user_id');
            if ($user != false) {


                ?>
                <a href="shipping" class="continue">ادامه فرآیند خرید</a>

                <?php
            } else {

                ?>
                <a class="continue login">ورود و ثبت سفارش</a>
                <?php
            }
            ?>
        </div>
    </div>
</main>
<script>
    function removeBasketItemAjax(basket_id) {

        var url = 'cart/removeBasketItemAjax/' + basket_id + '';
        var data = {};
        $.post(url, data, function (msg) {

            location.reload();

        })
    }

</script>
<script>
    $('.increase , .decrease').on('click', function () {

        var input = $(this).parents('.quantity').find('input');
        var basket_id = $(this).parents('.quantity').find('input').attr('data-basket-id');
        var val = input.attr('value');

        if ($(this).hasClass('increase')) {

            input.attr('value', parseInt(val) + 1)

            var number = input.val();

        } else {

            input.attr('value', parseInt(val) - 1)
            var number = input.val()

            if (val <= 1) {
                input.attr('value', 1)
            }
        }

        updateBasket(number, basket_id);

    })


    function updateBasket(number, basket_id) {
        var url = 'cart/updateBasket';
        var data = {'number': number, 'basket_id': basket_id};

        $.post(url, data, function (msg) {
            var basketItems = msg[0];
            var totalPrice = msg[1];
            var totalDiscount = msg[2];


            $.each(basketItems, function (index, value) {
                var number = value['number'];
                var price = value['price'];
                var basketId = value['basket_id'];
                var discount = value['discount']
                var tag = $('#cart').find('[data-basket-id="' + basketId + '"]')

                tag.find('.productPrice span ').html(((price * number) - (price * number * discount) / 100).toLocaleString())

            })
            $('.cartPrice .price span').html(totalPrice.toLocaleString());
            $('.cartDiscount .discount span').html(totalDiscount.toLocaleString());
            $('.cartTotalPrice .price span').html((totalPrice - totalDiscount).toLocaleString());

        }, 'json');


    }
</script>