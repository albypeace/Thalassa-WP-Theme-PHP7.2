<?php

$th_options = get_option('thalassa_theme');



	function thalassa_enqueue_style() {
	
				//home
				wp_enqueue_style('all', get_template_directory_uri() . '/includes/css/all.css');
				wp_enqueue_style('gridcss', get_template_directory_uri() . '/includes/css/grid.css');
				wp_enqueue_style('nivoslidercss', get_template_directory_uri() . '/includes/css/nivo-slider.css');
				wp_enqueue_style('pixelindustrycss', get_template_directory_uri() . '/includes/js/jplayer/skin/pixel-industry/pixel-industry.css');
				wp_enqueue_style('pixonscss', get_template_directory_uri() . '/includes/pixons/style.css');
				wp_enqueue_style('iconsfontcss', get_template_directory_uri() . '/includes/iconsfont/iconsfont.css');
				wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/includes/css/prettyPhoto.css');
				wp_enqueue_style('howbizpro', get_template_directory_uri() . '/includes/showbizpro/css/showbizpro.css');
				wp_enqueue_style('howbizprosetting', get_template_directory_uri() . '/includes/showbizpro/css/settings.css');
				wp_enqueue_style('fontcss', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext,cyrillic-ext');
				wp_enqueue_style('fontscss', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700&amp;subset=latin,latin-ext');
				
}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_style');
	
	
	// Header Option



if ($th_options['theme_style']=="dark_box") {

	function thalassa_enqueue_header_style() {
	wp_enqueue_style('darkbox', get_template_directory_uri() . '/includes/css/darkboxstyle.css');
	wp_enqueue_style('darkboxres', get_template_directory_uri() . '/includes/css/darkboxresponsive.css');
	wp_enqueue_style('all', get_template_directory_uri() . '/includes/css/all.css');
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_header_style');

}




else if ($th_options['theme_style']=="light_box") {

	function thalassa_enqueue_header_style() {
				
				
				wp_enqueue_style('lightbox', get_template_directory_uri() . '/includes/css/lightboxstyle.css');
				wp_enqueue_style('darkboxres', get_template_directory_uri() . '/includes/css/darkboxresponsive.css');
				wp_enqueue_style('all', get_template_directory_uri() . '/includes/css/all.css');

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_header_style');

}

else if ($th_options['theme_style']=="dark_stretched") {

	function thalassa_enqueue_header_style() {
				
				
				wp_enqueue_style('darkstretched', get_template_directory_uri() . '/includes/css/darkstretchedstyle.css');
				wp_enqueue_style('responsivecss', get_template_directory_uri() . '/includes/css/responsive.css');
				wp_enqueue_style('all', get_template_directory_uri() . '/includes/css/all.css');
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_header_style');

}
else if ($th_options['theme_style']=="light_stretched") {

	function thalassa_enqueue_header_style() {
				
				
				wp_enqueue_style('lightstretched', get_template_directory_uri() . '/includes/css/lightstretchedstyle.css');
				wp_enqueue_style('responsivecss', get_template_directory_uri() . '/includes/css/responsive.css');
				wp_enqueue_style('all', get_template_directory_uri() . '/includes/css/all.css');
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_header_style');

}

if ($th_options['theme_color']=="th_red") {

	function thalassa_enqueue_color_style() {
	wp_enqueue_style('red', get_template_directory_uri() . '/includes/css/red.css');
	
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_color_style');

}
else if ($th_options['theme_color']=="th_green") {

	function thalassa_enqueue_color_style() {
	wp_enqueue_style('green', get_template_directory_uri() . '/includes/css/darkgreen.css');
	
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_color_style');

}
else if ($th_options['theme_color']=="th_lightblue") {

	function thalassa_enqueue_color_style() {
	wp_enqueue_style('lightblue', get_template_directory_uri() . '/includes/css/lightblue.css');
	
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_color_style');

}

else if ($th_options['theme_color']=="th_blue") {

	function thalassa_enqueue_color_style() {
	wp_enqueue_style('blue', get_template_directory_uri() . '/includes/css/blue.css');
	
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_color_style');

}

else if ($th_options['theme_color']=="th_yellow") {

	function thalassa_enqueue_color_style() {
	wp_enqueue_style('yellow', get_template_directory_uri() . '/includes/css/yellow.css');
	
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_color_style');

}

else if ($th_options['theme_color']=="th_orange") {

	function thalassa_enqueue_color_style() {
	wp_enqueue_style('orange', get_template_directory_uri() . '/includes/css/orange.css');
	
	
				

}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_color_style');

}
