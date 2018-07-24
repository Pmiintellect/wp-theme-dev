<?php
function themeedit(){
	wp_enqueue_style('style', get_template_directory_uri() .'/style.css',  array(),'1.0','all' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array (), '1.0', 'true');

}
 add_action('wp_enqueue_scripts','themeedit'); 
function themeedit_menu(){
	add_theme_support('menu');

	register_nav_menu('primary','Primary Header Navigation');
}
add_action('init', 'themeedit_menu');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('inside','image','video'));


?>