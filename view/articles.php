<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   14.12.2021
 */

ob_start();
?>
    <?php foreach ($articles as $article) : ?>

<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                <img src=<?= $article['photo']; ?> alt="IMG-PRODUCT">

                <div class="block2-overlay trans-0-4">
                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                    </a>

                    <div class="block2-btn-addcart w-size1 trans-0-4">
                        <!-- Button -->
                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="block2-txt p-t-20">
                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                    <?= $article['code']; ?>
                </a>

                <span class="block2-price m-text6 p-r-5">
							<?php echo "$".number_format($article["price"], 2, ',', ' ')?>
									</span>
            </div>
        </div>
    </div>
</div>
    <?php endforeach ?>



<?php
$content = ob_get_clean();
require "gabarit.php";
require "controller/articles.php";


