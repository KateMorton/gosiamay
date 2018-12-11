<?php get_header(); ?>
<!--Showcase Carousel-->
<div class="d-none showcase container d-sm-flex justify-content-center align-items-center mt-5 mb-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade w-80" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_theme_mod('showcase_img', get_bloginfo('template_directory').'img/placeholder_1.jpg'); ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_theme_mod('showcase_img_2', get_bloginfo('template_directory').'img/placeholder_2.jpg'); ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_theme_mod('showcase_img_3', get_bloginfo('template_directory').'img/placeholder_3.jpg'); ?>" alt="Third slide">
            </div>
        </div>
    </div>
</div>

<!--Mobile front screen-->
<div class="d-block showcase d-sm-none mt-4 mb-3">
    <div class="logo d-flex flex-column justify-content-center align-items-center">
        <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
        <h4 class="mob-text mt-3"><?php echo get_theme_mod('mob_showcase_text', 'Professional Make Up Artist'); ?></h4>
    </div> 
</div>
<?php get_footer(); ?>