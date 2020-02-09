<?php /*
Template Name: Default Template Sidebar
*/
$th_options = get_option('thalassa_theme');  
 get_Header(); 
 
 global $show_css,$content_css,$sidebar_css ;
 
 if(get_post_meta($post->ID,'pyre_welcome_message_option',true) == 'default') {
		$show_css = 'display:none';
		
	}
	else	if(get_post_meta($post->ID,'pyre_welcome_message_option',true) == 'yes') {
		$show_css = 'display:block';
		
	} 
	if(get_post_meta($post->ID,'pyre_page_sidebar',true) == 'default') {
		$content_css = 'width:100%';
		$sidebar_css = 'display:none';
		
	}
	else	if(get_post_meta($post->ID,'pyre_page_sidebar',true) == 'leftsideabr') {
		$content_css = 'float:right;';
		$sidebar_css = 'float:left;';
		
	} 
	else	if(get_post_meta($post->ID,'pyre_page_sidebar',true) == 'rightsideabr') {
		$content_css = 'float:left;';
		$sidebar_css = 'float:right;';
		
	} 
 ?>
	
	<!-- #page-title start -->
        <section id="page-title" class="page-title-3">
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
       <section class="page-content">
            <!-- .container start -->
            <section class="container">
                <!-- .row start -->
                <div class="row">

                    <!-- .grid_9.blog-posts start -->
                    <article class="grid_9" style="<?php echo $content_css; ?>">
						<?php while(have_posts() ) : the_post(); ?>
						<?php the_content();?>
						<?php endwhile; wp_reset_query(); ?>
                        
                    </article><!-- .grid_9.blog-posts end -->

                    <!-- .grid_4.aside-right -->
                    <aside class="grid_3 aside-right" style="<?php echo $sidebar_css; ?>">
                        <?php dynamic_sidebar( 'Blog Sidebar' ); ?>
                    </aside><!-- .grid_4.aside-right end -->
                </div><!-- .row end -->
            </section><!-- .container end -->
        </section><!-- .page-content end -->

<?php get_footer();?>