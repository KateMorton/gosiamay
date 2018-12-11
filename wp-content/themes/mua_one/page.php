<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="page container d-flex justify-content-center mt-5 mb-5">
                <div class="w-75">
                    <h4><?php the_title(); ?></h4> 
                    <div class="row align-items-center">
                        <div class="col-sm">
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="post-thumb mb-4">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm">               
                            <?php the_content(); ?> 
                        </div>                       
                    </div> 
                 </div>
            </div>              
        <?php endwhile; ?>          
    <?php endif; ?> 
<?php get_footer(); ?>