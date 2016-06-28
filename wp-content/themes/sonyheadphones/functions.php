<?php 


// adding the custom styles and scripts
function allergy_script_enqueue(){
	wp_enqueue_style( 'allergy-style', get_template_directory_uri() . '/css/allergy.css', array(),'1.0.0');

	// adding bootstrap style
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
	//

	wp_enqueue_script( 'allergy-js', get_template_directory_uri() . '/js/allergy.js', array(),'1.0.0', true);

	// adding bootstrap script
  wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
	//
}

add_action( 'wp_enqueue_scripts', 'allergy_script_enqueue');



// adding the theme supports. 
function allergy_theme_support(){

	// This adds appearence > menu(in dashboard), a theme support feature
	add_theme_support('menus'); 

	// This adds appearence > menu > edit menus(in dashboard): They give options in menu settings. Herev we are adding naigation menus to header and footer
  register_nav_menu('primary', 'Primary header navigation');
  register_nav_menu('secondary', 'Footer navigation');

}
add_action( 'init', 'allergy_theme_support');




//activating another theme support feature outside of the function. theme support can be called outside the function or action. This one adds appearence > background, appearence > header. Thumnails sets a featured image in the post > edit > featured image
add_theme_support('custom-background'); 
add_theme_support('custom-header'); 
add_theme_support('post-thumbnails'); 
// it has 9 types of post formats like image, quote, aside etc
add_theme_support('post-formats',array('aside','image','video')); 





