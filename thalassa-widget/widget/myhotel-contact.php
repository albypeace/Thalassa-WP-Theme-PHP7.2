<?php

class Thalassa_Contact_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'address','phone','email');

    function __construct() {
        $widget_ops = array('description' => 'Use this widget to add any type of Contact Details as a widget.' );
        parent::WP_Widget(false, __('Thalassa - Contact Widget', 'thalassa'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      
        
        
        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
        
		echo '<ul class="contact-info th_footer_widget">';
		
        if ( $address != '' ) {
		echo '<li>';
		echo '<span class="icon icon-home"></span>';
        echo '<p>';
			  echo 'Adress:';
              echo $address;
        echo '</p>';
		echo '</li>';
        }

        
        if ( $phone != '' ) {
		echo '<li>';
		echo '<span class="icon icon-phone-sign"></span>';
        echo '<p class="f-phone">';
		echo 'Telephone:';
        echo $phone;
        echo '</p>';
		echo '</li>';
        }

        if ( $email != '' ) {
		echo '<li>';
		echo '<span class="icon icon-envelope-alt"></span>';
        echo '<p class="f-mail">';
		echo 'Email:';
        echo $email;
        echo '</p>';
		echo '</li>';
        }
             
       echo '</ul>'; 
    }


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'address','phone','email' ) as $setting )
            $new_instance[$setting] = strip_tags( $new_instance[$setting] );
        // Users without unfiltered_html cannot update this arbitrary HTML field
        if ( !current_user_can( 'unfiltered_html' ) )
            $new_instance['address'] = $old_instance['address'];
        return $new_instance;
    }


    function morpheus_get_settings() {
        // Set the default to a blank string
        $settings = array_fill_keys( $this->settings, '' );
        // Now set the more specific defaults
        return $settings;
    }

    function form($instance) {
        $instance = wp_parse_args( $instance, $this->morpheus_get_settings() );
        extract( $instance, EXTR_SKIP );
?>

    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','thalassa'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:','thalassa'); ?></label>
        <textarea name="<?php echo $this->get_field_name('address'); ?>" class="widefat" id="<?php echo $this->get_field_id('address'); ?>"><?php echo esc_textarea( $address ); ?></textarea>
    </p>
    
    <p>
        <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:','thalassa'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr( $phone ); ?>" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('E-mail:','thalassa'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo esc_attr( $email ); ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
    </p>
    

    <?php 

    }
}

register_widget('Thalassa_Contact_DeWidget');