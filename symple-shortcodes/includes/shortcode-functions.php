<?php
/**
*
*
*
 * Allow shortcodes in widgets
 * @since v1.0
 */
add_filter('widget_text', 'do_shortcode');



/*
 * Fix Shortcodes
 * @since v1.0
 */
if( !function_exists('symple_fix_shortcodes') ) {
	function symple_fix_shortcodes($content){   
		$array = array (
			'<p>['		=> '[', 
			']</p>'		=> ']', 
			']<br />'	=> ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'symple_fix_shortcodes');
}


/*
 * Clear Floats
 * @since v1.0
 */
if( !function_exists('symple_clear_floats_shortcode') ) {
	function symple_clear_floats_shortcode() {
	   return '<div class="symple-clear-floats"></div>';
	}
	add_shortcode( 'symple_clear_floats', 'symple_clear_floats_shortcode' );
}


/*
 * Skillbars
 * @since v1.4
 */
if( !function_exists('symple_callout_shortcode') ) {
	function symple_callout_shortcode( $atts, $content = NULL  ) {		
		extract( shortcode_atts( array(
			'caption'				=> '',
			'button_text'			=> '',
			'button_color'			=> 'blue',
			'button_url'			=> 'http://www.wpexplorer.com',
			'button_rel'			=> 'nofollow',
			'button_target'			=> 'blank',
			'button_border_radius'	=> '',
			'class'					=> '',
			'icon_left'				=> '',
			'icon_right'			=> ''
		), $atts ) );
		
		$border_radius_style = ( $button_border_radius ) ? 'style="border-radius:'. $button_border_radius .'"' : NULL;
		$output = '<div class="symple-callout symple-clearfix '. $class .'">';
		$output .= '<div class="symple-callout-caption">';
			if ( $icon_left ) $output .= '<span class="symple-callout-icon-left icon-'. $icon_left .'"></span>';
			$output .= do_shortcode ( $content );
			if ( $icon_right ) $output .= '<span class="symple-callout-icon-right icon-'. $icon_right .'"></span>';
		$output .= '</div>';	
		if ( $button_text !== '' ) {
			$output .= '<div class="symple-callout-button">';
				$output .='<a href="'. $button_url .'" title="'. $button_text .'" target="_'. $button_target .'" class="symple-button '.$button_color .'" '. $border_radius_style .'><span class="symple-button-inner">'. $button_text .'</span></a>';
			$output .='</div>';
		}
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode( 'symple_callout', 'symple_callout_shortcode' );
}


/*
 * Skillbars
 * @since v1.3
 */
if( !function_exists('symple_skillbar_shortcode') ) {
	function symple_skillbar_shortcode( $atts  ) {		
		extract( shortcode_atts( array(
			'title'	=> '',
			'percentage'	=> '100',
			'color'	=> '#6adcfa',
			'class'	=> '',
			'show_percent'	=> 'true'
		), $atts ) );
		
		// Enque scripts
		wp_enqueue_script('symple_skillbar');
		
		// Display the accordion	';
		$output = '<div class="symple-skillbar symple-clearfix '. $class .'" data-percent="'. $percentage .'%">';
			if ( $title !== '' ) $output .= '<div class="symple-skillbar-title" style="background: '. $color .';"><span>'. $title .'</span></div>';
			$output .= '<div class="symple-skillbar-bar" style="background: '. $color .';"></div>';
			if ( $show_percent == 'true' ) {
				$output .= '<div class="symple-skill-bar-percent">'.$percentage.'%</div>';
			}
		$output .= '</div>';
		
		return $output;
	}
	add_shortcode( 'symple_skillbar', 'symple_skillbar_shortcode' );
}


/*
 * Spacing
 * @since v1.0
 */
if( !function_exists('symple_spacing_shortcode') ) {
	function symple_spacing_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'size'	=> '20px',
			'class'	=> '',
		  ),
		  $atts ) );
	 return '<hr class="symple-spacing '. $class .'" style="height: '. $size .'" />';
	}
	add_shortcode( 'symple_spacing', 'symple_spacing_shortcode' );
}


/**
* Social Icons
* @since 1.0
*/
if( !function_exists('symple_social_shortcode') ) {
	function symple_social_shortcode( $atts ){   
		extract( shortcode_atts( array(
			'icon'			=> 'twitter',
			'url'			=> 'http://www.twitter.com/sympleplorer',
			'title'			=> 'Follow Us',
			'target'		=> 'self',
			'rel'			=> '',
			'border_radius'	=> '',
			'class'			=> '',
		), $atts ) );
		$icons_url = plugin_dir_url( __FILE__ ) .'images/social/';
		$icons_url = apply_filters( 'symple_social_icon_url', $icons_url );
		return '<a href="' . $url . '" class="symple-social-icon '. $class .'" target="_'.$target.'" title="'. $title .'" rel="'. $rel .'"
><img src="'. $icons_url . $icon .'.png" alt="'. $icon .'" /></a>';
	}
	add_shortcode('symple_social', 'symple_social_shortcode');
}

/**
* Highlights
* @since 1.0
*/
if ( !function_exists( 'symple_highlight_shortcode' ) ) {
	function symple_highlight_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color'	=> 'yellow',
			'class'	=> '',
		  ),
		  $atts ) );
		  return '<span class="symple-highlight symple-highlight-'. $color .' '. $class .'">' . do_shortcode( $content ) . '</span>';
	
	}
	add_shortcode('symple_highlight', 'symple_highlight_shortcode');
}


/*
 * Buttons
 * @since v1.0
 */
if( !function_exists('symple_button_shortcode') ) {
	function symple_button_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color'			=> 'blue',
			'url'			=> 'http://www.sympleplorer.com',
			'title'			=> 'Visit Site',
			'target'		=> 'self',
			'rel'			=> '',
			'border_radius'	=> '',
			'class'			=> '',
			'icon_left'		=> '',
			'icon_right'	=> ''
		), $atts ) );
		
		
		$border_radius_style = ( $border_radius ) ? 'style="border-radius:'. $border_radius .'"' : NULL;		
		$rel = ( $rel ) ? 'rel="'.$rel.'"' : NULL;
		
		$button = NULL;
		$button .= '<a href="' . $url . '" class="symple-button ' . $color . ' '. $class .'" target="_'.$target.'" title="'. $title .'" '. $border_radius_style .' '. $rel .'>';
			$button .= '<span class="symple-button-inner" '.$border_radius_style.'>';
				if ( $icon_left ) $button .= '<span class="symple-button-icon-left icon-'. $icon_left .'"></span>';
				$button .= $content;
				if ( $icon_right ) $button .= '<span class="symple-button-icon-right icon-'. $icon_right .'"></span>';
			$button .= '</span>';			
		$button .= '</a>';
		return $button;
	}
	add_shortcode('symple_button', 'symple_button_shortcode');
}



/*
 * Boxes
 * @since v1.0
 *
 */
