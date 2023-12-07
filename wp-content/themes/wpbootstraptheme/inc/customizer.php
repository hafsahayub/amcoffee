<?php
function wpb_customize_register($wp_customize){
    //showcase section
    $wp_customize-> add_section('showcase', array(
        'title' => __('Showcase','wpbootstraptheme'),
        'description'=>sprintf(__('Options for showcase', 'wpbootstraptheme')),
        'priority' => 130
    ));

    $wp_customize-> add_setting('showcase_image', array(
        'default'=> get_bloginfo('template_directory').'/img/showcase.jpg','wpbootstraptheme',
        'type'=>'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_img', array(
        'label'=>__('Showcase Image','wpbootstraptheme'),
        'section'=>'showcase',
        'settings'=>'showcase_image',
        'priority'=> 1
    )));

    $wp_customize-> add_setting('showcase_heading', array(
        'default'=> _x('Custom Bootstrap Wordpress Theme','wpbootstraptheme'),
        'type'=>'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading',array(
        'label'=>__('Heading','wpbootstraptheme'),
        'section'=>'showcase',
        'priority'=> 2
    ));

    $wp_customize-> add_setting('showcase_text', array(
        'default'=> _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam','wpbootstraptheme'),
        'type'=>'theme_mod'
    ));

    $wp_customize->add_control('showcase_text',array(
        'label'=>__('Text','wpbootstraptheme'),
        'section'=>'showcase',
        'priority'=> 3
    ));

    $wp_customize-> add_setting('btn_url', array(
        'default'=> _x('http://test.com','wpbootstraptheme'),
        'type'=>'theme_mod'
    ));

    $wp_customize->add_control('btn_url',array(
        'label'=>__('Button URL','wpbootstraptheme'),
        'section'=>'showcase',
        'priority'=> 4
    ));

    $wp_customize-> add_setting('btn_text', array(
        'default'=> _x('Read More','wpbootstraptheme'),
        'type'=>'theme_mod'
    ));

    $wp_customize->add_control('btn_text',array(
        'label'=>__('Button Text','wpbootstraptheme'),
        'section'=>'showcase',
        'priority'=> 5
    ));


}
add_action('customize_register','wpb_customize_register');