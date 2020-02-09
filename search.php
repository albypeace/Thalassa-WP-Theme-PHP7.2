<?php  $th_options = get_option('thalassa_theme'); 

get_Header(); 
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
				
                        <div class="title">
                            <h1><?php _e('Search','thalassa');?></h1>
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
                    <ul class="grid_9 blog-posts" style="<?php echo $content_css; ?>">
						<article class="post-content-container">	
							<span class="search-subtitle"><?php printf( __( 'Search Results for: %s', 'thalassa' ), '<span>' . get_search_query() . '</span>' ); ?></span>
						</article>
                        <!-- .blog-post.format-standard start -->
						<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php

                        get_template_part( 'content', get_post_format() );
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <li class="blog-post format-standard">
                            

                            <article class="post-content-container">
                                

                                <div class="post-content clearfix">
                                    <?php if(!$data['post_meta_read']): ?><a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a><?php endif; ?>

                                    <div class="blog-meta">
                                        <ul>
                                            <li class="icon-user">
                                                <a> <?php the_author(); ?> ,</a>
                                            </li>

                                            <li class="post-tags icon-tags">
                                                <?php the_tags();?>
                                            </li>
											<li class="post-tags icon-folder">
                                               Categories:<a><?php $categories = get_the_category(); foreach($categories as $category) { echo $category->name . ' '; } ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>

                                    <?php if(!$data['post_meta_read']): ?><a class="read-more" href="<?php the_permalink(); ?>"><?php echo __('Read more...', 'thalassa'); ?></a><?php endif; ?>
                                </div>
                            </article>
                        </li><!-- .blog-post.format-standard end -->
						<?php endwhile; ?>
						
						
						<?php else : ?>
						
						<div class="entry-content">
                        <p><?php _e( 'Sorry! </br>Nothing matched your search criteria. </br>Please try again with some different keywords.','thalassa' ); ?></p>

                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

            <?php endif; ?>
                        <!-- .blog-post.format-gallery start -->
                       <li class="pagination">
                            <ul>
                                <?php if (function_exists("pagination")) {

								pagination($wp_query->max_num_pages);
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