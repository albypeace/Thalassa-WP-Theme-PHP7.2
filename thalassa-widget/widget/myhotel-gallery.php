<?php

class Myhotel_Gallery_DeWidget extends WP_Widget {
    var $settings = array( 'title', 'address', 'mobile', 'phone','email', 'web' );

    function __construct() {
        $widget_ops = array('description' => 'Use this widget to add & view Gallery as a widget.' );
        parent::WP_Widget(false, __('MyHotel - Gallery Widget', 'myhotel'),$widget_ops);}


function widget($args, $instance) {
        $settings = $this->morpheus_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      

        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
       echo ' <ul>';
       global $post;
                $paged=(get_query_var('paged'))?get_query_var('paged'):1;
                $loop = new WP_Query( array( 'post_type' => 'accommotaion', 'posts_per_page'=> '6') );
            while ( $loop->have_posts() ) : $loop->the_post();
        echo '<li><a href="#">';
        echo the_post_thumbnail('mini');
        echo '</a></li>';
        endwhile;
        wp_reset_query();
        echo '<div class="clear"></div>
            </ul>';
        
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
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','myhotel'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
    

    <?php 

    }
}

register_widget('Myhotel_Gallery_DeWidget');