if( !function_exists('symple_box_shortcode') ) { 
	function symple_box_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'color'			=> 'gray',
			'float'			=> 'center',
			'text_align'	=> 'left',
			'width'			=> '100%',
			'margin_top'	=> '',
			'margin_bottom'	=> '',
			'class'			=> '',
		  ), $atts ) );
		  
			$style_attr = '';
			if( $margin_bottom ) {
				$style_attr .= 'margin-bottom: '. $margin_bottom .';';
			}
			if ( $margin_top ) {
				$style_attr .= 'margin-top: '. $margin_top .';';
			}
		  
		  $alert_content = '';
		  $alert_content .= '<div class="symple-box ' . $color . ' '.$float.' '. $class .'" style="text-align:'. $text_align .'; width:'. $width .';'. $style_attr .'">';
		  $alert_content .= ' '. do_shortcode($content) .'</div>';
		  return $alert_content;
	}
	add_shortcode('symple_box', 'symple_box_shortcode');
}



/*
 * Testimonial
 * @since v1.0
 *
 */
if( !function_exists('symple_testimonial_shortcode') ) { 
	function symple_testimonial_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'by'	=> '',
			'class'	=> '',
		  ), $atts ) );
		$testimonial_content = '';
		$testimonial_content .= '<div class="symple-testimonial '. $class .'"><div class="symple-testimonial-content">';
		$testimonial_content .= $content;
		$testimonial_content .= '</div><div class="symple-testimonial-author">';
		$testimonial_content .= $by .'</div></div>';	
		return $testimonial_content;
	}
	add_shortcode( 'symple_testimonial', 'symple_testimonial_shortcode' );
}



/*
 * Columns
 * @since v1.0
 *
 */
if( !function_exists('symple_column_shortcode') ) {
	function symple_column_shortcode( $atts, $content = null ){
		extract( shortcode_atts( array(
			'size'		=> 'one-third',
			'position'	=>'first',
			'class'		=> '',
		  ), $atts ) );
		  return '<div class="symple-column symple-' . $size . ' symple-column-'.$position.' '. $class .'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('symple_column', 'symple_column_shortcode');
}



/*
 * Toggle
 * @since v1.0
 */
if( !function_exists('symple_toggle_shortcode') ) {
	function symple_toggle_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title'	=> 'Toggle Title',
			'class'	=> '',
		), $atts ) );
		 
		// Enque scripts
		wp_enqueue_script('symple_toggle');
		
		// Display the Toggle
		return '<div class="symple-toggle '. $class .'"><h3 class="symple-toggle-trigger">'. $title .'</h3><div class="symple-toggle-container">' . do_shortcode($content) . '</div></div>';
	}
	add_shortcode('symple_toggle', 'symple_toggle_shortcode');
}


/*
 * Accordion
 * @since v1.0
 *
 */

// Main
if( !function_exists('symple_accordion_main_shortcode') ) {
	function symple_accordion_main_shortcode( $atts, $content = null  ) {
		
		extract( shortcode_atts( array(
			'class'	=> ''
		), $atts ) );
		
		// Enque scripts
		wp_enqueue_script('jquery-ui-accordion');
		wp_enqueue_script('symple_accordion');
		
		// Display the accordion	
		return '<div class="symple-accordion '. $class .'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'symple_accordion', 'symple_accordion_main_shortcode' );
}


// Section
if( !function_exists('symple_accordion_section_shortcode') ) {
	function symple_accordion_section_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'title'	=> 'Title',
			'class'	=> '',
		), $atts ) );
		  
	   return '<h3 class="symple-accordion-trigger '. $class .'"><a href="#">'. $title .'</a></h3><div>' . do_shortcode($content) . '</div>';
	}
	
	add_shortcode( 'symple_accordion_section', 'symple_accordion_section_shortcode' );
}


/*
 * Tabs
 * @since v1.0
 *
 */
if (!function_exists('symple_tabgroup_shortcode')) {
	function symple_tabgroup_shortcode( $atts, $content = null ) {
		
		//Enque scripts
		wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script('symple_tabs');
		
		// Display Tabs
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		$output = '';
		if( count($tab_titles) ){
		    $output .= '<div id="symple-tab-'. rand(1, 100) .'" class="symple-tabs">';
			$output .= '<ul class="ui-tabs-nav symple-clearfix">';
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#symple-tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    $output .= '</ul>';
		    $output .= do_shortcode( $content );
		    $output .= '</div>';
		} else {
			$output .= do_shortcode( $content );
		}
		return $output;
	}
	add_shortcode( 'symple_tabgroup', 'symple_tabgroup_shortcode' );
}
if (!function_exists('symple_tab_shortcode')) {
	function symple_tab_shortcode( $atts, $content = null ) {
		$defaults = array(
			'title'	=> 'Tab',
			'class'	=> ''
		);
		extract( shortcode_atts( $defaults, $atts ) );
		return '<div id="symple-tab-'. sanitize_title( $title ) .'" class="tab-content '. $class .'">'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'symple_tab', 'symple_tab_shortcode' );
}




/*
 * Pricing Table
 * @since v1.0
 *
 */
 
/*main*/
if( !function_exists('symple_pricing_table_shortcode') ) {
	function symple_pricing_table_shortcode( $atts, $content = null  ) {
		extract( shortcode_atts( array(
			'class'	=> ''
		), $atts ) );
		return '<div class="symple-pricing-table '. $class .'">' . do_shortcode($content) . '</div><div class="symple-clear-floats"></div>';
	}
	add_shortcode( 'symple_pricing_table', 'symple_pricing_table_shortcode' );
}



/************************
 *
 * Version 1.1 Additions
 *
*************************/






// Thalassa shortcode Start here

if(! function_exists('section_shortcode')){
	function section_shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<section class="page-content">
				'.do_shortcode($content).'
			</section>
		';
		
	}
	add_shortcode('Full_width_container', 'section_shortcode');
	
}

if(! function_exists('section_color__shortcode')){
	function section_color__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<section class="page-content colored">
				'.do_shortcode($content).'
			</section>
		';
		
	}
	add_shortcode('Full_width_color_container', 'section_color__shortcode');
	
}

if(! function_exists('container__shortcode')){
	function container__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="container">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('container', 'container__shortcode');
	
}

if(! function_exists('row__shortcode')){
	function row__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="row">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('row', 'row__shortcode');
	
}

if(! function_exists('span12__shortcode')){
	function span12__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_12">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span12', 'span12__shortcode');
	
}

if(! function_exists('span11__shortcode')){
	function span11__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_11">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span11', 'span11__shortcode');
	
}

if(! function_exists('span10__shortcode')){
	function span10__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_10">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span10', 'span10__shortcode');
	
}

if(! function_exists('span9__shortcode')){
	function span9__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_9">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span9', 'span9__shortcode');
	
}

if(! function_exists('span8__shortcode')){
	function span8__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_8">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span8', 'span8__shortcode');
	
}

if(! function_exists('span7__shortcode')){
	function span7__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_7">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span7', 'span7__shortcode');
	
}

if(! function_exists('span6__shortcode')){
	function span6__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_6">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span6', 'span6__shortcode');
	
}

if(! function_exists('span5__shortcode')){
	function span5__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_5">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span5', 'span5__shortcode');
	
}
if(! function_exists('span4__shortcode')){
	function span4__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_4">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span4', 'span4__shortcode');
	
}

