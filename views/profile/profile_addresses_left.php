<div class="profileLeft" id="address">
    <div class="header">
                <span>
نشانی ها
                </span>
    </div>
    <div class="add_address">
        اضافه کردن آدرس جدید
    </div>
    <div class="address">
        <form action="profile/addresses" method="post">
            <div class="ir-select">
                <label>
                    استان
                    <select class="ir-province" name="province"></select>
                </label>
                <label>
                    شهر
                    <select class="ir-city" name="city"></select>
                </label>
            </div>
            <div class="neshani_Posti">
                <label>
                    نشانی
                    <input type="text" name="address">
                </label>
                <label>
                    واحد
                    <input type="text" name="vahed" style="width: 5%;">
                </label>
                <label>
                    پلاک
                    <input type="text" name="pelak" style="width: 5%;">
                </label>
            </div>
            <button class="submit_comment">
                تایید و ثبت آدرس
            </button>
            <div class="family_mobile">
                <label>
                    نام
                    <input type="text" name="name">
                </label>
                <label>
                    نام خانودادگی
                    <input type="text" name="family">
                </label>
                <label>
                    شماره موبایل
                    <input type="text" name="mobile">
                </label>
            </div>

        </form>
    </div>

    <?php
    foreach ($address as $item) {

        ?>

        <div class="item" data-address-id="<?= $item['id'] ?>">
            <form action="" id="form">
                <div class="ir-select">
                    <label>
                        استان
                        <select class="ir-province" name="province">

                        </select>
                    </label>
                    <label>
                        شهر
                        <select class="ir-city" name="city"></select>
                    </label>
                </div>
                <div class="neshani_Posti">
                    <label>
                        نشانی
                        <input type="text" name="address" value="<?= $item['address'] ?>">
                    </label>
                    <label>
                        واحد
                        <input type="text" name="vahed" style="width: 5%;" value="<?= $item['vahed'] ?>">
                    </label>
                    <label>
                        پلاک
                        <input type="text" name="pelak" style="width: 5%;" value="<?= $item['pelak'] ?>">
                    </label>
                </div>

                <div class="family_mobile">
                    <label>
                        نام
                        <input type="text" name="name" value="<?= $item['name'] ?>">
                    </label>
                    <label>
                        نام خانودادگی
                        <input type="text" name="family" value="<?= $item['family'] ?>">
                    </label>
                    <label>
                        شماره موبایل
                        <input type="text" name="mobile" value="<?= $item['mobile'] ?>">
                    </label>
                </div>
                <div class="status">
                    <div class="removeAddress" onclick="removeAjaxAddress(<?= $item['id'] ?>)">
                        <span></span>
                    </div>
                    <div class="edit_address" onclick="editAddressAjax(<?= $item['id'] ?>)">
                        <span></span>
                    </div>
                </div>
            </form>

        </div>

        <?php
    }
    ?>

</div>
<script>
    function removeAjaxAddress(address_id) {
        var url = 'profile/removeAjaxAddress/' + address_id + ''
        var data = {}
        $.post(url, data, function (msg) {
            console.log(msg)
            $('#address').find('[data-address-id=' + address_id + ']').fadeOut();

        })

    }
</script>

<script>
    function editAddressAjax(address_id) {
        var item = $('#address').find('[data-address-id=' + address_id + ']')
        var form = item.find('#form')
        var url = 'profile/editAddressAjax/' + address_id + ''
        var data = form.serializeArray()
        $.post(url, data, function (msg) {
            item.find('.edit_address ').html('<i class="fas fa-check"></i>');

        })
    }
</script>
