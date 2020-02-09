<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">
<?php $th_options = get_option('thalassa_theme'); ?>
  
  
  
 <title>
<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>
<?php wp_title(); ?>
</title>
<?php if(!empty($th_options['favicon'])): ?>
  <link rel="shortcut icon" href="<?php echo $th_options['favicon']?>" />
  <?php else:?>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png?>" />
<?php endif?>

 


<?php wp_head(); ?>  
</head>
<?php if($th_options['theme_style'] == 'dark_box') { ?>
<body class="pattern4" <?php body_class();?>>
<div class="page-wrap clearfix">
<?php } 
else if($th_options['theme_style'] == 'light_box'){?>
<body class="pattern4" <?php body_class();?>>
<div class="page-wrap clearfix">
<?php }?>
<body <?php body_class();?>> 

<!-- Start Header -->
<?php if($th_options['header_style'] == 'default') { ?>
  <!-- .header-wrapper start -->
        <div class="header-wrapper">
            <!-- .container start -->
            <div class="container">
                <!-- #header start -->
                <header id="header">
                    <!-- .row start -->
                    <div class="row">
					<?php if(!empty($th_options['logo'])):?>
                        <div class="grid_6">
                            <!-- #logo start -->
                            <section id="logo">
                                <a href="<?php echo home_url() ?>"><img src="<?php echo $th_options['logo'] ?>" alt=""></a>
                                </a>
                            </section><!-- #logo end -->
                        </div>
						<?php else:?>
						<!-- .grid_6 start -->
						<div class="grid_6">
                            <!-- #logo start -->
                            <section id="logo">
                                <a href="<?php echo home_url() ?>">
                                    <img src="<?php echo get_template_directory_uri()?>/includes/img/logo.png" alt="logo" />
                                </a>
                            </section><!-- #logo end -->
                        </div>
						 <?php endif?>
						<!-- .grid_6 start -->

                        <div class="grid_6">
                            <!-- social-info start -->
                            <section class="social-info">

                                <!-- .social-links start -->
								
                                
								
								<ul class="social-links">
								<?php if(!empty($th_options['socialilink1'])):?>
                                    <li>
                                        <a href="<?php echo $th_options['socialilink1'] ?>" class="pixons-twitter-1"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink2'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink2'] ?>" class="pixons-linkedin"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink3'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink3'] ?>" class="pixons-facebook-1"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink4'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink4'] ?>" class="pixons-xing"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink5'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink5'] ?>" class="pixons-skype"></a>
                                    </li>
									
									<?php endif?>
                                </ul><!-- .social-links end -->
								
                                <!-- .info start -->
                                <ul class="info">
								<?php if(!empty($th_options['info_email'])):?>
                                    <li class="email">
                                        <a class="email-icon icon-envelope-alt" href="#" title="Click me"></a>
                                        <a class="email-input" href="mailto:<?php echo $th_options['info_email'] ?>"><?php echo $th_options['info_email'] ?></a>
                                    </li>
								<?php endif ?>
								<?php if(!empty($th_options['info_number'])):?>
                                    <li class="phone">
                                        <a class="phone-icon icon-phone-sign" href="#" title="Click me"></a>
                                        <a class="phone-input" href="#"><?php echo $th_options['info_number'] ?></a>
                                    </li>
								<?php endif ?>
                                </ul><!-- .info end -->
                            </section><!-- .social-info end -->
                        </div><!-- .grid_6 end -->
                    </div><!-- row end -->

                    <div class="clearfix"></div>

                    <!-- .row+ start -->
                    <div class="row">
                        <!-- grid_12 start -->
                        <div class="grid_12">
                            <!-- #nav-container start -->
                            <section id="nav-container">

                                <!-- #nav start -->
                                <nav id="nav">
									<?php

										$defaults = array(
													'theme_location'  => 'primary-menu',
													'menu'            => 'nav',
													'container'       => 'ul',
													'container_class' => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
													'depth'           => 0,
													'walker'          => '',
														);
								if(has_nav_menu('primary-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo 'No menu assigned!';
										  }
														?>
                                </nav><!-- #nav end -->
                            </section><!-- #nav-container end -->

                            <div id="dl-menu" class='dl-menuwrapper'>
                                <button class="dl-trigger">Open Menu</button>
                                
                                    <?php

										$defaults = array(
													'theme_location'  => 'primary-menu',
													'menu'            => 'nav',
													'container'       => 'ul',
													'container_class' => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="dl-menu">%3$s</ul>',
													'depth'           => 0,
													'walker'          => new th_themeslug_walker_nav_menu
														);
								if(has_nav_menu('primary-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo 'No menu assigned!';
										  }
														?>
                                
                            </div>
                        </div><!-- grid_12 end -->
                    </div><!-- row end -->
                </header><!-- #header end -->
            </div><!-- .container end -->
        </div><!-- .header-wrapper end -->
		<?php } 

   else if($th_options['header_style'] == 'style_1'){?>
   
   <div class="header-wrapper style-2">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="grid_6 social-info">
                            <!-- .social-links start -->
                            <ul class="social-links">
                                <?php if(!empty($th_options['socialilink1'])):?>
                                    <li>
                                        <a href="<?php echo $th_options['socialilink1'] ?>" class="pixons-twitter-1"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink2'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink2'] ?>" class="pixons-linkedin"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink3'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink3'] ?>" class="pixons-facebook-1"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink4'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink4'] ?>" class="pixons-xing"></a>
                                    </li>
								<?php endif?>
								
								<?php if(!empty($th_options['socialilink5'])):?>

                                    <li>
                                        <a href="<?php echo $th_options['socialilink5'] ?>" class="pixons-skype"></a>
                                    </li>
									
									<?php endif?>
                            </ul><!-- .social-links end -->
                        </div><!-- .grid_6 end -->

                        <div class="grid_6 social-info">
                            <!-- .info start -->
                            <ul class="info">
                                <?php if(!empty($th_options['info_email'])):?>
                                    <li class="email">
                                        <a class="email-icon icon-envelope-alt" href="#" title="Click me"></a>
                                        <a class="email-input" href="mailto:<?php echo $th_options['info_email'] ?>"><?php echo $th_options['info_email'] ?></a>
                                    </li>
								<?php endif ?>
								<?php if(!empty($th_options['info_number'])):?>
                                    <li class="phone">
                                        <a class="phone-icon icon-phone-sign" href="#" title="Click me"></a>
                                        <a class="phone-input" href="#"><?php echo $th_options['info_number'] ?></a>
                                    </li>
								<?php endif ?>
                            </ul><!-- .info end -->
                        </div><!-- .grid_6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .top-bar end -->

            <!-- .container start -->
            <div class="container">
                <!-- #header start -->
                <header id="header" class="header-style-2">
                    <!-- .row start -->
                    <div class="row">

                        <?php if(!empty($th_options['logo'])):?>
                        <div class="grid_2">
                            <!-- #logo start -->
                            <section id="logo">
                                <a href="<?php echo home_url() ?>"><img src="<?php echo $th_options['logo'] ?>" alt=""></a>
                                </a>
                            </section><!-- #logo end -->
                        </div>
						<?php else:?>
						<!-- .grid_6 start -->
						<div class="grid_2">
                            <!-- #logo start -->
                            <section id="logo">
                                <a href="<?php echo home_url() ?>">
                                    <img src="<?php echo get_template_directory_uri()?>/includes/img/logo.png" alt="logo" />
                                </a>
                            </section><!-- #logo end -->
                        </div>
						 <?php endif?><!-- .grid_6 end -->

                        <!-- grid_12 start -->
                        <div class="grid_10">
                            <!-- #nav-container start -->
                            <section id="nav-container">

                                <!-- #nav start -->
                                <nav id="nav">
                                    <?php

										$defaults = array(
													'theme_location'  => 'primary-menu',
													'menu'            => 'nav',
													'container'       => 'ul',
													'container_class' => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
													'depth'           => 0,
													'walker'          => '',
														);
								if(has_nav_menu('primary-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo 'No menu assigned!';
										  }
														?>
                                </nav><!-- #nav end -->
                            </section><!-- #nav-container end -->

                            <div id="dl-menu" class='dl-menuwrapper'>
                                <button class="dl-trigger">Open Menu</button>
                                <?php

										$defaults = array(
													'theme_location'  => 'primary-menu',
													'menu'            => 'nav',
													'container'       => 'ul',
													'container_class' => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="dl-menu">%3$s</ul>',
													'depth'           => 0,
													'walker'          => new th_themeslug_walker_nav_menu
														);
								if(has_nav_menu('primary-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo 'No menu assigned!';
										  }
														?>
                            </div>
                        </div><!-- grid_12 end -->
                    </div><!-- row end -->
                </header><!-- #header end -->
            </div><!-- .container end -->
        </div><!-- .header-wrapper end -->
<?php } 

   else if($th_options['header_style'] == 'style_2'){?>
   
    <!-- .header-wrapper start -->
<div class="header-wrapper style-3">
            
            <!-- .container start -->
            <div class="container">
                <!-- #header start -->
                <header id="header" class="header-style-3">
                    <!-- .row start -->
                    <div class="row">

                        <?php if(!empty($th_options['logo'])):?>
                        <div class="grid_2">
                            <!-- #logo start -->
                            <section id="logo">
                                <a href="<?php echo home_url() ?>"><img src="<?php echo $th_options['logo'] ?>" alt=""></a>
                                </a>
                            </section><!-- #logo end -->
                        </div>
						<?php else:?>
						<!-- .grid_6 start -->
						<div class="grid_2">
                            <!-- #logo start -->
                            <section id="logo">
                                <a href="<?php echo home_url() ?>">
                                    <img src="<?php echo get_template_directory_uri()?>/includes/img/logo.png" alt="logo" />
                                </a>
                            </section><!-- #logo end -->
                        </div>
						 <?php endif?><!-- .grid_6 end -->

                        <!-- grid_12 start -->
                        <div class="grid_10">
                            <!-- #nav-container start -->
                            <section id="nav-container">

                                <!-- #nav start -->
                                <nav id="nav">
                                    <?php

										$defaults = array(
													'theme_location'  => 'primary-menu',
													'menu'            => 'nav',
													'container'       => 'ul',
													'container_class' => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
													'depth'           => 0,
													'walker'          => '',
														);
								if(has_nav_menu('primary-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo 'No menu assigned!';
										  }
														?>
                                </nav><!-- #nav end -->
                            </section><!-- #nav-container end -->
                            
                            <div id="dl-menu" class='dl-menuwrapper'>
                                <button class="dl-trigger">Open Menu</button>
                                <?php

										$defaults = array(
													'theme_location'  => 'primary-menu',
													'menu'            => 'nav',
													'container'       => 'ul',
													'container_class' => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="dl-menu">%3$s</ul>',
													'depth'           => 0,
													'walker'          => new th_themeslug_walker_nav_menu
														);
								if(has_nav_menu('primary-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo 'No menu assigned!';
										  }
														?>
                            </div>
                        </div><!-- grid_12 end -->
                    </div><!-- row end -->
                </header><!-- #header end -->
            </div><!-- .container end -->
        </div><!-- .header-wrapper end -->
		
<?php }?>