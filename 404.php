<?php get_header();?>
<?php
    $about_breadcrumb_image = get_field('about_breadcrumb_image', 'options');      
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $about_breadcrumb_image['url'];?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> 404 not found page <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">404 not found page </h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ftco-animate">
                    <h1>404 Not Found Page</h1>
                    <?php echo get_search_form();?>                  
               </div>
               <!-- .col-md-8 -->
               <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

                  <?php dynamic_sidebar('main-sidebar');?>

                  <div class="sidebar-box ftco-animate">
                     <h3>Paragraph</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php get_footer();