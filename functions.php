<?php
global $mh_options;
include(get_template_directory().'/includes/style.php');
include(get_template_directory().'/includes/js.php');
include(get_template_directory().'/includes/functions.php');
include(get_template_directory().'/options/options.php');
include(get_template_directory().'/symple-shortcodes/symple-shortcodes.php');
include(get_template_directory().'/thalassa-widget/thalassa-widget.php');
include(get_template_directory().'/framework/metaboxes.php');
include('pagination.php'); 


if ( ! isset( $content_width ) ) $content_width = 900;

add_action('after_setup_theme','th_setup');
function th_setup(){
add_editor_style();
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support( 'post-formats', array( 'image','video', 'audio','gallery','link' ) );
add_post_type_support('portgallery','post-formats');
}


// create sidebar & widget area

if(function_exists('register_sidebar')) {
	
	register_sidebar(array('name' => 'Blog Sidebar','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h3>', 'after_title'   => '</h3>'));
	
	register_sidebar(array('name' => 'Search Sidebar','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h3>', 'after_title'   => '</h3>'));

	register_sidebar(array('name' => 'Subscribe Form','description'   => 'This area for the Email Subscribe.', 'before_widget' => '<div id="%1$s" class="widget-news %2$s">','after_widget'  => '</div>'));
    	
	register_sidebar(array('name' => 'Footer Area 1','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h5>', 'after_title'   => '</h5>'));
	register_sidebar(array('name' => 'Footer Area 2','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h5>', 'after_title'   => '</h5>'));
	register_sidebar(array('name' => 'Footer Area 3','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h5>', 'after_title'   => '</h5>'));
	register_sidebar(array('name' => 'Footer Area 4','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h5>', 'after_title'   => '</h5>'));
	register_sidebar(array('name' => 'Footer Area 5','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h5>', 'after_title'   => '</h5>'));
	register_sidebar(array('name' => 'Footer Area 6','description'   => 'This area for all widgets.', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h5>', 'after_title'   => '</h5>'));
}
