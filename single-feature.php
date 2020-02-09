<?php $th_options = get_option('thalassa_theme');  
 get_Header(); 
 
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
                            <h1><?php _e('FEATURE','thalassa'); ?></h1>
                        </div>

                       <?php if(!empty($th_options['slogan'])):?>
						<div class="subtitle">
                            <span class="subtitle"><?php echo $th_options['slogan'] ?></span>
                        </div>
						<?php else:?>
				
                        <div class="subtitle">
                            <span class="subtitle"><?php _e('Slogan','thalassa');?></span>
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
                    <ul class="grid_9 blog-posts">

                        <!-- .blog-post.format-standard start -->
                        <?php if ( has_post_format( 'video' )) {
							echo '<li class="blog-post format-video">';
							}
						else if  ( has_post_format( 'audio' )) {
							echo '<li class="format-audio soundcloud">';
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
							<?php if(have_posts()): the_post(); ?>
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
                                    
                               <?php the_post_thumbnail('full'); ?>
                                    
                                </div>
								<?php endif?>
								<?php if( has_post_format( 'video' ) !='') :?>
								<?php if( get_post_meta($post->ID,'pyre_vimeo_link',true)  !='') :?>
								<iframe src="<?php echo ( get_post_meta($post->ID,'pyre_vimeo_link',true) ) ?>"></iframe>
								
								<?php endif ?>
								<?php endif ?>
								
                                <div class="post-content clearfix">
                                    <a href="#">
                                        <h3><?php the_title(); ?></h3>
                                    </a>

                                    <div class="blog-meta">
                                        <ul>
                                            <li class="icon-user">
                                                <a><?php the_author();?>,</a>
                                            </li>

                                            <li class="post-tags icon-tags">
                                                <?php the_tags();?>
                                            </li>
											<li class="post-tags icon-folder">
                                               <?php _e('Categories:','thalassa');?><a><?php $categories = get_the_category(); foreach($categories as $category) { echo $category->name . ' '; } ?></a>
                                            </li>
                                        </ul>
                                    </div>
									<div class="thal-test">
									<?php if( has_post_format( 'audio' ) !='') :?>
									<?php if( get_post_meta($post->ID,'pyre_soundcloud_link',true) !='') :?>
									<iframe src="<?php echo ( get_post_meta($post->ID,'pyre_soundcloud_link',true) ) ?>"></iframe>
									<?php endif ?>		
									<?php endif ?>		
                                    <p>
                                       <?php the_content(); ?> 
									  
                                    </p>
									<div class="clearfix"></div>
									<ul>
									<?php wp_link_pages();?>
									</ul>
									
									<br/>
									<?php if( has_post_format( 'link' ) !='') :?>
									<a class="link" href="<?php echo get_post_meta($post->ID,'pyre_external_link',true);?>"><?php echo get_post_meta($post->ID,'pyre_link_text',true);?></a>
									<?php endif ?>
									
                                    <!-- .share-post start -->
									
                                </div>    
                                </div>
								<?php endif ?>	
                                

                                <!-- .post-comments start -->
                               

                               

                            </article><!-- .post-content-container end -->
                        </li><!-- .blog-post.format-standard end -->

                    </ul><!-- .grid_9.blog-posts end -->

                    <!-- .grid_4.aside-right -->
                    <aside class="grid_3 aside-right">
                        <!-- .widget start -->
                        <ul class="aside_widgets">
                            <?php dynamic_sidebar( 'Blog Sidebar' ); ?>

                        </ul><!-- .aside_widgets end -->
                    </aside><!-- .grid_4.aside-right end -->

                </div><!-- .row end -->
            </section><!-- .container end -->
        </section><!-- .page-content end -->
<?php get_footer();?>