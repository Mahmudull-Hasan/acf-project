<?php get_header();?>

      <?php $about_breadcrumb_image = get_field('about_breadcrumb_image', 'options');?>

         <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $about_breadcrumb_image['url'];?>');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                  <div class="col-md-9 ftco-animate pb-5">
                     <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title();?> Blog <i class="ion-ios-arrow-forward"></i></span></p>
                     <h1 class="mb-0 bread">Search For: <?php the_title();?></h1>
                  </div>
            </div>
         </div>
      </section>

      <section class="ftco-section">
         <div class="container">
            <div class="row d-flex">
               <?php
                $s=get_search_query();
                $args = array( 
                   's' =>$s 
               );
               $query = new WP_Query($args);
                  if($query->have_posts()){                    
                     while($query->have_posts()){
                        $query->the_post();

                        get_template_part('template-parts/blog');
                     }
                  }
               ?>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/image_1.jpg');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#">March 31, 2020</a></div>
                           <div><a href="#">Admin</a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5">
               <div class="col text-center">
                  <div class="block-27">
                     <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php get_template_part('template-parts/cta');?>
   <?php get_footer();?>