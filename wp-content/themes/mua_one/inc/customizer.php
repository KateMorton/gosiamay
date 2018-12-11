<?php
    function wp_customize_register ($wp_customize) {
        //Showcase section
        $wp_customize->add_section('showcase', array(
            'title' => __('showcase', 'mua_one'),
            'description' => sprintf(__('options for showcase', 'mua_one')),
            'priority' => 130
        ));

        $wp_customize->add_setting('showcase_img', array(
            'default' => get_bloginfo('template_directory').'/img/placeholder_1.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img', array(
            'label' => __('Image 1', 'mua_one'),
            'section' => 'showcase',
            'settings' => 'showcase_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('showcase_img_2', array(
            'default' => get_bloginfo('template_directory').'/img/placeholder_2.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img_2', array(
            'label' => __('Image 2', 'mua_one'),
            'section' => 'showcase',
            'settings' => 'showcase_img_2',
            'priority' => 2
        )));

        $wp_customize->add_setting('showcase_img_3', array(
            'default' => get_bloginfo('template_directory').'/img/placeholder_3.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img_3', array(
            'label' => __('Image 3', 'mua_one'),
            'section' => 'showcase',
            'settings' => 'showcase_img_3',
            'priority' => 3
        )));

        //Mobile showcase 

        $wp_customize->add_setting('mob_showcase_text', array(
            'default' => _x('Professional Make Up Artist', 'mua_one'),
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('mob_showcase_text', array(
            'label' => __('Text', 'mua_one'),
            'section' => 'showcase',
            'priority' => 4
        ));
        
    }    

    add_action('customize_register', 'wp_customize_register');

?>