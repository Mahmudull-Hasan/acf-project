<?php
/*
Template Name: About page
*/
get_header();?>

      <?php get_template_part('template-parts/breadcump');?>
      <?php $about_second_image = get_field('about_second_image', 'options');?>

      <section class="ftco-section ftco-no-pt bg-light">
         <div class="container">
            <div class="row d-flex no-gutters">
               <div class="col-md-6 d-flex">
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo $about_second_image['url'];?>);">
                  </div>
               </div>
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5">
                     <span class="subheading"><?php echo the_field('about_sub_title', 'options');?></span>
                     <h2 class="mb-4"><?php echo the_field('about_page_title', 'options');?></h2>
                     <p><?php echo the_field('about_page_description', 'options');?></p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php get_template_part('template-parts/counters');?>
      <?php get_template_part('template-parts/testimonies');?>
      <?php get_template_part('template-parts/faqs');?>
      <?php get_template_part('template-parts/cta');?>

      <?php get_footer();?>