if(! function_exists('span3__shortcode')){
	function span3__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_3">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span3', 'span3__shortcode');
	
}

if(! function_exists('span2__shortcode')){
	function span2__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_2">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span2', 'span2__shortcode');
	
}
if(! function_exists('span1__shortcode')){
	function span1__shortcode ($atts, $content= null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=> '',
		
		),$atts));
		
		return'
			<div class="grid_1">
				'.do_shortcode($content).'
			</div>
		';
		
	}
	add_shortcode('span1', 'span1__shortcode');
	
}


//******//
/*feature with icon*/
//******//

if(! function_exists('feature_shortcode')){
	function feature_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>' FEATURE',
			'icon_style'=> '',
			'collume'=> '',
			'post_par_page'=> ''
			
			), $atts) );
		$html='';
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'feature', 'posts_per_page'=> $post_par_page) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .= ' <article class="'.$collume.'">';
		$html .= ' <section class="service-box '.$icon_style.'">';
		$html .= '<div class="icon ';
		$html .= get_post_meta($post->ID,'pyre_icon_name',true);
		$html .= ' "></div>';
 		$html .= '<div class="content">';
 		$html .= '<a href="';
 		$html .= get_the_permalink();
		$html .= '">';
		
 		$html .= '<h3>';
 		$html .= get_the_title();
 		$html .= '</h3>';
 		$html .= '</a>';
		$html .= '<span>';
		$feature_category = wp_get_post_terms($post->ID,'feature_category');
		foreach ($feature_category as $item)
    	$html .= $item->name;
		$html .= '</span>';
 		$html .= '</div>';
		$html .= '<div class="description">';
		$html .= '<p>';
		$html .= substr(strip_tags($post->post_content), 0, 150);
		$html .= '</p>';
		$html .= '<a class="read-more" href="';
		$html .= get_the_permalink();
		$html .= '">read more...</a>';
		$html .= '</div>';
 		$html .= '</section>';
 		$html .= '</article>';
		endwhile;
 		



				
		return $html;
	}
	add_shortcode('feature', 'feature_shortcode');
}

//******//
/*feature with img*/
//******//

if(! function_exists('feature_shortcode2')){
	function feature_shortcode2($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>' FEATURE',
			'collume'=> '',
			'post_par_page'=> ''
			
			), $atts) );
		$html='';
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'feature', 'posts_per_page'=> $post_par_page) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .= ' <article class="'.$collume.'">';
		$html .= '<article class="image-box">';
		$html .= '<div class="img-container">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '"/>';
		endif;
		$html .= '</div>';
		$html .= '<h4>';
		$html .= get_the_title();
		$html .= '</h4>';
		$html .= '<p>';
		$html .= substr(strip_tags($post->post_content), 0, 150);
		$html .= '</p>';
		$html .= '<a class="read-more" href="';
		$html .= get_the_permalink();
		$html .= '">read more...</a>';
 		$html .= '</article>';
 		$html .= '</article>';
		endwhile;
 		



				
		return $html;
	}
	add_shortcode('feature_with_img', 'feature_shortcode2');
}

/*****/
if(! function_exists('blockquote_shortcode')){
	function blockquote_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'quote_style'=>'',
			
			
			), $atts) );

				
		return '
		
		
		<blockquote class="style-2">
		'.do_shortcode($content).'
		</blockquote>

				';
	}
	add_shortcode('thalassa_blockquote', 'blockquote_shortcode');
}
/*****/


if(! function_exists('portfolio_details_shortcode')){
	function portfolio_details_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'po_title'=>'Our Portfolio',
			'sub_title'=>'',
			
			), $atts) );

				
		return '
		
		
		
		
		<div class="heading-centered">
		
		<h3>'.$po_title.'</h3>
		<p>'.$content.'</p>
		</div>
		
		
		
		
		
				';
	}
	add_shortcode('portfolio_details', 'portfolio_details_shortcode');
}


