
<?php
//load stylsheet
// function load_css()
// {
//     /*bootstrap is name of the stylesheet ~ 
//       get_temp function tells the exact location of the theme ~ 
//       array() depicts an array of dependencies, stylesheets that must load before this one ~
//       false is version no of stylesheet ~
//       all means all media types
//       wp enqueue adds the stylesheet to be loaded
//     */
//     wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
//     wp_enqueue_style('bootstrap');

//     wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
//     wp_enqueue_style('style');
// }
// add_action('wp_enqueue_scripts','load_css');

// //load javascript
// function load_js()
// {
//     wp_enqueue_script('jquery');
//     /* true: This parameter specifies whether the script should be loaded in the footer of the web page (after the content) rather than in the header. 
//     Loading scripts in the footer can improve page load performance. */
//     wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', 'jquery', false, true);
//     wp_enqueue_script('bootstrapjs');

// }
// add_action('wp_enqueue_scripts','load_js');

?>
<!-- Register Custom Navigation Walker -->
 <?php
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( 
    array(
    'primary' => __('Primary Menu'),
) );

