<?php
/*
Template Name: Contact page
*/
get_header();?>

      <?php get_template_part('template-parts/breadcump');?>

      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                           <div class="contact-wrap w-100 p-md-5 p-4">
                              <h3 class="mb-4">Get in touch</h3>
                              <div id="form-message-warning" class="mb-4"></div>
                              <div id="form-message-success" class="mb-4">
                                 Your message was sent, thank you!
                              </div>
                              <div class="contactForm">
                                 <?php echo do_shortcode('[contact-form-7 id="165" title="Contact Form"]');?>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                           <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                              <h3><?php the_field('contact_info_tiltle');?></h3>
                              <p class="mb-4"><?php the_field('contact_info_description');?></p>
                              
                              <?php
                                 $contact_info_address = get_field('contact_info_address', 'options');
                                 foreach ($contact_info_address as $info_address) {
                              ?>
                                 <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                       <span class="fa <?php echo $info_address['icon'];?>"></span>
                                    </div>
                                    <div class="text pl-3">
                                       <p><span><?php echo $info_address['address'];?>:</span> <?php echo $info_address['description'];?></p>
                                    </div>
                                 </div>
                              <?php
                                 }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="map" class="map"></div>

      <?php get_template_part('template-parts/cta');?>

      <?php get_footer();?>