if(! function_exists('portfolio_shortcode')){
	function portfolio_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'post_per_page'=>''
			
			
			
			), $atts) );
		$html='';
		
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page'=> '4') );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .= '<article class="grid_3 isotope-item">';
		$html .= '<figure class="portfolio-style-2">';
		$html .= '<div class="portfolio-img">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .= '<a href="#">';
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '"/>';
		$html .= '</a>';
		$html .= '<div class="portfolio-img-hover">';
		$html .= '<div class="mask"></div>';
		$html .= '<ul>';
		$html .= '<li class="portfolio-zoom">';
		$html .= '<a href="';
		$html .= $image[0];
		$html .= '" data-gal="prettyPhoto[pp_gallery]" class="icon-search">';
		$html .= '</a>';
		$html .= '</li>';
		endif;
		$html .= '<li class="portfolio-single">';
		$html .= '<a class="icon-link" href="';
		$html .= get_the_permalink();
		$html .= '" ></a>';
		$html .= '</li>';
		$html .= '</ul>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '<figcaption>';
		$html .= '<a class="title" href="';
		$html .= get_the_permalink();
		$html .='">';
		$html .= get_the_title();
		$html .='</a>';
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .= '<span class="subtitle">';
		foreach ($portfolio_category as $item)
    	$html .= $item->name;
		$html .= '</span>';
		$html .= '</figcaption>';
		$html .= '</figure>';
		$html .= '</article>';
		endwhile;
		
		



				
		return $html;
	}
	add_shortcode('our_portfolio', 'portfolio_shortcode');
}
/*
 * Thalassa Portfolio Filter 3 columm
 * @since v1.0
 */
 if(! function_exists('portfolio_filter_shortcode')){
	function portfolio_filter_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			
			
			
			
			), $atts) );
		$html='';
		
		
		$html .= '<div class="row portfolio-filters">';
		$html .= '<section class="grid_12">';
		if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		$portfolio_category = get_terms('portfolio_category');
		 if($portfolio_category):
		$html .= '<ul id="filters">';
		$html .= '<li class="active"><a href="#" data-filter="*">all</a></li>';
		$html .= '</li>';
		foreach($portfolio_category as $portfolio_cat):
		$html .= '<li><a href="#" data-filter=".';
		$html .= $portfolio_cat->slug;
		$html .= '">';
		$html .= $portfolio_cat->name;
		$html .= '</a>';
		$html .= '</li>';
		endforeach;
		$html .= '</ul>';
		endif; 
		endif;
		$html .= '</section>';
		$html .= '</div>';
		
		



				
		return $html;
	}
	add_shortcode('portfolio_filter', 'portfolio_filter_shortcode');
}
/*
 * Thalassa Portfolio Filter 3 columm holder
 * @since v1.0
 */
 if(! function_exists('portfolio_filter_holder_shortcode')){
	function portfolio_filter_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'style'=>''
			
			
			
			), $atts) );
		$html='';
		
		global $post;
		$html .='<div class="row portfolioitems-holder">';
		$html .=' <ul id="portfolioitems" class="isotope">';
		query_posts(array('post_type' => 'portfolio','showposts' => -1));
		while ( have_posts() ) : the_post();
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .='<li class="grid_4 isotope-item ';
		foreach ($portfolio_category as $item)
		$html .= $item->slug . ' ';
		$html .='">';
		$html .='<figure class="'.$style.'">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .='<div class="portfolio-img">';
		$html .='<a href="';
		$html .= get_the_permalink();
		$html .='">';
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '"/>';
		$html .='</a>';
		$html .='<div class="portfolio-img-hover">';
		$html .='<div class="mask"></div>';
		$html .='<ul>';
		$html .='<li class="portfolio-zoom">';
		$html .='<a href="';
		$html .= $image[0];
		$html .='" data-gal="prettyPhoto[pp_gallery]" class="icon-search">';
		$html .='</a>';
		$html .='</li>';
		$html .='<li class="portfolio-single">';
		$html .='<a href="';
		$html .= get_the_permalink();
		$html .='" class="icon-link">';
		$html .='</a>';
		$html .='</li>';
		$html .='</ul>';
		$html .='</div>';
		$html .='</div>';
		$html .='<figcaption>';
		$html .='<a href="';
		$html .= get_the_permalink();
		$html .='" class="title">';
		$html .= get_the_title();
		$html .='</a>';
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .= '<span class="subtitle">';
		foreach ($portfolio_category as $item)
    	$html .= $item->name;
		$html .= '</span>';
		$html .='</figcaption>';
		$html .='</figure>';
		$html .=' </li>';
		endif;
		endwhile;
		wp_reset_query();
		$html .=' </ul>';
		$html .='</div>';
		
		
		
		
		



				
		return $html;
	}
	add_shortcode('portfolio_filter_3col', 'portfolio_filter_holder_shortcode');
}
/*
 * Thalassa Portfolio Filter 4 columm holder
 * @since v1.0
 */
 if(! function_exists('portfolio_filter4_holder_shortcode')){
	function portfolio_filter4_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'style'=>''
			
			
			
			), $atts) );
		$html='';
		
		global $post;
		$html .='<div class="row portfolioitems-holder">';
		$html .=' <ul id="portfolioitems" class="isotope">';
		query_posts(array('post_type' => 'portfolio','showposts' => -1));
		while ( have_posts() ) : the_post();
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .='<li class="grid_3 isotope-item ';
		foreach ($portfolio_category as $item)
		$html .= $item->slug . ' ';
		$html .='">';
		$html .='<figure class="'.$style.'">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .='<div class="portfolio-img">';
		$html .='<a href="';
		$html .= get_the_permalink();
		$html .='">';
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '"/>';
		$html .='</a>';
		$html .='<div class="portfolio-img-hover">';
		$html .='<div class="mask"></div>';
		$html .='<ul>';
		$html .='<li class="portfolio-zoom">';
		$html .='<a href="';
		$html .= $image[0];
		$html .='" data-gal="prettyPhoto[pp_gallery]" class="icon-search">';
		$html .='</a>';
		$html .='</li>';
		$html .='<li class="portfolio-single">';
		$html .='<a href="';
		$html .= get_the_permalink();
		$html .='" class="icon-link">';
		$html .='</a>';
		$html .='</li>';
		$html .='</ul>';
		$html .='</div>';
		$html .='</div>';
		$html .='<figcaption>';
		$html .='<a href="';
		$html .= get_the_permalink();
		$html .='" class="title">';
		$html .= get_the_title();
		$html .='</a>';
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .= '<span class="subtitle">';
		foreach ($portfolio_category as $item)
    	$html .= $item->name;
		$html .= '</span>';
		$html .='</figcaption>';
		$html .='</figure>';
		$html .=' </li>';
		endif;
		endwhile;
		wp_reset_query();
		$html .=' </ul>';
		$html .='</div>';
		
				
		return $html;
	}
	add_shortcode('portfolio_filter_4col', 'portfolio_filter4_holder_shortcode');
}
/*****portfolio carousel slider****/

if(! function_exists('thalassa_port_carousel_shortcode')){
	function thalassa_port_carousel_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>'',
			'class'=>'',
			'portfolio_title'=>''
			
			
			), $atts) );


				
		return '
		<article class="portfolio-carousel">
                <div class="carousel-title">
                   <h3>'.$portfolio_title.'</h3>

                  <div class="carousel-nav-container">
                 <ul class="carousel-nav">
                  <li>
                  <a class="c_prev" href="#"></a> 
                  </li>
                  <li>
                  <a class="c_next" href="#"></a>
                  </li>
                  </ul>
                 </div><!-- .carousel-nav-container -->
                 </div>
				 <ul id="portfolio-carousel" class="carousel-li">
					'.do_shortcode($content).'
				 </ul>
		</article>
		
				';
	}
	add_shortcode('thalassa_portfolio_carousel', 'thalassa_port_carousel_shortcode');
}
if(! function_exists('portfolio_carousel')){
	function portfolio_carousel($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'style'=>'',
			
			
			
			), $atts) );
		$html='';
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page'=> '-1') );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .= '<li class="isotope-item carousel-four-cols">';
		$html .= '<figure class="'.$style.'">';
		$html .= '<div class="portfolio-img">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .= '<a href="#">';
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '" width="270px;"/>';
		$html .= '</a>';
		$html .= '<div class="portfolio-img-hover">';
		$html .= '<div class="mask"></div>';
		$html .= '<ul>';
		$html .= '<li class="portfolio-zoom">';
		$html .= '<a href="';
		$html .= $image[0];
		$html .= '" data-gal="prettyPhoto[pp_gallery]" class="icon-search">';
		$html .= '</a>';
		$html .= '</li>';
		endif;
		$html .= '<li class="portfolio-single">';
		$html .= '<a class="icon-link" href="';
		$html .= get_the_permalink();
		$html .= '" ></a>';
		$html .= '</li>';
		$html .= '</ul>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '<figcaption>';
		$html .= '<a class="title" href="';
		$html .= get_the_permalink();
		$html .='">';
		$html .= get_the_title();
		$html .='</a>';
		$portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$html .= '<span class="subtitle">';
		foreach ($portfolio_category as $item)
    	$html .= $item->name;
		$html .= '</span>';
		$html .= '</figcaption>';
		$html .= '</figure>';
		$html .= '</li>';
		endwhile;
		



				
		return $html;
	}
	add_shortcode('thalassa_port_carousel', 'portfolio_carousel');
}

/*****news****/

if(! function_exists('thalassa_news_holder_shortcode')){
	function thalassa_news_holder_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>'',
			'class'=>'',
			'news_title'=>''
			
			
			), $atts) );


				
		return '
		<h3>'.$news_title.'</h3>
		<section class="latest-posts-3">
            <ul>
			'.do_shortcode($content).'
            </ul>
		</section>	
				 
					
		
		
				';
	}
	add_shortcode('thalassa_news_holder', 'thalassa_news_holder_shortcode');
}

