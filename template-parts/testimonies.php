<section class="ftco-section testimony-section bg-light">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                  <?php
                     $testimonies_title = get_field('testimonies_title', 'options');
                  ?>
                  <span class="subheading"><?php echo $testimonies_title['sub_title'];?></span>
                  <h2><?php echo $testimonies_title['title'];?></h2>
               </div>
            </div>
            <div class="row ftco-animate">
               <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                     <?php 
                        $testimonies_description = get_field('testimonies_description', 'options');
                        foreach ($testimonies_description as $testimonies) {
                     ?>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4"><?php echo $testimonies['description'];?></p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(<?php echo $testimonies['image']['url'];?>)"></div>
                                 <div class="pl-3">
                                    <p class="name"><?php echo $testimonies['name'];?></p>
                                    <span class="position"><?php echo $testimonies['designation'];?></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php  
                        }
                     ?>

                  </div>
               </div>
            </div>
         </div>
      </section>