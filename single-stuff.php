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
                            <h1><?php _e('ABOUT ME','thalassa'); ?></h1>
                        </div>

                       
				
                        <div class="subtitle">
                            <span class="subtitle"><?php echo get_post_meta($post->ID, 'pyre_stuff_sub_title', true); ?></span>
                        </div>
						 
                    </div><!-- ..grid_12 end -->
                </div><!-- .row end -->   
            </div><!-- .container end -->         
        </section><!-- #page-title end -->
	
	<!-- .page-content start -->
        <section class="page-content">
            <!-- #content start -->
            <section class="container">
                <!-- .row start -->
                <div class="row">
					<?php while(have_posts() ) : the_post(); ?>
                    <!-- .grid_6 start -->
                    <article class="grid_6">
						<?php the_post_thumbnail ('aboutme'); ?>		
                    </article><!-- .grid_6 end -->

                    <!-- .grid_6 start -->
                    <article class="grid_6">
						
			
						
                        <h3><?php the_title();?></h3>

                        <p>
                            <?php the_content();?>
                        </p>
                        <!-- .team-social start -->
                        <ul class="team-social-links">
                            <?php if(get_post_meta($post->ID,'pyre_Twitter_link',true) != '') :  ?> 
							<li>
                                <a href="<?php echo get_post_meta($post->ID, 'pyre_Twitter_link', true); ?>" class="pixons-twitter-1"></a>
                            </li>
							<?php endif ?>
							
							<?php if(get_post_meta($post->ID,'pyre_googleplus_link',true) != '') :  ?> 
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'pyre_googleplus_link', true); ?>" class="pixons-google_plus"></a>
                            </li>
								<?php endif ?>
                            
							<?php if(get_post_meta($post->ID,'pyre_linkedin_link',true) != '') :  ?> 
							<li>
                                <a href="<?php echo get_post_meta($post->ID, 'pyre_linkedin_link', true); ?>" class="pixons-linkedin"></a>
                            </li>
							<?php endif ?>
							
							<?php if(get_post_meta($post->ID,'pyre_facebook_link',true) != '') :  ?> 
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'pyre_facebook_link', true); ?>" class="pixons-facebook-1"></a>
                            </li>
							<?php endif ?>
							
							<?php if(get_post_meta($post->ID,'pyre_xing_link',true) != '') :  ?> 
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'pyre_xing_link', true); ?>" class="pixons-xing"></a>
                            </li>
							<?php endif ?>
							
							<?php if(get_post_meta($post->ID,'pyre_skype_link',true) != '') :  ?> 
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'pyre_skype_link', true); ?>" class="pixons-skype"></a>
                            </li>
							<?php endif ?>
                        </ul><!-- .team-social end -->
						
                    </article><!-- .grid_6 end -->
                </div><!-- .row end -->

                <!-- .row start -->
                <div class="row">
                    <!-- .grid_7 start -->
                    <article class="grid_7">
                        <h3><?php echo get_post_meta($post->ID, 'pyre_stuff_headline', true); ?></h3>
                        <!-- .accordion start -->
                        <section class="accordion">
							<?php if(get_post_meta($post->ID,'pyre_experience_title1',true) != '') :  ?> 
                            <div class="title active">
                                <a href="#">
                                    <span class='icon icon-star-empty'></span>
                                   <?php echo get_post_meta($post->ID, 'pyre_experience_title1', true); ?> 
                                </a>
                            </div>
							
                            <div class="content">
                                <p>
                                    <?php echo get_post_meta($post->ID, 'pyre_experience_text1', true); ?>  
                                </p>
                            </div><!-- .content end -->
								<?php endif ?>
								
							<?php if(get_post_meta($post->ID,'pyre_experience_title2',true) != '') :  ?> 
                            <div class="title">
                                <a href="#">
                                    <span class='icon icon-star-empty'></span>
                                   <?php echo get_post_meta($post->ID, 'pyre_experience_title2', true); ?> 
                                </a>
                            </div>
							
                            <div class="content">
                                <p>
                                    <?php echo get_post_meta($post->ID, 'pyre_experience_text2', true); ?>  
                                </p>
                            </div><!-- .content end -->
								<?php endif ?>
								
							<?php if(get_post_meta($post->ID,'pyre_experience_title3',true) != '') :  ?> 
                            <div class="title">
                                <a href="#">
                                    <span class='icon icon-star-empty'></span>
                                   <?php echo get_post_meta($post->ID, 'pyre_experience_title3', true); ?> 
                                </a>
                            </div>
							
                            <div class="content">
                                <p>
                                    <?php echo get_post_meta($post->ID, 'pyre_experience_text3', true); ?>  
                                </p>
                            </div><!-- .content end -->
								<?php endif ?>	
								
								<?php if(get_post_meta($post->ID,'pyre_experience_title4',true) != '') :  ?> 
                            <div class="title">
                                <a href="#">
                                    <span class='icon icon-star-empty'></span>
                                   <?php echo get_post_meta($post->ID, 'pyre_experience_title4', true); ?> 
                                </a>
                            </div>
							
                            <div class="content">
                                <p>
                                    <?php echo get_post_meta($post->ID, 'pyre_experience_text4', true); ?>  
                                </p>
                            </div><!-- .content end -->
								<?php endif ?>
								
							<?php if(get_post_meta($post->ID,'pyre_experience_title5',true) != '') :  ?> 
                            <div class="title">
                                <a href="#">
                                    <span class='icon icon-star-empty'></span>
                                   <?php echo get_post_meta($post->ID, 'pyre_experience_title5', true); ?> 
                                </a>
                            </div>
							
                            <div class="content">
                                <p>
                                    <?php echo get_post_meta($post->ID, 'pyre_experience_text5', true); ?>  
                                </p>
                            </div><!-- .content end -->
								<?php endif ?>	
                            
                        </section><!-- .accordion end -->
                    </article><!-- .grid_7 end -->

                    <!-- .grid_5 start -->
                    <article class="grid_5">
                        <h3><?php echo get_post_meta($post->ID, 'pyre_skills_headline', true); ?></h3>

                        <!-- .skills-bar -->
                        <article class="skills-bar">
                            <ul class="skills">
                                
								<?php if(get_post_meta($post->ID,'pyre_skill_title1',true) != '') :  ?> 
								<li>
                                    <span class="expand percentage-<?php echo get_post_meta($post->ID, 'pyre_skill_percentage1', true); ?>"></span>
                                    <em><?php echo get_post_meta($post->ID, 'pyre_skill_title1', true); ?></em>
                                </li>
								<?php endif ?>
								
								<?php if(get_post_meta($post->ID,'pyre_skill_title2',true) != '') :  ?> 
								<li>
                                    <span class="expand percentage-<?php echo get_post_meta($post->ID, 'pyre_skill_percentage2', true); ?>"></span>
                                    <em><?php echo get_post_meta($post->ID, 'pyre_skill_title2', true); ?></em>
                                </li>
								<?php endif ?>
								
								<?php if(get_post_meta($post->ID,'pyre_skill_title3',true) != '') :  ?> 
								<li>
                                    <span class="expand percentage-<?php echo get_post_meta($post->ID, 'pyre_skill_percentage3', true); ?>"></span>
                                    <em><?php echo get_post_meta($post->ID, 'pyre_skill_title3', true); ?></em>
                                </li>
								<?php endif ?>
								
								<?php if(get_post_meta($post->ID,'pyre_skill_title4',true) != '') :  ?> 
								<li>
                                    <span class="expand percentage-<?php echo get_post_meta($post->ID, 'pyre_skill_percentage4', true); ?>"></span>
                                    <em><?php echo get_post_meta($post->ID, 'pyre_skill_title4', true); ?></em>
                                </li>
								<?php endif ?>
								
								<?php if(get_post_meta($post->ID,'pyre_skill_title5',true) != '') :  ?> 
								<li>
                                    <span class="expand percentage-<?php echo get_post_meta($post->ID, 'pyre_skill_percentage5', true); ?>"></span>
                                    <em><?php echo get_post_meta($post->ID, 'pyre_skill_title5', true); ?></em>
                                </li>
								<?php endif ?>

                                
                            </ul>
                        </article><!-- .skills-bar end -->
                    </article><!-- .grid_5 end --> 
                </div>
				<?php endwhile; wp_reset_query(); ?>
				<!-- .row end -->
            </section><!-- .container end -->
        </section><!-- .page-content end -->

<?php get_footer();?>