/****news*****/
if(! function_exists('news_shortcode')){
	function news_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'style'=>'',
			'post_type'=>'',
			'post_par_page'=>'',
			
			
			), $atts) );
		$html='';
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => $post_type, 'posts_per_page'=> $post_par_page) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .= '<li class="blog-post-item">';
		$html .= '<div class="blog-post-item-img">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '"/>';
		endif;
		$html .= '</div>';
		$html .= '<div class="blog-post-item-desc">';
		$html .= '<a href="';
		$html .= get_the_permalink();
		$html .= '">';
		$html .= '<h5>';
		$html .= get_the_title();
		$html .= '</h5>';
		$html .= '</a>';
		$html .= '<span class="date">';
		$html .=  get_the_time('F j, Y');
		$html .= '</span>';
		$html .= '<p>';
		$html .= substr(strip_tags($post->post_content), 0, 150);
		$html .= '</p>';
		$html .= '<a class="read-more" href="';
		$html .= get_the_permalink();
		$html .= '">read more...</a>';
		$html .= '</div>';
		$html .= '</li>';
		endwhile;
		



				
		return $html;
	}
	add_shortcode('thalassa_news', 'news_shortcode');
}

/*
 * According
 * holder
 */

if(! function_exists('accordion_shortcode')){
	function accordion_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'accordion_title'=>''
			
			
			), $atts) );

				
		return '
		<h3>'.$accordion_title.'</h3>
		<section class="accordion">
		'.do_shortcode($content).'
		</section>
		
		
		
		
				';
	}
	add_shortcode('thalassa_accordion', 'accordion_shortcode');
}

/*
 * According
 * 
 */
if(! function_exists('accordion_content_shortcode')){
	function accordion_content_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'title'=>'',
			'active'=>''
			
			
			), $atts) );
		$html='';
		$html .='<div class="title '.$active.'">';
        $html .='<a href="#">';
        $html .='<span class="icon icon-star-empty"></span>';
		$html .=''.$title.'</a>';
        $html .='</div>';
		$html .='<div class="content">';
        $html .='<p>'.$content.'</p>';
        $html .='</div>';
			
		return $html;
	}
	add_shortcode('accordion_content', 'accordion_content_shortcode');
}

/*
 * According
 * holder
 */

if(! function_exists('faq_accordion_shortcode')){
	function faq_accordion_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>''
			
			
			), $atts) );

				
		return '
		
		<section class="accordion faq">
		'.do_shortcode($content).'
		</section>
		
		
		
		
				';
	}
	add_shortcode('thalassa_faq_accordion', 'faq_accordion_shortcode');
}


/*
 * According Faq content
 * 
 */
if(! function_exists('faq_accordion_content_shortcode')){
	function faq_accordion_content_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'title'=>'',
			'post_par_page'=>''
			
			
			), $atts) );
		$html='';
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'faq', 'posts_per_page'=> $post_par_page) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		
		$html .='<div class="title">';
        $html .='<a href="#">';
		$html .=get_the_title();
        $html .='</a>';
        $html .='</div>';
		$html .='<div class="content">';
        $html .='<p></p>';
        $html .=get_the_content();
        $html .='</p>';
        $html .='</div>';
		endwhile;	
		return $html;
	}
	add_shortcode('faq_accordion_content', 'faq_accordion_content_shortcode');
}

if(! function_exists('image_box_shortcode')){
	function image_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'image_link'=>''
			
			
			), $atts) );

				
		return '
		<div class="th_image">
			<img src="'.$image_link.'" alt="img"/>
		</div>
		
		
		
		
		
				';
	}
	add_shortcode('thalassa_image', 'image_box_shortcode');
}

if(! function_exists('bar_chart_shortcode')){
	function bar_chart_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>'',
			'class'=>'',
			'bar_chart_title'=>''
			
			
			), $atts) );


				
		return '
		<h3>'.$bar_chart_title.'</h3>
		<article class="skills-bar">
            <ul class="skills">
                '.do_shortcode($content).'
			</ul>
		</artical>
		
		
		
		
		
				';
	}
	add_shortcode('thalassa_bar_chart', 'bar_chart_shortcode');
}

if(! function_exists('skill_shortcode')){
	function skill_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'title'=>'',
			'percentage'=>''
			
			
			
			), $atts) );
			
			$html='';
			$html .='<li>';
			$html .='<span class="expand percentage-'.$percentage.'"></span>';
			$html .='<em>'.$title.'</em>';
			$html .='</li>';

			return $html;
			
	}
	add_shortcode('thalassa_skill', 'skill_shortcode');
}

if(! function_exists('thalassa_team_shortcode')){
	function thalassa_team_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>'',
			'class'=>'',
			'team_title'=>''
			
			
			), $atts) );


				
		return '
		<section class="team-carousel">
            <div class="carousel-title">
                <h3>'.$team_title.'</h3>
                <div class="carousel-nav-container">
                        <ul class="carousel-nav">
                           <li>
                              <a class="c_prev" href="#"></a> 
                           </li>
                           <li>
                             <a class="c_next" href="#"></a>
                           </li>
                        </ul>
                </div>
            </div>
				<ul id="team-carousel" class="carousel-li">
					'.do_shortcode($content).'
				</ul>
		</section>
		
		
		
		
		
				';
	}
	add_shortcode('thalassa_team', 'thalassa_team_shortcode');
}
if(! function_exists('stuff_shortcode')){
	function stuff_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			
			
			
			
			), $atts) );
		$html='';
		
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'stuff', 'posts_per_page'=> '-1') );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .='<li class="team">';
		$html .='<div class="team-img-container">';
		$html .= get_the_post_thumbnail();
		$html .='</div>';
		$html .= '<a href="';
		$html .= get_the_permalink();
		$html .= '">';
 		$html .= '<h6>';
 		$html .= get_the_title();
 		$html .= '</h6>';
 		$html .= '</a>';
		
		$html .='<span class="position">';
		$html .= get_post_meta($post->ID,'pyre_stuff_sub_title',true);
    	$html .= '</span>';
		$html .= '<p>';
		$html .= substr(strip_tags($post->post_content), 0, 150);
		$html .= '</p>';
		$html .= '<ul class="team-social-links">';
		if(get_post_meta($post->ID,'pyre_Twitter_link',true) != '') :  
		$html .= '<li>';
		$html .= '<a href="';
		$html .= get_post_meta($post->ID,'pyre_Twitter_link',true);
		$html .= '" class="pixons-twitter-1"/></a>';
		$html .= '</li>';
		endif;
		if(get_post_meta($post->ID,'pyre_googleplus_link',true) != '') :
		$html .= '<li>';
		$html .= '<a href="';
		$html .= get_post_meta($post->ID,'pyre_googleplus_link',true);
		$html .= '" class="pixons-google_plus"/></a>';
		$html .= '</li>';
		endif;
		if(get_post_meta($post->ID,'pyre_linkedin_link',true) != '') :
		$html .= '<li>';
		$html .= '<a href="';
		$html .= get_post_meta($post->ID,'pyre_linkedin_link',true);
		$html .= '" class="pixons-linkedin"/></a>';
		$html .= '</li>';
		endif;
		if(get_post_meta($post->ID,'pyre_facebook_link',true) != '') :
		$html .= '<li>';
		$html .= '<a href="';
		$html .= get_post_meta($post->ID,'pyre_facebook_link',true);
		$html .= '" class="pixons-facebook-1"/></a>';
		$html .= '</li>';
		endif;
		if(get_post_meta($post->ID,'pyre_xing_link',true) != '') :
		$html .= '<li>';
		$html .= '<a href="';
		$html .= get_post_meta($post->ID,'pyre_xing_link',true);
		$html .= '" class="pixons-xing"/></a>';
		$html .= '</li>';
		endif;
		if(get_post_meta($post->ID,'pyre_skype_link',true) != '') :
		$html .= '<li>';
		$html .= '<a href="';
		$html .= get_post_meta($post->ID,'pyre_skype_link',true);
		$html .= '" class="pixons-skype"/></a>';
		$html .= '</li>';
		endif;
		$html .= '</ul>';
		$html .='</li>';
		endwhile;
		
		



				
		return $html;
	}
	add_shortcode('thalassa_stuff', 'stuff_shortcode');
}

