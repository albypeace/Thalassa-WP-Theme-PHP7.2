<?php /*
Template Name:404 Page
*/ get_Header(); ?>
<?php $th_options = get_option('thalassa_theme'); ?>
<!-- #page-title start -->
        <section id="page-title" class="page-title-3">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- ..grid_12 start -->
                    <div class="grid_12">

                        <div class="title">
                            <h1><?php _e('404','thalassa'); ?></h1>
                        </div>

                        <div class="subtitle">
                            <span class="subtitle"><?php _e('Page not found','thalassa'); ?></span>
                        </div>
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
                    <!-- .grid_12 start -->
                    <article class="grid_12">

                        <!-- .error-page-content start -->
                        <div class="error-page-content">
                            <span class="error-page-big"><?php _e('404','thalassa'); ?></span>
                            <h1>
                                <?php _e('oops it looks you tried to read a page <br />
                                that is no longer here','thalassa'); ?>
                            </h1>
                            
                            <p>
							<?php _e('Here are some useful links that can help you 
                                with finding what you were looking for, or you 
                                can try to search again.','thalassa'); ?>
                                
                            </p>
                            
                            <br /><br />
                            
                            <section id="error-page-search">
                                <form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                                    <input id="search" name="s" type="text" placeholder="Enter your search here">
                                    <input class="search-submit" type="submit" value="Search">
                                </form>
                            </section>
                        </div><!-- .error-page-content end -->
                    </article><!-- .grid_12 end -->
                </div><!-- .row end -->
            </section><!-- .container end -->
        </section><!-- .page-content end -->
<?php get_footer(); ?>