<?php
class PyreThemeFrameworkMetaboxes {
	
	public function __construct()
	{
		global $data;
		$this->data = $data;

		add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
		add_action('save_post', array($this, 'save_meta_boxes'));
		add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));
	}

	// Load backend scripts
	function admin_script_loader() {
		global $pagenow;
		if (is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php')) {
	    	wp_register_script('morpheus_upload', get_template_directory_uri('template_directory').'/includes/js/upload.js');
	    	wp_enqueue_script('morpheus_upload');
	    	wp_enqueue_script('media-upload');
	    	wp_enqueue_script('thickbox');
	   		wp_enqueue_style('thickbox');
		}
	}
	
	public function add_meta_boxes()
	{
		//$this->add_meta_box('post_options', 'Post Options', 'homepost');
		$this->add_meta_box('feature_options', 'Post Options', 'feature');
		$this->add_meta_box('stuff_options', 'Post Options', 'stuff');
		$this->add_meta_box('portfolio_options', 'Post Options', 'portfolio');
		$this->add_meta_box('page_options', 'Page Options', 'page');
		$this->add_meta_box('testimonial_option', 'Testimonial Options', 'testimonial');
		$this->add_meta_box('post_options', 'Post Options', 'post');
		
	}
	
	public function add_meta_box($id, $label, $post_type)
	{
	    add_meta_box( 
	        'pyre_' . $id,
	        $label,
	        array($this, $id),
	        $post_type
	    );
	}
	
	public function save_meta_boxes($post_id)
	{
		if(defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return;
		}
		
		foreach($_POST as $key => $value) {
			if(strstr($key, 'pyre_')) {
				update_post_meta($post_id, $key, $value);
			}
		}
	}

	public function post_options()
	{
		$data = $this->data;
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/post_options.php';
	}

	public function feature_options()
	{
		$data = $this->data;
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/feature_options.php';
	}
	public function stuff_options()
	{
		$data = $this->data;
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/stuff_options.php';
	}

	public function page_options()
	{
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/page_options.php';
	}

	public function blog_options()
	{
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/blog_options.php';
	}
	public function portfolio_options()
	{
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/portfolio_options.php';
	}
	public function testimonial_option()
	{
		include 'views/metaboxes/style.php';
		include 'views/metaboxes/testimonial_option.php';
	}

	
	
	

	public function text($id, $label, $desc = '')
	{
		global $post;
		
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
				$html .= '<input type="text" id="pyre_' . $id . '" name="pyre_' . $id . '" value="' . get_post_meta($post->ID, 'pyre_' . $id, true) . '" />';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
	public function select($id, $label, $options, $desc = '')
	{
		global $post;
		
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
				$html .= '<select id="pyre_' . $id . '" name="pyre_' . $id . '">';
				foreach($options as $key => $option) {
					if(get_post_meta($post->ID, 'pyre_' . $id, true) == $key) {
						$selected = 'selected="selected"';
					} else {
						$selected = '';
					}
					
					$html .= '<option ' . $selected . 'value="' . $key . '">' . $option . '</option>';
				}
				$html .= '</select>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}

	public function multiple($id, $label, $options, $desc = '')
	{
		global $post;
		
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
				$html .= '<select multiple="multiple" id="pyre_' . $id . '" name="pyre_' . $id . '[]">';
				foreach($options as $key => $option) {
					if(is_array(get_post_meta($post->ID, 'pyre_' . $id, true)) && in_array($key, get_post_meta($post->ID, 'pyre_' . $id, true))) {
						$selected = 'selected="selected"';
					} else {
						$selected = '';
					}
					
					$html .= '<option ' . $selected . 'value="' . $key . '">' . $option . '</option>';
				}
				$html .= '</select>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}

	public function textarea($id, $label, $desc = '')
	{
		global $post;

		$html = '';
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
				$html .= '<textarea cols="120" rows="10" id="pyre_' . $id . '" name="pyre_' . $id . '">' . get_post_meta($post->ID, 'pyre_' . $id, true) . '</textarea>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}

	public function upload($id, $label, $desc = '')
	{
		global $post;

		$html = '';
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<label for="pyre_' . $id . '">';
			$html .= $label;
			$html .= '</label>';
			$html .= '<div class="field">';
			    $html .= '<input name="pyre_' . $id . '" class="upload_field" id="pyre_' . $id . '" type="text" value="' . get_post_meta($post->ID, 'pyre_' . $id, true) . '" />';
			    $html .= '<input class="upload_button" type="button" value="Browse" />';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
}

$metaboxes = new PyreThemeFrameworkMetaboxes;