if(! function_exists('thalassa_counter_shortcode')){
	function thalassa_counter_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'counter_title'=>'',
			'description'=>''
			
			
			
			), $atts) );
			
			

			return  '
				<h3>'.$counter_title.'</h3>
				<p>'.$content.'</p>
				
			';
			
	}
	add_shortcode('thalassa_counter', 'thalassa_counter_shortcode');
}

/****Nivo slider***/
if(! function_exists('thalassa_slider_shortcode')){
	function thalassa_slider_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'counter_title'=>'',
			'description'=>''
			
			
			
			), $atts) );
			
			

			return  '
				<div class="slider-wrapper">
                            
                   <section id="slider" class="nivoSlider">
                       '.do_shortcode($content).'
                    </section><!-- #slider .nivoSlider .image-slider end -->
                </div>
				
			';
			
	}
	add_shortcode('thalassa_nivo_slider', 'thalassa_slider_shortcode');
}

/****Nivo slider img***/
if(! function_exists('thalassa_slider_img_shortcode')){
	function thalassa_slider_img_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'slider_img'=>'',
			
			
			
			), $atts) );
			
			

			return  '
				 <img src="'.$slider_img.'" alt="slider image"/>
				
			';
			
	}
	add_shortcode('thalassa_nivo_slider_img', 'thalassa_slider_img_shortcode');
}


if(! function_exists('thalassa_counter_box_shortcode')){
	function thalassa_counter_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>'',
			'class'=>''
			
			
			
			), $atts) );
			
			

			return  '
				
				<ul class="numbers-counter">
					'.do_shortcode($content).'
				</ul>
			';
			
	}
	add_shortcode('thalassa_counter_box', 'thalassa_counter_box_shortcode');
}

if(! function_exists('thalassa_number_shortcode')){
	function thalassa_number_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'thalassa_number'=>'',
			'counter_item_title'=>''
			
			
			
			), $atts) );
			$html='';
			$html .='<li>';
			$html .='<span class="timer numbers" data-to="'.$thalassa_number.'" data-speed="2000">';
			$html .='</span>';
			$html .='<p>'.$counter_item_title.'</p>';
			$html .='</li>';
			

			return $html;
			
	}
	add_shortcode('thalassa_counter_number', 'thalassa_number_shortcode');
}

if(! function_exists('thalassa_testimonial_shortcode')){
	function thalassa_testimonial_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'testimonial_title'=>''
			
			
			
			
			), $atts) );
			
			

			return  '
				<h3>'.$testimonial_title.'</h3>
				<section class="testimonial-carousel style-1">
				<ul id="testimon-1" class="carousel-li">
					'.do_shortcode($content).'
				</ul>
				</section>
			';
			
	}
	add_shortcode('thalassa_testimonial', 'thalassa_testimonial_shortcode');
}
if(! function_exists('testimonial_item_shortcode')){
	function testimonial_item_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			
			
			
			
			), $atts) );
		$html='';
		
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page'=> '10') );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .='<li>';
		$html .= '<p class="content">';
		$html .= get_the_content();
		$html .= '</p>';
		$html .= '<div class="author">';
		$html .= get_the_post_thumbnail();
		$html .= '<p class="name">';
		$html .= get_the_title();
		$html .= '</p>';
		$html .= get_post_meta($post->ID, 'pyre_client-designation', true);		
		$html .= '<span class="company">';
		
		$html .= '</span>';
		$html .= '</div>';
		$html .='</li>';
		
		endwhile;
		
		



				
		return $html;
	}
	add_shortcode('testimonial_item', 'testimonial_item_shortcode');
}

if(! function_exists('thalassa_client_shortcode')){
	function thalassa_client_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'our_client_title'=>'',
			
			
			
			
			
			), $atts) );
			
			

			return  '
				<div class="heading-centered">
                <h3>'.$our_client_title.'</h3>
                <p>'.$content.'</p>
                </div>
				
				
			';
			
	}
	add_shortcode('thalassa_our_client', 'thalassa_client_shortcode');
}
if(! function_exists('thalassa_client_box_shortcode')){
	function thalassa_client_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'our_client_title'=>'',
			
			
			
			
			
			), $atts) );
			
			

			return  '
				<div id="centered-list">
				<ul class="clients-list">
				'.do_shortcode($content).'
				</ul>
				</div>
			';
			
	}
	add_shortcode('thalassa_our_client_box', 'thalassa_client_box_shortcode');
}

if(! function_exists('client_item_shortcode')){
	function client_item_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'image_link'=>'',
			'link'=>''
			
			
			
			
			
			), $atts) );
		$html='';
		
		$html .='<li>';
		$html .='<a href="'.$link.'">';
		$html .='<img src="'.$image_link.'" alt="client_img"/>';
		$html .='</a>';
		$html .='</li>';
		
				
		return $html;
	}
	add_shortcode('client_item', 'client_item_shortcode');
}
/*
 * blog with image
 * headline
 */
if(! function_exists('thalassa_blog_post_shortcode')){
	function thalassa_blog_post_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'blog_post_title'=>'',
			
			), $atts) );
			
			

			return  '
				<div class="heading-centered">
                <h3>'.$blog_post_title.'</h3>
                <p>'.$content.'</p>
                </div>
				
			';
			
	}
	add_shortcode('thalassa_blog-post', 'thalassa_blog_post_shortcode');
}
/*
 * blog with image
 * content Holder
 */
if(! function_exists('thalassa_blog_post_box_shortcode')){
	function thalassa_blog_post_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'id'=>'',
			
			), $atts) );
			
			

			return  '
				<article class="latest-posts">
				'.do_shortcode($content).'
				</artical>
				
			';
			
	}
	add_shortcode('thalassa_blog_post_box', 'thalassa_blog_post_box_shortcode');
}
/*
 * blog with image
 * blog post
 */
