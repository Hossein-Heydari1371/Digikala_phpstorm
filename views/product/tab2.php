<article>
    <h2 class="h2">
        مشخصات فنی
        <span>
                                Samsung Galaxy Note 10 Dual SIM 256GB Mobile Phone
                            </span>
    </h2>
    <?php
    $features = $data['features'];
    foreach ($features as $parent) {
        ?>
        <section>
            <h3 class="title">
                <?= $parent['title'] ?>
            </h3>
            <ul>
                <?php
                $child = $parent['children'];
                foreach ($child as $item) {
                    ?>
                    <li class="flex">
                        <div class="params">
                            <?= $item['title'] ?>
                        </div>
                        <div class="value">
                            <?php
                            if ($item['value']==''){
                                echo '----';
                            }else{
                                echo $item['value'];
                            }
                            ?>
                        </div>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </section>
        <?php
    }
    ?>
</article>
