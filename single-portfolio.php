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
                            <h1><?php _e('PORTFOLIO SINGLE','thalassa'); ?></h1>
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
<section class="page-content">
            <!-- .container start -->
            <section class="container">
                <!-- .row start -->
                <div class="row">
                    <article class="grid_7">
					<?php if(has_post_thumbnail( $post->ID ) !='') :?>
                        <div class="slider-wrapper">
                            <!-- #slider .nivoSlider .image-slider start -->
                            <section id="slider" class="nivoSlider image-slider">
                                <?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $custom1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo $custom1[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom2 = MultiPostThumbnails::get_post_thumbnail_id('portfolio', 'featured_image_2', $post->ID);  ?>
                                <?php $custom2=wp_get_attachment_image_src($custom2,'featured_image_2');   ?>
								<?php if($custom2 !='') :?>
								<img src="<?php echo $custom2[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								
								 
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom3 = MultiPostThumbnails::get_post_thumbnail_id('portfolio', 'featured_image_3', $post->ID);  ?>
                                <?php $custom3=wp_get_attachment_image_src($custom3,'featured_image_3');?>
								<?php if($custom3 !='') :?>
								<img src="<?php echo $custom3[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom4 = MultiPostThumbnails::get_post_thumbnail_id('portfolio', 'featured_image_4', $post->ID);  ?>
                                <?php $custom4=wp_get_attachment_image_src($custom4,'featured_image_4');?>
								<?php if($custom4 !='') :?>
								<img src="<?php echo $custom4[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
								
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $custom5 = MultiPostThumbnails::get_post_thumbnail_id('portfolio', 'featured_image_5', $post->ID);  ?>
                                <?php $custom5=wp_get_attachment_image_src($custom5,'featured_image_5');?>
								<?php if($custom5 !='') :?>
								<img src="<?php echo $custom5[0]; ?>" alt="slider-image"/>
								<?php endif ?>
								<?php endif ?>
                            </section><!-- #slider .nivoSlider .image-slider end -->
                        </div>
						<?php endif ?>
                    </article><!-- .grid_7 end -->

                    <article class="grid_5">
					<?php while(have_posts() ) : the_post(); ?>
                        <h3><?php the_title(); ?></h3>
						
						 <ul class="list-classic">
                            <li>
                                <span class="text-dark"><?php _e('Model:','thalassa'); ?> </span>
                                <?php echo get_post_meta($post->ID,'pyre_model_name',true);?>

                            <li>
                                <span class="text-dark"><?php _e('Client:','thalassa');?> </span>
                                <?php echo get_post_meta($post->ID,'pyre_client_name',true);?>
                            </li>

                            <li>
                                <span class="text-dark"><?php _e('Date:','thalassa');?> </span>
                                <?php echo get_post_meta($post->ID,'pyre_date',true);?>
                            </li>
                        </ul>

                        <br />

                        <?php the_content();?>

                        <!-- .share-post start -->
                        <article class="share-post">
                            <span>Share this project:</span>
                            <div id="shareme" data-url="<?php the_permalink(); ?>"></div>
                        </article><!-- share-post end -->
						<?php endwhile; wp_reset_query(); ?>
                    </article><!-- .grid_5 end -->
                </div><!-- .row end -->

                <!-- .row start -->
                <div class="row sin-cursol">
                    <article class="grid_12 portfolio-carousel">
                        <div class="carousel-title">
                            <h3><?php _e('related projects','thalassa'); ?></h3>

                            <div class="carousel-nav-container">
                                <ul class="carousel-nav">
                                    <li>
                                        <a class="c_prev" href="#"></a> 
                                    </li>
                                    <li>
                                        <a class="c_next" href="#"></a>
                                    </li>
                                </ul>
                            </div><!-- .carousel-nav-container -->
                        </div><!-- .carousel-title end -->

                        <ul id="portfolio-carousel" class="carousel-li">
						<?php
						$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => -1,'post_type' => 'portfolio', 'post__not_in' => array($post->ID) ) );
						if( $related ) foreach( $related as $post ) {
						setup_postdata($post); 
						?>
						
                            <li class="grid_3 isotope-item carousel-four-cols">
                                <figure class="portfolio-style-1">

                                    <div class="portfolio-img">
                                        <a href="<?php the_permalink(); ?>">
										
                                            <?php the_post_thumbnail('feature');?>
											
                                        </a>

                                        <div class="portfolio-img-hover">
                                            <div class="mask"></div>

                                            <ul>
											<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $custom1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                                <li class="portfolio-zoom">
                                                    <a href="<?php echo $custom1[0]; ?>" 
                                                       data-gal="prettyPhoto[pp_gallery]" class="icon-search"></a>
                                                </li>
												<?php endif ?>

                                                <li class="portfolio-single">
                                                    <a href="<?php the_permalink(); ?>" class="icon-link"></a>
                                                </li>
                                            </ul>
                                        </div><!-- .portfolio-img-hover end -->
                                    </div><!-- .portfolio-img end -->

                                    <figcaption>
                                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <span class="subtitle">
										<?php $portfolio_category = wp_get_post_terms($post->ID,'portfolio_category'); ?>
										<?php foreach ($portfolio_category as $item) echo $item->name . ' '; ?>
										
										</span>
                                    </figcaption>
                                </figure><!-- .portfolio-style-2 end --> 
                            </li>
						
							<?php }
							wp_reset_postdata(); ?><!-- .isotope-item end -->

                            
                        </ul><!-- .carousel-li end -->
                    </article><!-- .grid_12 end -->
                </div><!-- .row end -->
            </section><!-- .container end -->
        </section>
		
		
<?php get_footer();?>