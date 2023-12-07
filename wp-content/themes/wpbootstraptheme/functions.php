
<?php
//load stylsheet
function load_css()
{
    /*bootstrap is name of the stylesheet ~ 
      get_temp function tells the exact location of the theme ~ 
      array() depicts an array of dependencies, stylesheets that must load before this one ~
      false is version no of stylesheet ~
      all means all media types
      wp enqueue adds the stylesheet to be loaded
    */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_css');

//load javascript
function load_js()
{
    wp_enqueue_script('jquery');
    /* true: This parameter specifies whether the script should be loaded in the footer of the web page (after the content) rather than in the header. 
    Loading scripts in the footer can improve page load performance. */
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js', array('jquery'), '', true);
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');

}

add_action('wp_enqueue_scripts','load_js');

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'Walker_Nav_menu' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


// <!-- Register Custom Navigation Walker -->

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

  //Theme Support
  function wpb_theme_support(){

    add_theme_support('post-thumbnails');

    //register nav menu
    register_nav_menus(
        array(
          'primary' => 'Primary Menu',
        )
       );

    //Post Formats
    add_theme_support('post-formats', array('aside','gallery'));


  }
  add_action( 'after_setup_theme','wpb_theme_support');

// Excerpt length control
function set_excerpt_length(){
  return 40;
}

add_filter('excerpt_length','set_excerpt_length');

//Widget locations
function wpb_init_widget($id){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id'=> 'sidebar',
    'before_widget' =>'<div class="p-4">',
    'after_widget'=>'</div>',
    'before_title'=>'<h4>',
    'after_title' =>'</h4>'
  ));
}

add_action('widgets_init','wpb_init_widget');

//Customizer File
require get_template_directory(). '/inc/customizer.php';