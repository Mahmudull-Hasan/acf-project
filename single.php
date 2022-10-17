<?php get_header();?>

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

      <section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ftco-animate">

                  <h2 class="mb-3"><?php the_title();?></h2>
                  <?php the_content();?>                
                  <div class="tag-widget post-tag-container mb-5 mt-5">
                     <div class="tagcloud">
                        <?php echo get_the_tag_list();?>
                     </div>
                  </div>
                  <div class="about-author d-flex p-4 bg-light">
                     <div class="bio mr-5">
                        <?php
                           global $post;
                           $author_id = $post->post_author;
                        ?>
                        
                           <img src="<?php echo esc_url( get_avatar_url( $author_id ) ); ?>" alt="<?php echo get_the_author_meta('display_name', $author_id);?>" class="img-fluid mb-4">
                     </div>
                     <div class="desc">
                        <h3><?php echo get_the_author_meta('display_name', $author_id);?></h3>
                        <p><?php echo get_the_author_meta('description', $author_id);?></p>
                     </div>
                  </div>
                  <div class="pt-5 mt-5">
                     <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                           comments_template();
                        endif;                     
                     ?>
                     <!-- END comment-list -->
                     
                  </div>
               </div>
               <!-- .col-md-8 -->
               <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

                  <?php dynamic_sidebar('main-sidebar');?>
                 
                  <h2><?php the_field('widget_title');?></h2>
                  <p><?php the_field('widget_description');?></p>
                  
                  
               </div>
            </div>
         </div>
      </section>
      <!-- .section -->
      <?php get_template_part('template-parts/cta');?>
      
      <?php get_footer();?>
