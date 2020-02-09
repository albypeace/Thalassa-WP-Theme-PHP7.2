<?php /*
Template Name: Blog Main
*/ $th_options = get_option('thalassa_theme'); 

get_Header(); 

global $content_css, $sidebar_css;
		if($th_options['blog_type'] == 'full') {
		$content_css = 'width:100%';
		$sidebar_css = 'display:none';
		
	}
	  else	if($th_options['blog_type'] == 'left') {
		$content_css = 'float:right;';
		$sidebar_css = 'float:left;';
		
		
	} else if($th_options['blog_type'] == 'right') {
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
					<?php if(!empty($th_options['blog-title'])):?>
						<div class="title">
                            <h1><?php echo $th_options['blog-title'] ?></h1>
                        </div>
					<?php else:?>
					<div class="title">
                            <h1><?php _e('Our Blog','thalassa');?></h1>
                        </div>
					 <?php endif?>
				<?php if(!empty($th_options['blog-sub-title'])):?>
						<div class="subtitle">
                            <span class="subtitle"><?php echo $th_options['blog-sub-title'] ?></span>
                        </div>
				<?php else:?>
				
                        <div class="subtitle">
                            <span class="subtitle"><?php _e('Our Blog Sub Title','thalassa');?></span>
                        </div>
						 <?php endif?>
                    </div><!-- ..grid_12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->         
        </section><!-- #page-title end -->

        <!-- .page-content start -->
        <section class="page-content">
            <!-- .container start -->
            <section class="container">
                <!-- .row start -->
                <div class="row">

                    <!-- .grid_9.blog-posts start -->
                    <ul class="grid_9 blog-posts" style="<?php echo $content_css; ?>">

                        <!-- .blog-post.format-standard start -->
						<?php
						global $post;
				
						$paged=(get_query_var('paged'))?get_query_var('paged'):1;
						$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=> '10','paged'=>$paged ) ); ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<?php if ( has_post_format( 'video' )) {
							echo '<li class="blog-post format-video">';
							}
						else if  ( has_post_format( 'audio' )) {
							echo '<li class="blog-post format-audio soundcloud">';
							} 
						else{echo '<li class="blog-post format-standard">';}
							?>
                        
                            <div class="post-info">
                                <div class="post-category">
										<?php if ( has_post_format( 'video' )) {
										  echo '<i class="icon-film"></i>';
										} 
										 else if  ( has_post_format( 'audio' )) {
										 echo '<i class="icon-music"></i>';
										} 
										 else if  ( has_post_format( 'image' )) {
										  echo '<i class="icon-image"></i>';
										} 
										  else if  ( has_post_format( 'gallery' )) {
										  echo '<i class="icon-images"></i>';
										} 
										  else if ( has_post_format( 'link' )) {
										  echo '<i class="icon-link"></i>';
										}  else{echo '<i class="icon-pushpin"></i>';}
										?>
								
								</div>
                                <div class="post-date">
                                   <span class="day"><?php echo get_the_date('d') ?></span>
                                    <span class="month"><?php echo get_the_date('M') ?></span>
                                </div>
                            </div><!-- .post-info end -->

                            <article class="post-content-container">
							<?php if( has_post_format( 'gallery' ) !='') :?>
							<?php if(has_post_thumbnail( $post->ID ) !='') :?>
							<div class="slider-wrapper">
                                    <!-- #slider .nivoSlider .image-slider start -->
                                    <section id="slider" class="nivoSlider">
                                 <?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $custom1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<?php if($custom1 !='') :?>
								<img src="<?php echo $custom1[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								
								
                                    </section><!-- #slider .nivoSlider .image-slider end -->
                                </div>
							<?php endif ?>
							<?php endif ?>
							
							<?php if( has_post_format( 'image' ) !='') :?>
                                <div class="post-image-container">
                                    <a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail( $post->ID ) ):
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>
                                        <img src="<?php echo $image[0];?>"/>
									<?php endif;?>
                                    </a>
                                </div>
								<?php endif ?>
								<?php if( has_post_format( 'video' ) !='') :?>
								<?php if( get_post_meta($post->ID,'pyre_vimeo_link',true) !='') :?>
								<iframe src="<?php echo ( get_post_meta($post->ID,'pyre_vimeo_link',true) ) ?>"></iframe>
								<?php endif?>
								<?php endif?>

                                <div class="post-content clearfix">
                                   
                                        <a href="<?php the_permalink(); ?>">
											<h3><?php the_title(); ?></h3>
										</a>
                                    

                                    <div class="blog-meta">
                                        <ul>
                                            <li class="icon-user">
                                                <a><?php the_author(); ?></a>
                                            </li>

                                            <li class="post-tags icon-comment tha-ico">
                                                <a href=""><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></a>
                                            </li>
                                        </ul>
                                    </div>
										<?php if( has_post_format( 'audio' ) !='') :?>
										<?php if( get_post_meta($post->ID,'pyre_soundcloud_link',true) !='') :?>
									<iframe src="<?php echo ( get_post_meta($post->ID,'pyre_soundcloud_link',true) ) ?>"></iframe>
									<?php endif ?>
									<?php endif ?>
                                    <p>
                                         <?php echo substr(strip_tags($post->post_content), 0, 150);?>
                                    </p>
									<br/>
									<?php if( has_post_format( 'link' ) !='') :?>
									<?php if( get_post_meta($post->ID,'pyre_soundcloud_link',true) !='') :?>
									<a class="link" href="<?php echo get_post_meta($post->ID,'pyre_external_link',true);?>"><?php echo get_post_meta($post->ID,'pyre_link_text',true);?></a>
									<?php endif ?>
									<?php endif ?>

                                    <a class="read-more" href="<?php the_permalink(); ?>"><?php echo __('Read more...', 'thalassa'); ?></a>
                                </div>
                            </article>
                        </li><!-- .blog-post.format-standard end -->
						<?php endwhile; ?>
								
						<?php wp_reset_query();?>
                        <!-- .blog-post.format-gallery start -->
                         <!-- .pagination start -->
                        <li class="pagination">
                            <ul>
                                <?php if (function_exists("pagination")) {

								pagination($loop->max_num_pages);
							} ?>
                            </ul><!-- pagination end -->  
                        </li>
                    </ul><!-- .grid_9.blog-posts end -->

                    <!-- .grid_4.aside-right -->
                    <aside class="grid_3 aside-right" style="<?php echo $sidebar_css; ?>">
					<?php dynamic_sidebar( 'Blog Sidebar' ); ?>
                        <!-- .widget start -->
                        <!-- .aside_widgets end -->
                    </aside><!-- .grid_4.aside-right end -->
                </div><!-- .row end -->
            </section><!-- .container end -->
        </section><!-- .page-content end -->

     
<?php get_footer(); ?>