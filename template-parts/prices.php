<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <?php 
                    $prices_subtitle = get_field('prices_subtitle', 'options');
                ?>
                <span class="subheading"><?php echo $prices_subtitle['prices_sub'];?></span>
                <h2><?php echo $prices_subtitle['price_title'];?></h2>
            </div>
        </div>
        <div class="row">
            <?php 
                $price_list = get_field('price_list', 'options');
                foreach ($price_list as $price) {
            ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                    <span class="excerpt d-block"><?php echo $price['list_heading'];?></span>
                    <span class="price"><sup>$</sup> <span class="number"><?php echo $price['list_amount'];?></span> <sub>/mos</sub></span>
                    <ul class="pricing-text mb-5">
                        <?php echo $price['price_list'];?>
                    </ul>
                    <a href="<?php echo $price['price_button_url'];?>" class="btn btn-primary d-block px-2 py-3"><?php echo $price['price_button_text'];?></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

        </div>
    </div>
</section>