<?php

class Morpheus_Contact_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'address', 'mobile', 'phone','email', 'web' );

    function __construct() {
        $widget_ops = array('description' => 'Use this widget to add any type of Contact Details as a widget.' );
        parent::WP_Widget(false, __('Morpheus - Contact Widget', 'morpheusthemes'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      
        echo '<div class="col-sm-3 contacts">';
        echo'<h2>';

        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
        echo '</h2>';
        if ( $address != '' ) {
        echo '<p>';
        echo'<span class="glyphicon glyphicon-home"></span>';
        echo'&nbsp';
        echo'&nbsp';
        
            echo $address;
        echo '</p>';
        }

        if ( $mobile != '' ) {
        echo '<p>';
        echo'<span class="glyphicon glyphicon-headphones"></span>';
        echo'&nbsp';
        echo'&nbsp';
        
            echo $mobile;
        echo '</p>';
        }

        if ( $phone != '' ) {
        echo '<p>';
        echo'<span class="glyphicon glyphicon-earphone"></span>';
        echo'&nbsp';
        echo'&nbsp';
        
            echo $phone;
        echo '</p>';
        }

        if ( $email != '' ) {
        echo '<p>';
        echo'<span class="glyphicon glyphicon-share-alt">';
        echo'&nbsp';
        
            echo $email;
        echo '</p>';
        }

        if ( $web != '' ) {
        echo '<p>';
        echo'<span class="glyphicon glyphicon-globe"></span>';
        echo'&nbsp';
        echo'&nbsp';
        
            echo $web;
        echo '</p>';
        }
        echo '</div>';
       
        
    }


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'address', 'mobile', 'phone','email','web' ) as $setting )
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
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','morpheusthemes'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:','morpheusthemes'); ?></label>
        <textarea name="<?php echo $this->get_field_name('address'); ?>" class="widefat" id="<?php echo $this->get_field_id('address'); ?>"><?php echo esc_textarea( $address ); ?></textarea>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('mobile'); ?>"><?php _e('Mobile:','morpheusthemes'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('mobile'); ?>" value="<?php echo esc_attr( $mobile ); ?>" class="widefat" id="<?php echo $this->get_field_id('mobile'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:','morpheusthemes'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr( $phone ); ?>" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('E-mail:','morpheusthemes'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo esc_attr( $email ); ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('web'); ?>"><?php _e('Web Address:','morpheusthemes'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('web'); ?>" value="<?php echo esc_attr( $web ); ?>" class="widefat" id="<?php echo $this->get_field_id('web'); ?>" />
    </p>

    <?php 

    }
}

register_widget('Morpheus_Contact_DeWidget');