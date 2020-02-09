<?php $th_options = get_option('thalassa_theme'); ?>
 <!-- .footer-wrapper start -->
        <div class="footer-wrapper">
            <!-- .newsletter-big start -->
            <article class="newsletter-big">
                <div class="container">
                    <div class="row">
                        <article class="grid_12">
						<?php if(!empty($th_options['cpw_wyicon'])):?>
                            <div class="icon <?php echo $th_options['cpw_wyicon'] ?>"></div>
							<?php else:?>
							<div class="icon icon-envelope-alt"></div>
							<?php endif?>
                            <div class="subscribe-text">
								<?php if(!empty($th_options['cpw_wytitle'])):?>
                                <h3><?php echo $th_options['cpw_wytitle'] ?></h3>
								
								<?php else:?>
								
                                <h3><?php _e('subscribe to our newsletter feed','thalassa');?></h3>
								<?php endif?>
								<?php if(!empty($th_options['cpw_wycontent'])):?>
                                <span><?php echo $th_options['cpw_content'] ?></span>
								<?php else:?>
								<span><?php _e('WANT TO HEAR ABOUT NEW PRODUCTS? JUST ENTER YOUR EMAIL ADDRESS. WE PROMISE WE WONT SPAM YOU.','thalassa');?></span>
								<?php endif?>
                            </div>

                            <form class="newsletter">
                               <?php dynamic_sidebar( 'Subscribe Form' ); ?>
                            </form>
                        </article><!-- .grid_12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </article><!-- newsletter-big end -->

            <!-- #footer start -->
            <footer id="footer">
                <!-- .container start -->
                <div class="container">
                    <!-- .row end -->
                    <div class="row">

                        <!-- .footer-widget-container start -->
                        <ul class="footer-widget-container grid_3">
							<?php dynamic_sidebar( 'Footer Area 1' ); ?>
                            <!-- .widget.widget_text start -->
                            

                        </ul><!-- .footer-widget-container end -->
						 <!-- .footer-widget-container start -->
                        <ul class="footer-widget-container grid_3">
							<?php dynamic_sidebar( 'Footer Area 2' ); ?>
                            <!-- .widget.widget_text start -->
                            

                        </ul><!-- .footer-widget-container end -->
						 <!-- .footer-widget-container start -->
                        <ul class="footer-widget-container grid_3">
							<?php dynamic_sidebar( 'Footer Area 3' ); ?>
                            <!-- .widget.widget_text start -->
                            

                        </ul><!-- .footer-widget-container end -->
						
						<ul class="footer-widget-container grid_3">
							<?php dynamic_sidebar( 'Footer Area 4' ); ?>
                            <!-- .widget.widget_text start -->
                            

                        </ul><!-- .footer-widget-container end -->

                    

                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <!-- .copyright-container start -->
            <div class="copyright-container">
                <div class="container">
                    <div class="row">
					<?php if(!empty($th_options['cpw_pow'])):?>
                        <section class="grid_6">
                            <p><?php echo $th_options['cpw_pow'] ?></p>
                        </section>
					<?php else:?>
						<section class="grid_6">
                            <p><?php _e('Copyright Thalassa 2014. All Rights Reserved.','thalassa')?></p>
                        </section>
					<?php endif?>

                        <section class="grid_6">
                            
                                <?php

        $defaults = array(
                    'theme_location'  => 'footer-menu',
                    'menu'            => 'nav',
                    'container'       => 'ul',
                    'container_class' => '',
                    'menu_class'      => 'footer-breadcrumbs',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => new th_themeslug_walker_nav_menu
                        );
if(has_nav_menu('footer-menu')) {
                        wp_nav_menu( $defaults );
}
          else {
            echo 'No menu assigned!';
          }
                        ?>
                        </section>
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- footer-wrapper end -->
		<?php if($th_options['theme_style'] == 'dark_box') { ?>
</div>
<?php } 
else if($th_options['theme_style'] == 'light_box'){?>
</div>
<?php }?>


<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {
                'use strict';
				
jQuery('#showbizslider').showbizpro({
                    dragAndScroll: "on",
                    visibleElementsArray: [3, 3, 2, 1],
                    carousel: "off",
                    entrySizeOffset: 0,
                    allEntryAtOnce: "off",
                    ytMarkup: "<iframe src='http://www.youtube.com/embed/%%videoid%%?hd=1&amp;wmode=opaque&amp;autohide=1&amp;showinfo=0&amp;autoplay=1'></iframe>",
                    vimeoMarkup: "<iframe src='http://player.vimeo.com/video/%%videoid%%?title=0&amp;byline=0&amp;portrait=0;api=1&amp;autoplay=1'></iframe>",
                    rewindFromEnd: "off",
                    autoPlay: "off",
                    delay: 2000,
                    speed: 250
                }); //SHOWBIZ SLIDER END
				});
</script>
</body>
</html>