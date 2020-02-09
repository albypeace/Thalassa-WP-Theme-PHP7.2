<?php 
/*
Template Name:Home
*/ 

$th_options = get_option('thalassa_theme'); 

get_Header(); 

global $show_css,$show_slider_css,$showbiz_slider_css;

		if(get_post_meta($post->ID,'pyre_welcome_message_option',true) == 'default') {
		$show_css = 'display:none';
		
	}
	else if(get_post_meta($post->ID,'pyre_welcome_message_option',true) == 'yes') {
		$show_css = 'display:block';
		
	} 
	if(get_post_meta($post->ID,'pyre_use_slider',true) == 'yes') {
		$show_slider_css = 'display:block';
		}
	else	if(get_post_meta($post->ID,'pyre_use_slider',true) == 'default') {
		$show_slider_css = 'display:none';
		
	}
	if(get_post_meta($post->ID,'pyre_use_slider2',true) == 'yes') {
		$showbiz_slider_css = 'display:block';
		}
	else	if(get_post_meta($post->ID,'pyre_use_slider2',true) == 'default') {
		$showbiz_slider_css = 'display:none';
		
	} 
 ?>

 <!-- .rs-wrapper start -->
        <div class="rs-wrapper" style="<?php echo $show_slider_css; ?>">       
            <!-- .fullwidthbanner-container start -->
            <div class="fullwidthbanner-container">
                <!-- .fullwidthbanner start -->
				<?php if( get_post_meta($post->ID,'pyre_slider_shortcode',true) !='') :?>
                <div class="fullwidthbanner">
                 <?php echo do_shortcode( get_post_meta($post->ID,'pyre_slider_shortcode',true) ) ?>
               

                </div><!-- .fullwidthbanner end -->
				<?php endif;?>
            </div><!-- .fullwidthbanner-container end -->
			<section class="page-content">
			<div class="row"></div>
			</section>
        </div><!-- .rs-wrapper end -->
		
		<!-- #showbizslider start -->
        <div id="showbizslider" class="showbiz-container fullwidth nopaddings" style="<?php echo $showbiz_slider_css;?>">
            <!-- .showbiz.sb-modern-skin start -->
            <div class="showbiz sb-modern-skin">
                <!-- overflowholder start -->
                <div class="overflowholder">
                    <ul>
					
					<?php
						global $post;
				
						$paged=(get_query_var('paged'))?get_query_var('paged'):1;
						$loop = new WP_Query( array( 'post_type' => get_post_meta($post->ID,'pyre_select_post_type',true) , 'posts_per_page'=> '-1','paged'=>$paged ) ); ?>
						
					<?php while ( $loop->have_posts() ) : $loop->the_post();
					?>
                        <li class="sb-modern-skin">
                            <div class="mediaholder">
                                <div class="mediaholder_innerwrap">
								
                                    <?php the_post_thumbnail('showbiz'); ?>
								
                                </div>
                            </div>

                            <div class="darkhover"></div>

                            <div class="detailholder">
                                <div class="showbiz-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                                <div class="divide20"></div>
                                <p class="excerpt">
                                    <?php echo substr(strip_tags($post->post_content), 0, 150);?>
                                    <span class="divide20"></span>
                                </p>
                                <!-- THE POST INFOS AND READ MORE BUTTON -->
                                <div class="sb-post-details leftfloat"><span class="rm15"><?php echo get_post_meta($post->ID,'pyre_select_post_type',true);?></span><span class="rm15"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></span></div>
                                <div class="sb-readmore rightfloat"><a href="<?php the_permalink(); ?>"><?php _e('READ MORE','thalassa');?></a></div>
                                <div class="sb-clear"></div><!-- END OF POST INFOS AND READ MORE BUTTON -->
                            </div>
                        </li><!-- .sb-modern-skin end -->
						<?php endwhile; ?>
						<?php wp_reset_query();?>
                        
                    </ul>
                </div><!-- overflowholder end -->
            </div><!-- .showbiz.sb-modern-skin end -->
        </div><!-- #showbizslider end -->
		
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