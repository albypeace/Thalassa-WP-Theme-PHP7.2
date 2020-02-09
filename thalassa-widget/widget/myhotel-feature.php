<?php

class Myhotel_Feature_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'address','add', 'mobile','mob', 'phone','phn','email','em','web','wb'  );

    function __construct() {
        $widget_ops = array('description' => 'Use this widget to add all your Feature as a widget.' );
        parent::WP_Widget(false, __('Myhotel - Feature Widget', 'morpheusthemes'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      

        
       echo ' <div class="accordion">';
       if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;

              echo '<div id="accordion-container">';
                 if ( $address != '' ) { 
                  echo   '<h2 class="accordion-header">';
                  echo $address;
                  echo '</h2>';
                  echo '<div class="accordion-content">'; 
                  echo '<p>';
                  echo $add;
                  echo '</p>'; 
                  echo '</div>'; 
                 }
                 if ( $mobile != '' ) { 
                  echo   '<h2 class="accordion-header">';
                  echo $mobile;
                  echo '</h2>';
                  echo '<div class="accordion-content">'; 
                  echo '<p>';
                  echo $mob;
                  echo '</p>'; 
                  echo '</div>'; 
                 }

                 if ( $phone != '' ) { 
                  echo   '<h2 class="accordion-header">';
                  echo $phone;
                  echo '</h2>';
                  echo '<div class="accordion-content">'; 
                  echo '<p>';
                  echo $phn;
                  echo '</p>'; 
                  echo '</div>'; 
                 }

                 if ( $email != '' ) { 
                  echo   '<h2 class="accordion-header">';
                  echo $email;
                  echo '</h2>';
                  echo '<div class="accordion-content">'; 
                  echo '<p>';
                  echo $em;
                  echo '</p>'; 
                  echo '</div>'; 
                 }
                 if ( $web != '' ) { 
                  echo   '<h2 class="accordion-header">';
                  echo $web;
                  echo '</h2>';
                  echo '<div class="accordion-content">'; 
                  echo '<p>';
                  echo $wb;
                  echo '</p>'; 
                  echo '</div>'; 
                 }
               echo '</div>';
               echo '</div>';              
    }


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'address','add', 'mobile','mob', 'phone','phn','email','em','web','wb' ) as $setting )
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
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Feature title 1:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo esc_attr( $address ); ?>" class="widefat" id="<?php echo $this->get_field_id('address'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('add'); ?>"><?php _e('Feature 1:','myhotel'); ?></label>
        <textarea name="<?php echo $this->get_field_name('add'); ?>" class="widefat" id="<?php echo $this->get_field_id('add'); ?>"><?php echo esc_textarea( $add ); ?></textarea>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('mobile'); ?>"><?php _e('Feature title 2:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('mobile'); ?>" value="<?php echo esc_attr( $mobile ); ?>" class="widefat" id="<?php echo $this->get_field_id('mobile'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('mob'); ?>"><?php _e('Feature 2:','myhotel'); ?></label>
        <textarea name="<?php echo $this->get_field_name('mob'); ?>" class="widefat" id="<?php echo $this->get_field_id('mob'); ?>"><?php echo esc_textarea( $mob ); ?></textarea>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Feature title 3:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr( $phone ); ?>" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('phn'); ?>"><?php _e('Feature 3:','myhotel'); ?></label>
        <textarea name="<?php echo $this->get_field_name('phn'); ?>" class="widefat" id="<?php echo $this->get_field_id('phn'); ?>"><?php echo esc_textarea( $phn ); ?></textarea>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Feature title 4:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo esc_attr( $email ); ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('em'); ?>"><?php _e('Feature 4:','myhotel'); ?></label>
        <textarea name="<?php echo $this->get_field_name('em'); ?>" class="widefat" id="<?php echo $this->get_field_id('em'); ?>"><?php echo esc_textarea( $em ); ?></textarea>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('web'); ?>"><?php _e('Feature title 5:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('web'); ?>" value="<?php echo esc_attr( $web ); ?>" class="widefat" id="<?php echo $this->get_field_id('web'); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('wb'); ?>"><?php _e('Feature 4:','myhotel'); ?></label>
        <textarea name="<?php echo $this->get_field_name('wb'); ?>" class="widefat" id="<?php echo $this->get_field_id('em'); ?>"><?php echo esc_textarea( $em ); ?></textarea>
    </p>

    <?php 

    }
}

register_widget('Myhotel_Feature_DeWidget');