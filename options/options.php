<?php
/*
 *
 * Set the text domain for the theme or plugin.
 *
 */
define('Redux_TEXT_DOMAIN', 'redux-opts');
define('thalassa_theme', 'redux-opts');

/*
 *
 * Require the framework class before doing anything else, so we can use the defined URLs and directories.
 * If you are running on Windows you may have URL problems which can be fixed by defining the framework url first.
 *
 */
//define('Redux_OPTIONS_URL', site_url('path the options folder'));
if(!class_exists('Redux_Options')) {
    require_once(dirname(__FILE__) . '/options/defaults.php');
}

/*
 *
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 *
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 *
 */
function add_another_section($sections) {
    //$sections = array();
    $sections[] = array(
        'title' => __('A Section added by hook', Redux_TEXT_DOMAIN),
        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', Redux_TEXT_DOMAIN),
		'icon' => 'paper-clip',
		'icon_class' => 'icon-large',
        // Leave this as a blank section, no options just some intro text set above.
        'fields' => array()
    );

    return $sections;
}
//add_filter('redux-opts-sections-twenty_eleven', 'add_another_section');


/*
 *
 * Custom function for filtering the args array given by a theme, good for child themes to override or add to the args array.
 *
 */
function change_framework_args($args) {
    //$args['dev_mode'] = false;

    return $args;
}
//add_filter('redux-opts-args-twenty_eleven', 'change_framework_args');


/*
 *
 * Most of your editing will be done in this section.
 *
 * Here you can override default values, uncomment args and change their values.
 * No $args are required, but they can be over ridden if needed.
 *
 */
