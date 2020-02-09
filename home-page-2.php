<?php /*
Template Name:Home Blog Style
*/ $th_options = get_option('thalassa_theme'); 

get_Header(); 

global $show_css,$show_slider_css,$showbiz_slider_css;
		 
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
	
		if(get_post_meta($post->ID,'pyre_page_sidebar',true) == 'rightsideabr') {
		$content_css = 'float:left;';
		$sidebar_css = 'float:right;';
		
	} 
	
	else if(get_post_meta($post->ID,'pyre_page_sidebar',true) == 'leftsideabr') {
		$content_css = 'float:right;';
		$sidebar_css = 'float:left;';
		
	} 
	
	  
	
 ?>

 <!-- .rs-wrapper start -->
        <div class="rs-wrapper" style="<?php echo $show_slider_css; ?>">       
            <!-- .fullwidthbanner-container start -->
            <div class="fullwidthbanner-container">
                <!-- .fullwidthbanner start -->
                <div class="fullwidthbanner">
                 <?php echo do_shortcode( get_post_meta($post->ID,'pyre_slider_shortcode',true) ) ?>
               

                </div><!-- .fullwidthbanner end -->
            </div><!-- .fullwidthbanner-container end -->
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
                <div class="row">

                    <!-- .grid_9.blog-posts start -->
                    <ul id="blogmasonry" class="grid_9 blog-posts isotope threecols" style="<?php echo $content_css;?>">
				<?php
						global $post;
				
						$paged=(get_query_var('paged'))?get_query_var('paged'):1;
						$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=> '-1','paged'=>$paged ) ); ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post();
					?>
                        <!-- .blog-post.format-standard start -->
                        <?php if ( has_post_format( 'video' )) {
							echo '<li class="blog-post format-video isotope-item">';
							}
						else if  ( has_post_format( 'audio' )) {
							echo '<li class="blog-post format-audio soundcloud isotope-item">';
							} 
						else{echo '<li class="blog-post format-standard isotope-item">';}
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
								<img src="<?php echo $custom1[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom2 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_2', $post->ID);  ?>
                                <?php $custom2=wp_get_attachment_image_src($custom2,'featured_image_2');   ?>
								<?php if($custom2 !='') :?>
								<img src="<?php echo $custom2[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								
								 
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom3 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_3', $post->ID);  ?>
                                <?php $custom3=wp_get_attachment_image_src($custom3,'featured_image_3');?>
								<?php if($custom3 !='') :?>
								<img src="<?php echo $custom3[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom4 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_4', $post->ID);  ?>
                                <?php $custom4=wp_get_attachment_image_src($custom4,'featured_image_4');?>
								<?php if($custom4 !='') :?>
								<img src="<?php echo $custom4[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom5 = MultiPostThumbnails::get_post_thumbnail_id('post', 'featured_image_5', $post->ID);  ?>
                                <?php $custom5=wp_get_attachment_image_src($custom5,'featured_image_5');?>
								<?php if($custom5 !='') :?>
								<img src="<?php echo $custom5[0]; ?>" alt="slider-image"/>
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
								<iframe src="<?php echo ( get_post_meta($post->ID,'pyre_vimeo_link',true) ) ?>"></iframe>
								<?php endif?>
                                <div class="post-content clearfix">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>

                                    <div class="blog-meta">
                                        <ul>
                                            <li class="icon-user">
                                                <a><?php the_author(); ?> ,</a>
                                            </li>

                                            <li class="post-tags icon-tags">
                                                <?php the_tags();?>
                                            </li>
                                        </ul>
                                    </div>
									<?php if( has_post_format( 'audio' ) !='') :?>
									<iframe src="<?php echo ( get_post_meta($post->ID,'pyre_soundcloud_link',true) ) ?>"></iframe>
									<?php endif ?>
									

                                    <p>
                                        <?php echo substr(strip_tags($post->post_content), 0, 150);?>
                                    </p>
									<br/>
									<?php if( has_post_format( 'link' ) !='') :?>
									<a class="link" href="<?php echo get_post_meta($post->ID,'pyre_external_link',true);?>"><?php echo get_post_meta($post->ID,'pyre_link_text',true);?></a>
									<?php endif ?>
									
                                    <a class="read-more" href="<?php the_permalink(); ?>"><?php echo __('Read more...', 'thalassa'); ?></a>
                                </div>
                            </article>
                        </li><!-- .blog-post.format-standard end -->

                        <?php endwhile; ?>
								
						<?php wp_reset_query();?>
                    </ul><!-- .grid_9.blog-posts end -->

                    <!-- .grid_4.aside-right -->
                    <aside class="grid_3 aside-right" style="<?php echo $sidebar_css;?>">
                        <!-- .widget start -->
                        <ul class="aside_widgets">
                            
                              <?php dynamic_sidebar( 'Blog Sidebar' ); ?>  
                        </ul><!-- .aside_widgets end -->
                    </aside><!-- .grid_4.aside-right end -->
                </div><!-- .row end -->
            </section><!-- .container end -->
        </section><!-- .page-content end -->

<?php get_footer();?>