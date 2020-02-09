<?php 
/* Template Name:Contact page with width map
*/
$th_options = get_option('thalassa_theme');  
 get_Header(); 
 
 global $show_css;
 
 if(get_post_meta($post->ID,'pyre_welcome_message_option',true) == 'default') {
		$show_css = 'display:none';
		
	}
	else	if(get_post_meta($post->ID,'pyre_welcome_message_option',true) == 'yes') {
		$show_css = 'display:block';
		
	} 
 ?>
	
	<!-- #page-title start -->
        <section class="contact02 page-title-3" id="page-title" >
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- ..grid_12 start -->
                    <div class="grid_12">

                        <div class="title">
                            <h1><?php the_title(); ?></h1>
                        </div>

                       
						<?php if(get_post_meta($post->ID,'pyre_sub_title',true) != '') :  ?> 
                        <div class="subtitle">
                            <span class="subtitle"><?php echo get_post_meta($post->ID,'pyre_sub_title',true);?></span>
                        </div>
						<?php endif ?>
						 
                    </div><!-- ..grid_12 end -->
                </div><!-- .row end -->   
            </div><!-- .container end -->         
        </section><!-- #page-title end -->
		<!-- .page-content start -->
        <section class="page-content">
            <!-- .container start -->
            <section class="container">
                <!-- .row start -->
                <div class="row" style="<?php echo $show_css; ?>">
                    <!-- .grid_12 start -->
                    <article class="grid_12">
					
					<div class="intro-note">
                            <h2><?php echo get_post_meta($post->ID,'pyre_message_title',true);?></h2>
                            <p>
                                <?php echo get_post_meta($post->ID,'pyre_message_text',true);?>
                            </p>
                        </div>
						
                    </article><!-- .grid_12 end -->
                </div><!-- .row end -->
				
		</section>
		</section>
        <!-- .page-content start -->
    
			<?php while(have_posts() ) : the_post(); ?>
			<?php the_content();?>
			<?php endwhile; wp_reset_query(); ?>
            
        <!-- .page-content end -->

<?php get_footer();?>