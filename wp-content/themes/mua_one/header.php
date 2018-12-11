<!doctype html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Professional make up artist Glasgow. Bridal, Weddings, Fashion, Editorial, Prom">
            <meta name="author" content="Kate Morton Website Developer">
            <link rel="icon" href="../../../../favicon.ico">

            <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

            <!-- Bootstrap core CSS -->
            <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
            <!--Custom Styling-->
            <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
            <!--fonts-->
            <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Sintony:400,700" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
            <?php wp_head(); ?> <!--Do not remove -->
        </head>

        <body>
            <header id="header" class="container pt-3">  
                <?php if(!is_front_page()) : ?>
                    <div class="logo d-flex d-sm-none justify-content-center">
                        <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                    </div>
                <?php endif;?>   
                <div class="logo d-none d-sm-flex justify-content-center">
                    <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                </div>                
                <nav class="navbar navbar-expand-lg pt-3">        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-caret-down"></i></span>
                    </button>              
                    <?php
                        wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'	        => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav w-100 text-center justify-content-sm-around mr-auto mt-2 mt-lg-0',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </nav>
            </header>