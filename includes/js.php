<?php

if( !function_exists ('thalassa_enqueue_scripts') ) :
	function thalassa_enqueue_scripts() {
		
		wp_enqueue_script('jquery-migrate-1.2.1', get_template_directory_uri() . '/includes/js/jquery-migrate-1.2.1.js', array('jquery'), '1.0',true);
		wp_enqueue_script('placeholdermin', get_template_directory_uri() . '/includes/js/jquery.placeholder.min.js', array('jquery'), '1.0',true);
		wp_enqueue_script('jplayermin', get_template_directory_uri() . '/includes/js/jplayer/jquery.jplayer.min.js', array('jquery'), '1.0',true);
		wp_enqueue_script('th_sharrre', get_template_directory_uri() . '/includes/sharre/jquery.sharrre-1.3.4.min.js', array('jquery'), '1.0',true);
		
		wp_enqueue_script('isotope', get_template_directory_uri() . '/includes/js/jquery.isotope.min.js', array('jquery'), '1.0',true);
		
		wp_enqueue_script('custom', get_template_directory_uri() . '/includes/js/script.js', array('jquery'), '1.0',true);
			
			wp_enqueue_script('tweetscroll', get_template_directory_uri() . '/includes/js/jquery.tweetscroll.js', array('jquery'), '1.0',true);
			wp_enqueue_script('showbizpro', get_template_directory_uri() . '/includes/showbizpro/js/jquery.themepunch.showbizpro.min.js', array('jquery'), '1.0',true);
						
			wp_enqueue_script('nivoslider', get_template_directory_uri() . '/includes/js/jquery.nivo.slider.js', array('jquery'), '1.0',true);
			wp_enqueue_script('carouFredSel', get_template_directory_uri() . '/includes/js/jquery.carouFredSel-6.0.0-packed.js', array('jquery'), '1.0',true);
			wp_enqueue_script('portfolio', get_template_directory_uri() . '/includes/js/portfolio.js', array('jquery'), '1.0',true);

			wp_enqueue_script('touchSwipe', get_template_directory_uri() . '/includes/js/jquery.touchSwipe-1.2.5.js', array('jquery'), '1.0',true);
			wp_enqueue_script('socialstream', get_template_directory_uri() . '/includes/js/socialstream.jquery.js', array('jquery'), '1.0',true);
			wp_enqueue_script('modernizr', get_template_directory_uri() . '/includes/js/modernizr.custom.js', array('jquery'), '1.0',true);
			wp_enqueue_script('prettyPhoto', get_template_directory_uri() . '/includes/js/jquery.prettyPhoto.js', array('jquery'), '1.0',true);
			wp_enqueue_script('countTo', get_template_directory_uri() . '/includes/js/jquery.countTo.js', array('jquery'), '1.0',true);
			wp_enqueue_script('dlmenu', get_template_directory_uri() . '/includes/js/jquery.dlmenu.js', array('jquery'), '1.0',true);
			wp_enqueue_script('includes', get_template_directory_uri() . '/includes/js/include.js', array('jquery'), '1.0',true);
			



}
	add_action('wp_enqueue_scripts', 'thalassa_enqueue_scripts');
endif;
