<?php get_header(); ?>
<!--Showcase Carousel-->
<div class="d-none d-sm-block showcase container d-flex justify-content-center align-self-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade w-80 mt-4" data-ride="carousel">
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

<?php get_footer(); ?>