if(! function_exists('thalassa_blog_post_iteam_shortcode')){
	function thalassa_blog_post_iteam_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			
			
			
			
			), $atts) );
		$html='';
		
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=> '3','paged'=>$paged ) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		if ( has_post_format( 'video' ))
		$html .='<article class="grid_4 omega blog-post format-video">';
		else if  ( has_post_format( 'audio' ))
		$html .='<article class="grid_4 blog-post format-audio soundcloud">';
		else
		$html .='<article class="grid_4 blog-post format-standard">';
		$html .='<div class="post-info">';
		$html .='<div class="post-category">';
		if ( has_post_format( 'video' )) $html .='<i class="icon-film"></i>';
		else if  ( has_post_format( 'audio' )) $html .='<i class="icon-music"></i>';
		else if  ( has_post_format( 'image' )) $html .='<i class="icon-image"></i>';
		else if  ( has_post_format( 'gallery' )) $html .='<i class="icon-images"></i>';
		else if ( has_post_format( 'link' )) $html .='<i class="icon-link"></i>';
		else $html .='<i class="icon-pushpin"></i>';
		$html .='</div>';
		$html .='<div class="post-date">';
		$html .='<span class="day">';
		$html .= get_the_time('d');
		$html .='</span>';
		$html .='<span class="month">';
		$html .= get_the_time('M');
		$html .='</span>';
		$html .='</div>';
		$html .='</div>';
		$html .='<article class="post-content-container">';
		if( has_post_format( 'image' ) !='') :
		$html .= '<div class="post-image-container">';
		$html .= '<a href="';
		$html .= get_the_permalink();
		$html .= '">';
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .= '<img src="';
		$html .= $image[0];
		$html .= '"/>';
		endif;
		$html .= '</a>';
		$html .='</div>';
		endif;
		if( has_post_format( 'gallery' ) !='') :
		if(has_post_thumbnail( $post->ID ) !='') :
		$html .='<div class="slider-wrapper">';
		$html .='<section id="slider" class="nivoSlider">';
		if (has_post_thumbnail( $post->ID ) ):
		$custom1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$html .='<img src="';
		$html .= $custom1[0];
		$html .='" alt=""/>';
		endif;
		if (has_post_thumbnail( $post->ID ) ):
		$custom2 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_2', $post->ID);
		$custom2=wp_get_attachment_image_src($custom2,'featured_image_2');
		if($custom2 !='') :
		$html .='<img src="';
		$html .= $custom2[0];
		$html .='" alt=""/>';
		endif;
		endif;
		if (has_post_thumbnail( $post->ID ) ):
		$custom3 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_3', $post->ID);
		$custom3=wp_get_attachment_image_src($custom3,'featured_image_3');
		if($custom3 !='') :
		$html .='<img src="';
		$html .= $custom3[0];
		$html .='" alt=""/>';
		endif;
		endif;
		if (has_post_thumbnail( $post->ID ) ):
		$custom4 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_4', $post->ID);
		$custom4=wp_get_attachment_image_src($custom4,'featured_image_4');
		if($custom4 !='') :
		$html .='<img src="';
		$html .= $custom4[0];
		$html .='" alt=""/>';
		endif;
		endif;
		$html .= '</section>';
		$html .= '</div>';
		endif;
		endif;
		if( has_post_format( 'audio' ) !='') :
		$html .='<iframe src="';
		$html .= get_post_meta($post->ID,'pyre_soundcloud_link',true);
		$html .='">';
		$html .='</iframe>';
		endif;
		if( has_post_format( 'video' ) !='') :
		$html .='<iframe src="';
		$html .= get_post_meta($post->ID,'pyre_vimeo_link',true);
		$html .='">';
		$html .='</iframe>';
		endif;
		$html .='<div class="post-content clearfix">';
		$html .= '<a href="';
		$html .= get_the_permalink();
		$html .= '">';
 		$html .= '<h4>';
 		$html .= get_the_title();
 		$html .= '</h4>';
 		$html .= '</a>';
 		$html .= '<div class="blog-meta">';
 		$html .= '<ul>';
 		$html .= '<li class="icon-user">';
		$html .= get_the_author();
 		$html .= '</li>';
		$html .= '<li class="post-tags icon-comment tha-ico">';
		$html .= get_comments_number( '0 Comment', '1 Comment', '% Comments' );
 		$html .= '</li>';
 		$html .= '</ul>';
		$html .='</div>';
		$html .= '<p>';
		$html .= substr(strip_tags($post->post_content), 0, 150);
		$html .= '</p>';
		if( has_post_format( 'link' ) !='') :
		$html .= '<a class="link" href="';
		$html .= get_post_meta($post->ID,'pyre_external_link',true);
		$html .= '">';
		$html .= get_post_meta($post->ID,'pyre_link_text',true);
		$html .='</a>';
		endif;
		$html .= '<a class="read-more" href="';
		$html .= get_the_permalink();
		$html .= '">read more...</a>';
		$html .='</div>';
		$html .='</article>';
		$html .='</article>';
		endwhile;
			
		return $html;
	}
	add_shortcode('blog_with_image_item', 'thalassa_blog_post_iteam_shortcode');
}

/*
 * blog without image
 * headline
 */
if(! function_exists('thalassa_blog_post_withoutimg_shortcode')){
	function thalassa_blog_post_withoutimg_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'title'=>'',
			
			), $atts) );
			
			

			return  '
				<h3>'.$title.'</h3>
				<ul class="latest-posts-2">
				'.do_shortcode($content).'
				</ul>
				
			';
			
	}
	add_shortcode('thalassa_blog_post_without_img', 'thalassa_blog_post_withoutimg_shortcode');
}

/*
 * blog without image
 * blog post
 */
if(! function_exists('thalassa_blog_post_iteams_shortcode')){
	function thalassa_blog_post_iteams_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'post_par_page'=>''
			
			
			
			
			), $atts) );
		$html='';
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=> $post_par_page,'paged'=>$paged ) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .='<li class="blog-post format-standard">';
		$html .='<div class="post-info">';
		$html .='<div class="post-category">';
		if ( has_post_format( 'video' )) $html .='<i class="icon-film"></i>';
		else if  ( has_post_format( 'audio' )) $html .='<i class="icon-music"></i>';
		else if  ( has_post_format( 'image' )) $html .='<i class="icon-image"></i>';
		else if  ( has_post_format( 'gallery' )) $html .='<i class="icon-images"></i>';
		else if ( has_post_format( 'link' )) $html .='<i class="icon-link"></i>';
		else $html .='<i class="icon-pushpin"></i>';
		$html .='</div>';
		$html .='<div class="post-date">';
		$html .='<span class="day">';
		$html .= get_the_time('d');
		$html .='</span>';
		$html .='<span class="month">';
		$html .= get_the_time('M');
		$html .='</span>';
		$html .='</div>';
		$html .='</div>';
		$html .='<article class="post-content-container">';
		$html .='<div class="post-content clearfix">';
		$html .= '<a href="';
		$html .= get_the_permalink();
		$html .= '">';
 		$html .= '<h5>';
 		$html .= get_the_title();
 		$html .= '</h5>';
 		$html .= '</a>';
		$html .= '<div class="blog-meta">';
 		$html .= '<ul>';
 		$html .= '<li class="icon-user">';
		$html .= get_the_author();
 		$html .= '</li>';
		$html .= '<li class="post-tags icon-comment tha-ico">';
		$html .= get_comments_number( '0 Comment', '1 Comment', '% Comments' );
 		$html .= '</li>';
 		$html .= '</ul>';
		$html .='</div>';
		$html .= '<p>';
		$html .= substr(strip_tags($post->post_content), 0, 150);
		$html .= '</p>';
		$html .= '<a class="read-more" href="';
		$html .= get_the_permalink();
		$html .= '">read more...</a>';
		$html .='</div>';
		$html .='</article>';
		$html .='</li>';
		endwhile;
		
		
		
			
		return $html;
	}
	add_shortcode('blog_without_image_item', 'thalassa_blog_post_iteams_shortcode');
}
/*
 * Thalassa Tabs
 * tab body & title
 */
