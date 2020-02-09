<?php
/* ***************************************************** 
	 * Plugin Name: Last Tweets
	 * Description: Displays Latest Tweets.
	 * Version: 1.1
	 * Author: Weblusive
	 * Author URI: http://www.weblusive.com
	 * ************************************************** */

class Thalassa_TwiterWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Thalassa-Twiter', array( 'description' => 'Thalassa Twiter Widget for this site.' ) );
    }
	

	function widget( $args, $instance ) {
	extract( $args );
	$widget_title="";
	$username="";
	$postcount="";
	$tw_widget_id="";
		if(isset( $instance['widget_title'] ))
		{
		$widget_title = esc_attr($instance['widget_title']);
		}
		if(isset( $instance['username'] ))
		{
		$username = esc_attr($instance['username']);
		}
		if(isset( $instance['postcount'] ))
		{
		$postcount = esc_attr($instance['postcount']);
		}
		if(isset( $instance['tw_widget_id'] ))
		{
		$tw_widget_id = esc_attr($instance['tw_widget_id']);
		}
		
			echo $before_widget;


			
			 ?>
<div class="footerheadline">
<h5><?php echo $instance['widget_title']; ?></h5>
</div>
<div class="tweet">

				<a class="twitter-timeline" href="https://twitter.com/<?php echo $username; ?>" data-chrome="noheader nofooter noborders transparent" data-tweet-limit="<?php echo $postcount;?>" data-widget-id="<?php echo $tw_widget_id; ?>">Tweets by @<?php echo $username; ?></a>
				</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<?php 

			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['widget_title'] = strip_tags( $new_instance['widget_title'] );
			$instance['username'] = strip_tags( $new_instance['username'] );
			$instance['postcount'] = strip_tags( $new_instance['postcount'] );
			$instance['tw_widget_id'] = strip_tags( $new_instance['tw_widget_id'] );

			
			return $instance;
		}
		
		function form( $instance ) {

			$defaults = array(
				'widget_title' => 'Latest Tweets',
				'username' => 'webpentagon',
				'postcount' => '2',
				'tw_widget_id' => ''
			);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<div class="bottom20">
				<label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php _e('widget title:', 'Thalassa') ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" value="<?php echo $instance['widget_title']; ?>" />
			</div>

			<div class="bottom20">
				<label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e('Twitter Username (e.g., weblusive)', 'Thalassa') ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" />
			</div>
			
			<div class="bottom20">
				<label for="<?php echo $this->get_field_id( 'postcount' ); ?>"><?php _e('Number of tweets (Keep < 20)', 'Thalassa') ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'postcount' ); ?>" name="<?php echo $this->get_field_name( 'postcount' ); ?>" value="<?php echo $instance['postcount']; ?>" />
			</div>
			
			<div class="bottom20">
				<label for="<?php echo $this->get_field_id( 'tw_widget_id' ); ?>"><?php _e('Twitter Widget id (e.g., webPentagon)', 'Thalassa') ?></label>
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'tw_widget_id' ); ?>" name="<?php echo $this->get_field_name( 'tw_widget_id' ); ?>" value="<?php echo $instance['tw_widget_id']; ?>" />
			</div>
			

			

			
		<?php
		}

	}
register_widget('Thalassa_TwiterWidget');