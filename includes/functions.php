<?php
global $th_options;
if( ! function_exists( 'th_portfolio_post_types' ) ) {
    function th_portfolio_post_types() {

        register_post_type(
            'portfolio',
            array(
                'labels' => array(
                    'name'          => __( 'Portfolio Post', 'portfolio' ),
                    'singular_name' => __( 'Portfolio', 'portfolio' ),
                    'add_new'       => __( 'Add New', 'portfolio' ),
                    'add_new_item'  => __( 'Add New Portfolio', 'portfolio' ),
                    'edit'          => __( 'Edit', 'portfolio' ),
                    'edit_item'     => __( 'Edit Portfolio', 'portfolio' ),
                    'new_item'      => __( 'New Portfolio', 'portfolio' ),
                    'view'          => __( 'View Portfolio', 'portfolio' ),
                    'view_item'     => __( 'View Portfolio', 'portfolio' ),
                    'search_items'  => __( 'Search Portfolio', 'portfolio' ),
                    'not_found'     => __( 'No Portfolio found', 'portfolio' ),
                    'not_found_in_trash' => __( 'No Portfolio found in Trash', 'portfolio' ),
                    'parent'        => __( 'Parent Portfolio', 'portfolio' ),
                ),
                
                'description'       => __( 'Create a Portfolio.', 'portfolio' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => true,
                'query_var'         => true,
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'th_portfolio_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



if( ! function_exists( 'th_feature_post_types' ) ) {
    function th_feature_post_types() {

        register_post_type(
            'feature',
            array(
                'labels' => array(
                    'name'          => __( 'Feature Post', 'feature' ),
                    'singular_name' => __( 'Feature', 'feature' ),
                    'add_new'       => __( 'Add New', 'feature' ),
                    'add_new_item'  => __( 'Add New Feature', 'feature' ),
                    'edit'          => __( 'Edit', 'feature' ),
                    'edit_item'     => __( 'Edit Feature', 'feature' ),
                    'new_item'      => __( 'New Feature', 'feature' ),
                    'view'          => __( 'View Feature', 'feature' ),
                    'view_item'     => __( 'View Feature', 'feature' ),
                    'search_items'  => __( 'Search Feature', 'feature' ),
                    'not_found'     => __( 'No Feature found', 'feature' ),
                    'not_found_in_trash' => __( 'No Feature found in Trash', 'feature' ),
                    'parent'        => __( 'Parent Feature', 'feature' ),
                ),
                
                'description'       => __( 'Create a Feature.', 'feature' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => true,
                'query_var'         => true,
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('feature_category', 'feature', array('hierarchical' => true, 'label' => 'Feature Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'th_feature_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');

if( ! function_exists( 'th_stuff_post_types' ) ) {
    function th_stuff_post_types() {

        register_post_type(
            'stuff',
            array(
                'labels' => array(
                    'name'          => __( 'Stuff Post', 'stuff' ),
                    'singular_name' => __( 'stuff', 'stuff' ),
                    'add_new'       => __( 'Add New', 'stuff' ),
                    'add_new_item'  => __( 'Add New Stuff', 'stuff' ),
                    'edit'          => __( 'Edit', 'stuff' ),
                    'edit_item'     => __( 'Edit Stuff', 'stuff' ),
                    'new_item'      => __( 'New Stuff', 'stuff' ),
                    'view'          => __( 'View Stuff', 'stuff' ),
                    'view_item'     => __( 'View Stuff', 'stuff' ),
                    'search_items'  => __( 'Search stuff', 'stuff' ),
                    'not_found'     => __( 'No Stuff found', 'stuff' ),
                    'not_found_in_trash' => __( 'No Stuff found in Trash', 'stuff' ),
                    'parent'        => __( 'Parent stuff', 'stuff' ),
                ),
                
                'description'       => __( 'Create a Stuff.', 'stuff' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => true,
                'query_var'         => true,
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('stuff_category', 'stuff', array('hierarchical' => true, 'label' => 'Stuff Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'th_stuff_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');


//Add Testimonial post

if( ! function_exists( 'th_testimonial_post_types' ) ) {
    function th_testimonial_post_types() {

        register_post_type(
            'testimonial',
            array(
                'labels' => array(
                    'name'          => __( 'Testimonial Post', 'testimonial' ),
                    'singular_name' => __( 'testimonial', 'testimonial' ),
                    'add_new'       => __( 'Add New', 'testimonial' ),
                    'add_new_item'  => __( 'Add New Testimonial', 'testimonial' ),
                    'edit'          => __( 'Edit', 'testimonial' ),
                    'edit_item'     => __( 'Edit Testimonial', 'testimonial' ),
                    'new_item'      => __( 'New Testimonial', 'testimonial' ),
                    'view'          => __( 'View Testimonial', 'testimonial' ),
                    'view_item'     => __( 'View Testimonial', 'testimonial' ),
                    'search_items'  => __( 'Search testimonial', 'testimonial' ),
                    'not_found'     => __( 'No Testimonial found', 'testimonial' ),
                    'not_found_in_trash' => __( 'No Testimonial found in Trash', 'testimonial' ),
                    'parent'        => __( 'Parent testimonial', 'testimonial' ),
                ),
                
                'description'       => __( 'Create a Testimonial.', 'testimonial' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => true,
                'query_var'         => true,
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('testimonial_category', 'testimonial', array('hierarchical' => true, 'label' => 'Testimonial Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'th_testimonial_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');

if( ! function_exists( 'th_news_post_types' ) ) {
    function th_news_post_types() {

        register_post_type(
            'news',
            array(
                'labels' => array(
                    'name'          => __( 'News Post', 'news' ),
                    'singular_name' => __( 'News', 'news' ),
                    'add_new'       => __( 'Add New', 'news' ),
                    'add_new_item'  => __( 'Add New News', 'news' ),
                    'edit'          => __( 'Edit', 'news' ),
                    'edit_item'     => __( 'Edit News', 'news' ),
                    'new_item'      => __( 'New News', 'news' ),
                    'view'          => __( 'View News', 'news' ),
                    'view_item'     => __( 'View News', 'news' ),
                    'search_items'  => __( 'Search News', 'news' ),
                    'not_found'     => __( 'No News found', 'news' ),
                    'not_found_in_trash' => __( 'No News found in Trash', 'news' ),
                    'parent'        => __( 'Parent News', 'news' ),
                ),
                
                'description'       => __( 'Create a News.', 'news' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => true,
                'query_var'         => true,
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('news_category', 'news', array('hierarchical' => true, 'label' => 'News Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'th_news_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');

//Add faQ post

if( ! function_exists( 'th_faq_post_types' ) ) {
    function th_faq_post_types() {

        register_post_type(
            'faq',
            array(
                'labels' => array(
                    'name'          => __( 'Faq Post', 'faq' ),
                    'singular_name' => __( 'faq', 'faq' ),
                    'add_new'       => __( 'Add New', 'faq' ),
                    'add_new_item'  => __( 'Add New Faq', 'faq' ),
                    'edit'          => __( 'Edit', 'faq' ),
                    'edit_item'     => __( 'Edit Taq', 'faq' ),
                    'new_item'      => __( 'New Faq', 'Faq' ),
                    'view'          => __( 'View Faq', 'faq' ),
                    'view_item'     => __( 'View Faq', 'faq' ),
                    'search_items'  => __( 'Search faq', 'faq' ),
                    'not_found'     => __( 'No Faq found', 'faq' ),
                    'not_found_in_trash' => __( 'No Faq found in Trash', 'faq' ),
                    'parent'        => __( 'Parent faq', 'faq' ),
                ),
                
                'description'       => __( 'Create a Faq.', 'faq' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => true,
                'query_var'         => true,
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('faq_category', 'faq', array('hierarchical' => true, 'label' => 'Faq Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));


    }
}

add_action( 'init', 'th_faq_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');


// Add post thumbnail functionality

add_theme_support('post-thumbnails');
add_image_size('post', 795,400, true);
add_image_size('showbiz', 449,444, true);
add_image_size('aboutme', 570,297, true);
add_image_size('feature', 270,197, true);
add_image_size('portfolio', 262,200, true);
add_image_size('blog-2col', 345,180, true);
add_image_size('single', 800,400, true);
add_image_size('accommotaionmini', 270,175, true);
add_image_size('mini', 65,82, true);
add_editor_style();
set_post_thumbnail( 100, 100, true );



// extra feature image for Feature post type
if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 2',
'id' => 'featured_image_2',
'post_type' => 'post'
 ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 3',
'id' => 'featured_image_3',
'post_type' => 'post'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 4',
'id' => 'featured_image_4',
'post_type' => 'post'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 5',
'id' => 'featured_image_5',
'post_type' => 'post'
 ) );

 }

// extra feature image for Feature post type
if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 2',
'id' => 'featured_image_2',
'post_type' => 'feature'
 ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 3',
'id' => 'featured_image_3',
'post_type' => 'feature'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 4',
'id' => 'featured_image_4',
'post_type' => 'feature'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 5',
'id' => 'featured_image_5',
'post_type' => 'feature'
 ) );

 }
 // extra feature image for Portfolio post type
if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 2',
'id' => 'featured_image_2',
'post_type' => 'portfolio'
 ) );

 }
 
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 3',
'id' => 'featured_image_3',
'post_type' => 'portfolio'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 4',
'id' => 'featured_image_4',
'post_type' => 'portfolio'
 ) );

 }
 if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Featured image 5',
'id' => 'featured_image_5',
'post_type' => 'portfolio'
 ) );

 }

// For Post view Count Function

function getPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
}
return $count.' Views';}
function setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
}else{
    $count++;
    update_post_meta($postID, $count_key, $count);
}}


// How comments are displayed


function th_thalassa_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
?>
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment_left">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
    </div>
    <div class="comment_right">
	<div class="comment-meta">
		<?php printf(__('<span class="author">%s</span>'), get_comment_author_link()) ?></div>
	<div class="space3"></div>

    <span class="comment_info2"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
      <?php
        /* translators: 1: date, 2: time */
        printf( __(' %1$s','thalassa'), get_comment_date('F jS,Y,\a\t g:ia')) ?></a><?php edit_comment_link(__('(Edit) ','thalassa'),'  ','' );
      ?>
    </span>
		<?php comment_text() ?>
    <div class="space3"></div>

    
    <span class="comment_info1">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </span>
    </div>
    
    
    
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','thalassa') ?></em>
    <br />
<?php endif; ?>

    

    
    
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php
        }



// Register Menu

function th_register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu','thalassa' ),
      'footer-menu' => __( 'Footer Menu','thalassa' ),
      
    )
  );
}
add_action( 'init', 'th_register_my_menus' );


// Add class to <li> 

function th_add_menu_parent_class($items)
{

    $parents=array();
    foreach($items as $item){

        if($item->menu_item_parent && $item->menu_item_parent>0){
            $parents[]=$item->menu_item_parent;
        }
    }
    foreach($items as $item){
        if(in_array($item->ID,$parents)){
            $item->classes[]='current';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects','th_add_menu_parent_class');




// walker nav sub-menu add class to <ul> 

class th_themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
function start_lvl( &$output, $depth=0, $args=array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'dl-submenu',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? '' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
  
    // build html
    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
  

}

// add post-formats to post_type 'page'
add_theme_support( 'post-formats', array( 'image','video', 'audio','gallery','link' ) );





/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);
function my_standard_settings($position, $form_id){
	// Create settings on position 25 (right after Field Label)
	if($position == 25){
		?>
		<li class="admin_label_setting field_setting" style="display: list-item; ">
			<label for="field_placeholder">Placeholder Text
				<!-- Tooltip to help users understand what this field does -->
				<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="<h6>Placeholder</h6>Enter the placeholder/default text for this field.">(?)</a>
			</label>
			<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
		</li>
		<?php
	}
}
 
/* Now we execute some javascript technicalitites for the field to load correctly */
add_action("gform_editor_js", "my_gform_editor_js");
function my_gform_editor_js(){
	?>
	<script>
		//binding to the load field settings event to initialize the checkbox
		jQuery(document).bind("gform_load_field_settings", function(event, field, form){
			jQuery("#field_placeholder").val(field["placeholder"]);
		});
	</script>
	<?php
}
 
/* We use jQuery to read the placeholder value and inject it to its field */
add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);
function my_gform_enqueue_scripts($form, $is_ajax=false){
	?>
	<script>
	jQuery(function(){
		<?php
		/* Go through each one of the form fields */
		foreach($form['fields'] as $i=>$field){
			/* Check if the field has an assigned placeholder */
			if(isset($field['placeholder']) && !empty($field['placeholder'])){
				/* If a placeholder text exists, inject it as a new property to the field using jQuery */
				?>
				jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
				<?php
			}
		}
		?>
	});
	</script>
	<?php
}

// Must Needed plugins

// TGM Plugin Activation
include(get_template_directory().'/framework/class-tgm-plugin-activation.php');


add_action( 'tgmpa_register', 'th_plugin_register_required_plugins' );

function th_plugin_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'                  => 'wysija-newsletters.zip', // The plugin name
            'slug'                  => 'wysija', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/framework/plugins/wysija-newsletters.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),


        array(
            'name'                  => 'Contact Form 7', // The plugin name
            'slug'                  => 'contact', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/framework/plugins/contact-form-7.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '3.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

        
        array(
            'name'                  => 'revslider', // The plugin name
            'slug'                  => 'revslider', // The plugin slug (typically the folder name)
            'source'                => get_template_directory().'/framework/plugins/revslider.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

    
	
	array(
            'name'                  => 'multiple-post-thumbnails', // The plugin name
            'slug'                  => 'multiple-post-thumbnails', // The plugin slug (typically the folder name)
            'source'                => get_template_directory().'/framework/plugins/multiple-post-thumbnails.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => '', // If set, overrides default API URL and points to an external URL
        ),

    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'tgmpa';

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => $theme_text_domain,          // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                          // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',                // Default parent menu slug
        'parent_url_slug'   => 'themes.php',                // Default parent URL slug
        'menu'              => 'install-required-plugins',  // Menu slug
        'has_notices'       => true,                        // Show admin notices or not
        'is_automatic'      => false,                       // Automatically activate plugins after installation or not
        'message'           => '',                          // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'                                => __( 'Install Plugins', $theme_text_domain ),
            'installing'                                => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
            'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );
}




