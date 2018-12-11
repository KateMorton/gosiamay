<?php /* Template Name: custompageportfolio */ ?>
<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="page container d-flex justify-content-center align-self-center mt-5 mb-5">
                <div class="w-80">
                    <h4 class="mb-5"><?php the_title(); ?></h4> 
                    <div class="mt-5">               
                        <?php the_content(); ?> 
                    </div>
                </div>
            </div>              
        <?php endwhile; ?>          
    <?php endif; ?> 
<?php get_footer(); ?>