if(! function_exists('thalassa_horizontal_tab_shortcode')){
	function thalassa_horizontal_tab_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>''
			
			
			
			
			
			), $atts) );
		
		return '
		<h3>'.$title.'</h3>
        <ul class="tabs">
		'.do_shortcode($content).'
		</ul>
		';
	}
	add_shortcode('horizontal_tab', 'thalassa_horizontal_tab_shortcode');
}
/*
 * Thalassa Tabs
 * menu
 */
if(! function_exists('thalassa_horizontal_tab_menu_shortcode')){
	function thalassa_horizontal_tab_menu_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'tab_id'=>'',
			'tab_icon'=>'',
			'tab_active'=>'',
			'tab_title'=>''
			
			
			
			
			
			), $atts) );
		
		return '
		<li class="'.$tab_active.'">
        <a href="#'.$tab_id.'">
        <i class="'.$tab_icon.'"></i>
		'.$tab_title.'
        </a>
        </li>
		
		';
	}
	add_shortcode('horizontal_tab_menu', 'thalassa_horizontal_tab_menu_shortcode');
}

/*
 * Thalassa Tabs
 * content
 */
if(! function_exists('thalassa_horizontal_tab_content_box_shortcode')){
	function thalassa_horizontal_tab_content_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>''
			
			
			), $atts) );
		
		return '
		
		<section class="tab-content-wrap">
		'.do_shortcode($content).'
		</section>
        
		';
	}
	add_shortcode('horizontal_tab_content_box','thalassa_horizontal_tab_content_box_shortcode');
}

/*
 * Thalassa Tabs
 * content
 */
if(! function_exists('thalassa_horizontal_tab_content_shortcode')){
	function thalassa_horizontal_tab_content_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'tab_title'=>'',
			'tab_icon'=>'',
			'tab_id'=>'',
			
			
			
			
			), $atts) );
		
		return '
		
			<div id="'.$tab_id.'" class="tab-content">
			'.$content.'
			</div>
        
		';
	}
	add_shortcode('horizontal_tab_content', 'thalassa_horizontal_tab_content_shortcode');
}
/*
 * Thalassa vertical Tabs
 * tab body & title
 */
if(! function_exists('thalassa_vertical_tab_shortcode')){
	function thalassa_vertical_tab_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>''
			
			
			
			
			
			), $atts) );
		
		return '
		<h3>'.$title.'</h3>
        <ul class="grid_3 alpha tabs vertical">
		'.do_shortcode($content).'
		</ul>
		';
	}
	add_shortcode('vertical_tab', 'thalassa_vertical_tab_shortcode');
}
/*
 * Thalassa Tabs
 * menu
 */
if(! function_exists('thalassa_vertical_tab_menu_shortcode')){
	function thalassa_vertical_tab_menu_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'tab_title'=>'',
			'tab_icon'=>'',
			'tab_active'=>'',
			'tab_name'=>''
			
			
			
			
			
			), $atts) );
		
		return '
		<li class="">
        <a href="#'.$tab_name.'">
        <i class="'.$tab_icon.'"></i>
		'.$tab_title.'
        </a>
        </li>
		
		';
	}
	add_shortcode('vertical_tab_menu', 'thalassa_vertical_tab_menu_shortcode');
}

/*
 * Thalassa Tabs
 * content
 */
if(! function_exists('thalassa_vertical_tab_content_box_shortcode')){
	function thalassa_vertical_tab_content_box_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>''
			
			), $atts) );
		
		return '
		
		<section class="grid_4 omega tab-content-wrap vertical">
		'.do_shortcode($content).'
		</section>
        
		';
	}
	add_shortcode('vertical_tab_content_box','thalassa_vertical_tab_content_box_shortcode');
}

/*
 * Thalassa Tabs
 * content
 */
if(! function_exists('thalassa_vertical_tab_content_shortcode')){
	function thalassa_vertical_tab_content_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'tab_name'=>'',
			'tab_icon'=>''
			
			
			
			
			
			), $atts) );
		
		return '
		
			<div id="'.$tab_name.'" class="tab-content">
			'.$content.'
			</div>
        
		';
	}
	add_shortcode('vertical_tab_content', 'thalassa_vertical_tab_content_shortcode');
}

/*
 * Thalassa Poster
 * content
 */
if(! function_exists('thalassa_poster_shortcode')){
	function thalassa_poster_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'poster_title'=>'',
			'poster_icon'=>'',
			'button_text'=>'',
			'button_link'=>''
			
			
			
			
			
			), $atts) );
		
		return '
		
			<section class="note style-2 clearfix">
            <div class="icon">
            <i class="'.$poster_icon.'"></i>
            </div>
			<div class="text">
            <h3>'.$poster_title.'</h3>
            <span>
                '.$content.'                    
            </span>
            </div>

			<a href="'.$button_link.'" class="btn-big">'.$button_text.'</a>

           <div class="clearfix"></div>
           </section>
        
		';
	}
	add_shortcode('thalassa_poster', 'thalassa_poster_shortcode');
}

//Google Maps Shortcode
function fn_googleMaps($atts, $content = null) {
   extract(shortcode_atts(array(
      "width" => '640',
      "height" => '480',
      "src" => ''
   ), $atts));
   return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'&amp;output=embed"></iframe>';
}
add_shortcode("googlemap", "fn_googleMaps");

/*
 * Thalassa contact form
 * content
 */
if(! function_exists('thalassa_contact_shortcode')){
	function thalassa_contact_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'contact_title'=>'',
			'contact_form'=>''
			
			
			
			
			
			
			), $atts) );
		
		return '
			<article>
				<h4>
					'.$contact_title.'
				</h4>
				'.do_shortcode($content).'
			</article>
			
        
		';
	}
	add_shortcode('thalassa_contact', 'thalassa_contact_shortcode');
}

/*
 * Thalassa contact information
 * content
 */
if(! function_exists('thalassa_contact_information_shortcode')){
	function thalassa_contact_information_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'contact_title'=>'',
			'address'=>'',
			'email'=>'',
			'phone'=>'',
			'content_text'=>'',
			
			
			
			
			
			
			), $atts) );
		
		return '
			<h4>'.$contact_title.'</h4>
			'.$content_text.'
            <ul class="contact-information">
            <li>
            <span class="text-dark">Adress: </span>'.$address.'
            </li>
			<li>
             <span class="text-dark">Email: </span>
            <a href="mailto:'.$email.'">'.$email.'</a>
            </li>
			<li>
             <span class="text-dark">Phone number: </span>'.$phone.'
            </li>
            </ul>
			
        
		';
	}
	add_shortcode('thalassa_contact_information', 'thalassa_contact_information_shortcode');
}