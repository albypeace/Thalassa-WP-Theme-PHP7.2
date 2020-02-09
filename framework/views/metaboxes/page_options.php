<div class="pyre_metabox">



<h2>Page Welcome Message options:</h2>



<?php $this->text('message_title', 'Message Title'); ?>
<?php $this->textarea('message_text', 'Message Text'); ?>

<?php
$this->select(	'welcome_message_option',
				'Display Message',
				array('default' => 'Default', 'yes' => 'Yes',),
				''
			);
?>


<h2>Page Subtitle options:</h2>

<?php $this->text('sub_title', 'Subtitle'); ?>


<h2>Home Page Slider options:</h2>
<?php $this->text('slider_shortcode', 'Revolution Slider Short code'); ?>

<?php
$this->select(	'use_slider',
				'Use Revolution Slider',
				array('default' => 'Default', 'yes' => 'Yes',),
				''
			);



$this->select(	'use_slider2',
				'Use Showbiz Slider',
				array('default' => 'Default', 'yes' => 'Yes',),
				''
			);
$this->select(	'select_post_type',
				'Selec Post Type',
				array('news' => 'News Item','post' => 'Blog Post', 'portfolio' => 'Portfolio Item','feature' => 'Feature Item',),
				'Select a post type for Showbiz Slider'
			);			
			

?>
<h2>Home Page Sidebar options:</h2>
<?php
$this->select(	'page_sidebar',
				'Select Sidebar Position',
				array('default' => 'Default', 'leftsideabr' => 'Left Sidebar', 'rightsidebar' => 'Right Sidebar',),
				'Use Default template Sidebar for this option'
			);
?>



</div>