<?php
    $about_breadcrumb_image = get_field('about_breadcrumb_image', 'options');      
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $about_breadcrumb_image['url'];?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title();?> <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread"><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>