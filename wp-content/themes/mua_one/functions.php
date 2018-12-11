<?php
    // Register Custom Navigation Walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
     
    //Theme Support
    function wp_theme_setup () {

        //header
        add_image_size('mytheme-logo', 150, 79);
        add_theme_support('custom-logo', array(
            'size' => 'mytheme-logo'
        ));

        //posts

        add_theme_support('post-thumbnails');
        
        //nav
        register_nav_menus( array(
            'primary' => __( 'Primary Menu'),
        ) );

        //Post Formats
        add_theme_support('post-formats', array('aside', 'gallery'));
    }

    add_action('after_setup_theme', 'wp_theme_setup');    

    //excerpt length control
    // function set_excerpt_length () {
    //     return 45;
    // }

    // add_filter('excerpt_length', 'set_excerpt_length');

    //Widget Locations
    // function wp_init_widgets ($id) {
    //     register_sidebar(array(
    //         'name' => 'Sidebar',
    //         'id'   => 'sidebar',
    //         'before_widget' => '<div class="blog_sidebar">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h4>',
    //         'after_title' => '</h4>'
    //     ));

    //     register_sidebar(array(
    //         'name' => 'Box1',
    //         'id'   => 'box1',
    //         'before_widget' => '<div class="box">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h3>',
    //         'after_title' => '</h3>'
    //     ));

    //     register_sidebar(array(
    //         'name' => 'Box2',
    //         'id'   => 'box2',
    //         'before_widget' => '<div class="box">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h3>',
    //         'after_title' => '</h3>'
    //     ));

    //     register_sidebar(array(
    //         'name' => 'Box3',
    //         'id'   => 'box3',
    //         'before_widget' => '<div class="box">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h3>',
    //         'after_title' => '</h3>'
    //     ));
    // }

    // add_action('widgets_init', 'wp_init_widgets');

    //Customizer file
    require get_template_directory().'/inc/customizer.php';


?>