function setup_framework_options() {
    $args = array();

    // Setting dev mode to true allows you to view the class settings/info in the panel.
    // Default: true
    //$args['dev_mode'] = true;

	// Set the icon for the dev mode tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: info-sign
	//$args['dev_mode_icon'] = 'info-sign';

	// Set the class for the dev mode tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['dev_mode_icon_class'] = 'icon-large';

    // If you want to use Google Webfonts, you MUST define the api key.
    //$args['google_api_key'] = 'xxxx';

    // Define the starting tab for the option panel.
    // Default: '0';
    //$args['last_tab'] = '0';

    // Define the option panel stylesheet. Options are 'standard', 'custom', and 'none'
    // If only minor tweaks are needed, set to 'custom' and override the necessary styles through the included custom.css stylesheet.
    // If replacing the stylesheet, set to 'none' and don't forget to enqueue another stylesheet!
    // Default: 'standard'
    //$args['admin_stylesheet'] = 'standard';

    // Add HTML before the form.
    $args['intro_text'] = '';

    // Add content after the form.
    $args['footer_text'] = '';

    // Set footer/credit line.
    //$args['footer_credit'] = __('<span id="footer-thankyou">This text is displayed in the options panel footer across from the WordPress version (where it normally says \'Thank you for creating with WordPress\'). This field accepts all HTML.</span>', Redux_TEXT_DOMAIN);

    // Setup custom links in the footer for share icons
    $args['share_icons']['twitter'] = array(
        'link' => 'http://twitter.com/Thalassatheme',
        'title' => ('Follow Thalassa Theme on Twitter'),
        'img' => Redux_OPTIONS_URL . 'img/social/Twitter.png'
    );
    $args['share_icons']['linked_in'] = array(
        'link' => 'http://www.linkedin.com/pages/Thalassatheme/view?id=52559281',
        'title' => ('Find Thalassa Theme on LinkedIn'),
        'img' => Redux_OPTIONS_URL . 'img/social/LinkedIn.png'
    );

    // Enable the import/export feature.
    // Default: true
    $args['show_import_export'] = false;

	// Set the icon for the import/export tab.
	// If $args['icon_type'] = 'image', this should be the path to the icon.
	// If $args['icon_type'] = 'iconfont', this should be the icon name.
	// Default: refresh
	//$args['import_icon'] = 'refresh';

	// Set the class for the import/export tab icon.
	// This is ignored unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['import_icon_class'] = 'icon-large';
    $thalassa_theme="";
    // Set a custom option name. Don't forget to replace spaces with underscores!
    $args['opt_name'] = 'thalassa_theme';

    // Set a custom menu icon.
    //$args['menu_icon'] = '';

    // Set a custom title for the options page.
    // Default: Options
    $args['menu_title'] = __('Thalassa Theme Options', thalassa_theme);

    // Set a custom page title for the options page.
    // Default: Options
    $args['page_title'] = __('Thalassa Theme Options', thalassa_theme);

    // Set a custom page slug for options page (wp-admin/themes.php?page=***).
    // Default: redux_options
    $args['page_slug'] = 'redux_options';

    // Set a custom page capability.
    // Default: manage_options
    //$args['page_cap'] = 'manage_options';

    // Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
    // Default: menu
    //$args['page_type'] = 'submenu';

    // Set the parent menu.
    // Default: themes.php
    // A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    //$args['page_parent'] = 'options-general.php';

    // Set a custom page location. This allows you to place your menu where you want in the menu order.
    // Must be unique or it will override other items!
    // Default: null
    $args['page_position'] = 50;

    // Set a custom page icon class (used to override the page icon next to heading)
    //$args['page_icon'] = 'icon-themes';

	// Set the icon type. Set to "iconfont" for Font Awesome, or "image" for traditional.
	// Redux no longer ships with standard icons!
	// Default: iconfont
	//$args['icon_type'] = 'image';
	//$args['dev_mode_icon_type'] = 'image';
	//$args['import_icon_type'] == 'image';

    // Disable the panel sections showing as submenu items.
    // Default: true
    //$args['allow_sub_menu'] = false;

    // Set ANY custom page help tabs, displayed using the new help tab API. Tabs are shown in order of definition.
    $args['help_tabs'][] = array(
        'id' => 'redux-opts-1',
        'title' => __('Theme Information 1', thalassa_theme),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', thalassa_theme)
    );
    $args['help_tabs'][] = array(
        'id' => 'redux-opts-2',
        'title' => __('Theme Information 2', thalassa_theme),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', thalassa_theme)
    );

    // Set the help sidebar for the options page.
    $args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', thalassa_theme);

    $sections = array();

    $sections[] = array(
		
		'icon_type' => 'image',
		'icon' => Redux_OPTIONS_URL . 'img/home.png',
		// Set the class for this icon.
		// This field is ignored unless $args['icon_type'] = 'iconfont'
		'icon_class' => 'icon-large',
        'title' => __('General Options', thalassa_theme),
		'desc' => __('<p class="description">This is the description field for this section. HTML is allowed</p>', thalassa_theme),
		'fields' => array(

            array(
                'id' => 'logo',
                'type' => 'upload', 
                'title' => __('Logo Upload', thalassa_theme), 
                'sub_desc' => __('Upload your logo image here ', thalassa_theme),
                'desc' => ''  
            ),


            array(
                'id' => 'title',
                'type' => 'text',
                'title' => __('Title of the WebSite', thalassa_theme), 
                'sub_desc' => __('Write a Title of your WebSite', thalassa_theme),
                'desc' => ''
            ),
            array(
                'id' => 'favicon',
                'type' => 'upload',
                'title' => __('Favicon Upload', thalassa_theme), 
                'sub_desc' => __('Upload a 16px x 16px .png or .gif image that will be your favicon.', thalassa_theme),
                'desc' => ''
            ),
			array(
                'id' => 'slogan',
                'type' => 'text',
                'title' => __('Slogan', thalassa_theme), 
                'sub_desc' => __('Write a slogan of your WebSite', thalassa_theme),
                'desc' => ''
            ),
			
			 array(
                'id' => 'theme_style',
                'type' => 'select',
                'title' => __('Theme Style', thalassa_theme), 
                'sub_desc' => __('Select Your Theme or Website Style.', thalassa_theme),
                'desc' => '',
                'options' => array(
                    'dark_box'=> __('Dark Boxed', thalassa_theme),
                    'light_box' => __('light Boxed', thalassa_theme), 
                    'dark_stretched' => __('Dark Stretched', thalassa_theme),
                    'light_stretched' => __('light Stretched', thalassa_theme)
                    
                    
                ),
                'std' => 'light_stretched'
            ),
			 array(
                'id' => 'theme_color',
                'type' => 'select',
                'title' => __('Theme Color', thalassa_theme), 
                'sub_desc' => __('Select Your Theme or Website Color Style.', thalassa_theme),
                'desc' => '',
                'options' => array(
                    'th_red'=> __('Red', thalassa_theme),
                    'th_green'=> __('Green', thalassa_theme),
                    'th_lightblue'=> __('Light Blue', thalassa_theme),
                    'th_blue'=> __('Blue', thalassa_theme),
                    'th_yellow'=> __('Yellow', thalassa_theme),
                    'th_orange'=> __('Orange', thalassa_theme),
                    
                    
                    
                ),
                'std' => 'th_red'
            ),

            
			
			
			
			
			
			

            
            
			
		)
    );



// Header Options



$sections[] = array(
        'icon' => 'file-alt',
        'icon_class' => 'icon-large', 
        'title' => __('Header Options', thalassa_theme),
        'desc' => __('All header related options are listed here.', thalassa_theme),
        'fields' => array( 
            
            array(
                'id' => 'header_style', 
                'type' => 'select', 
                'title' => __('Header Style', thalassa_theme),
                'sub_desc' => __('Please select your Header style from here.', thalassa_theme),
                'desc' => '',
                'options' => array(
                    'default' => __('Default', thalassa_theme), 
                    'style_1' => __('style 1', thalassa_theme),
                    'style_2' => __('style 2', thalassa_theme),
                    
                    
                    
                ),
                'std' => 'default'
            ),
            
            array(
                'id' => 'cn_info',
                'type' => 'checkbox_hide_below',
                'title' => __('Want to contact Info in Header ?', thalassa_theme), 
                'sub_desc' => __('If You want to Contact Info in Your site header).', thalassa_theme),
                'desc' => '',
                'next_to_hide' => '2'
            ),

            array(
                'id' => 'info_email',
                'type' => 'text', 
                'title' => __('E-mail Address', thalassa_theme), 
                'sub_desc' => __('Write Contact e-mail Address', thalassa_theme),
                'desc' => ''  
            ),

            array(
                'id' => 'info_number',
                'type' => 'text', 
                'title' => __('Contact Number', thalassa_theme), 
                'sub_desc' => __('Write Contact number', thalassa_theme),
                'desc' => ''  
            ),

             
            
                          
        )
    );



// footer Options
    


     $sections[] = array(
        'icon' => 'file-alt',
        'icon_class' => 'icon-large',
        'title' => __('Footer Options', thalassa_theme),
        'desc' => __('All footer related options are listed here. Remember to include the "http://" in any URLs!', thalassa_theme),
        'fields' => array(
            

          
            array(
                'id' => 'cpw_pow',
                'type' => 'text',
                'title' => __('Footer Copyright Section power Text', thalassa_theme), 
                'sub_desc' => __('Please enter the copyright section text. e.g. Powred by.', thalassa_theme),
                'desc' => __('', thalassa_theme)
            ),
			
			array(
                'id' => 'cpw_wytitle',
                'type' => 'text',
                'title' => __('Newsletter Title', thalassa_theme), 
                
                'desc' => __('', thalassa_theme)
            ),
			
			array(
                'id' => 'cpw_wycontent',
                'type' => 'text',
                'title' => __('Newsletter Content', thalassa_theme), 
                
                'desc' => __('', thalassa_theme)
            ),
			
			array(
                'id' => 'cpw_wyicon',
                'type' => 'text',
                'title' => __('Newsletter Icon', thalassa_theme), 
                'sub_desc' => __('Please enter the Icon Name. e.g. (icon-envelope-alt).', thalassa_theme),
                'desc' => __('', thalassa_theme)
            ),
             
                 
            
        )
    );
    

// Blog Options



$sections[] = array(
        'icon' => 'file-alt',
        'icon_class' => 'icon-large', 
        'title' => __('Blog Options', thalassa_theme),
        'desc' => __('All Blog related options are listed here.', thalassa_theme),
        'fields' => array( 
			
			
			array(
                'id' => 'blog_type', 
                'type' => 'select', 
                'title' => __('Blog Type', thalassa_theme),
                'sub_desc' => __('Please select your blog format here.', thalassa_theme),
                'desc' => '',
                'options' => array(
                    'right' => __('Standard Blog With Right Sidebar', thalassa_theme), 
                    'left' => __('Standard Blog With left Sidebar', thalassa_theme),
                    'full' => __('Standard Blog With Full Width', thalassa_theme)
                    
                ),
                'std' => 'right'
            ), 
			
			array(
				'id' => 'blog-title', 
                'type' => 'text', 
                'title' => __('Blog Title', thalassa_theme),
                'sub_desc' => __('Please select your blog title here.', thalassa_theme),
                'desc' => '',
			),
			
			array(
				'id' => 'blog-sub-title', 
                'type' => 'text', 
                'title' => __('Blog Sub Title', thalassa_theme),
                'sub_desc' => __('Please select your blog Sub title here.', thalassa_theme),
                'desc' => '',
			),
			array(
				'id' => 'blog-sin_sub-title', 
                'type' => 'text', 
                'title' => __('Blog Singel Page Sub Title', thalassa_theme),
                'sub_desc' => __('Please select your blog Singel Page Sub title here.', thalassa_theme),
                'desc' => '',
			),
				
				
				)
				);

     
    


// Social Icon link

$sections[] = array(
		'id' => 'socialicon',
        'icon' => 'icom',
        'icon_class' => 'icon-large',
        'title' => __('Social Icon', thalassa_theme),
        'desc' => __('Social Icon for Dertails page.', thalassa_theme),
        'fields' => array( 
            

           
            
            array(
                'id'=> 'socialilink1',
                'type'=> 'text',
                'title'=> __('Twitter social Icon Link',thalassa_theme),
                'desc'=> ('Write Social Icon Link Url'),
                ),

            

            array(
                'id'=> 'socialilink2',
                'type'=> 'text',
                'title'=> __('Linkedin social Icon Link',thalassa_theme),
                'desc'=> ('Write Social Icon Link Url'),
                ),


           
            array(
                'id'=> 'socialilink3',
                'type'=> 'text',
                'title'=> __('Facebook social Icon Link',thalassa_theme),
                'desc'=> ('Write Social Icon Link Url'),
                ),

            

            array(
                'id'=> 'socialilink4',
                'type'=> 'text',
                'title'=> __('Xing social Icon Link',thalassa_theme),
                'desc'=> ('Write Social Icon Link Url'),
                ),

            
            array(
                'id'=> 'socialilink5',
                'type'=> 'text',
                'title'=> __('skype social User ID',thalassa_theme),
                'desc'=> ('Write Social ID'),
                ),
				
				


           
    )
);




  
   

    if (function_exists('wp_get_theme')){
        $theme_data = wp_get_theme();
        $item_uri = $theme_data->get('ThemeURI');
        $description = $theme_data->get('Description');
        $author = $theme_data->get('Author');
        $author_uri = $theme_data->get('AuthorURI');
        $version = $theme_data->get('Version');
        $tags = $theme_data->get('Tags');
    }else{
        $theme_data = wp_get_theme(trailingslashit(get_stylesheet_directory()) . 'style.css');
        $item_uri = $theme_data['URI'];
        $description = $theme_data['Description'];
        $author = $theme_data['Author'];
        $author_uri = $theme_data['AuthorURI'];
        $version = $theme_data['Version'];
        $tags = $theme_data['Tags'];
     }

    $item_info = '<div class="redux-opts-section-desc">';
    $item_info .= '<p class="redux-opts-item-data description item-uri">' . __('<strong>Theme URL:</strong> ', Redux_TEXT_DOMAIN) . '<a href="' . $item_uri . '" target="_blank">' . $item_uri . '</a></p>';
    $item_info .= '<p class="redux-opts-item-data description item-author">' . __('<strong>Author:</strong> ', Redux_TEXT_DOMAIN) . ($author_uri ? '<a href="' . $author_uri . '" target="_blank">' . $author . '</a>' : $author) . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-version">' . __('<strong>Version:</strong> ', Redux_TEXT_DOMAIN) . $version . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-description">' . $description . '</p>';
    $item_info .= '<p class="redux-opts-item-data description item-tags">' . __('<strong>Tags:</strong> ', Redux_TEXT_DOMAIN) . implode(', ', $tags) . '</p>';
    $item_info .= '</div>';

    $tabs['item_info'] = array(
		'icon' => 'info-sign',
		'icon_class' => 'icon-large',
        'title' => __('Theme Information', Redux_TEXT_DOMAIN),
        'content' => $item_info
    );

    if(file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
        $tabs['docs'] = array(
			'icon' => 'book',
			'icon_class' => 'icon-large',
            'title' => __('Documentation', Redux_TEXT_DOMAIN),
            'content' => nl2br(include(trailingslashit(dirname(__FILE__)) . 'README.html'))
        );
    }

    global $Redux_Options;
    $Redux_Options = new Redux_Options($sections, $args, $tabs);

}
add_action('init', 'setup_framework_options', 0);

/*
 *
 * Custom function for the callback referenced above
 *
 */
function my_custom_field($field, $value) {
    print_r($field);
    print_r($value);
}

/*
 *
 * Custom function for the callback validation referenced above
 *
 */
function validate_callback_function($field, $value, $existing_value) {
    $error = false;
    $value =  'just testing';
    /*
    do your validation

    if(something) {
        $value = $value;
    } elseif(somthing else) {
        $error = true;
        $value = $existing_value;
        $field['msg'] = 'your custom error message';
    }
    */

    $return['value'] = $value;
    if($error == true) {
        $return['error'] = $field;
    }
    return $return;
}
