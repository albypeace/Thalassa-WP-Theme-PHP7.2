
            jQuery(document).ready(function(jQuery) {
                'use strict';
				
				jQuery('#s').attr('placeholder','Type and hit enter...');
				
				// PRETTYPHOTO LIGHTBOX START
                if (jQuery().prettyPhoto) {
                    piPrettyphoto();
                }

                function piPrettyphoto() {
                    jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools: false});
                }// PRETTYPHOTO LIGHTBOX END
				
                //ISOTOPE START
                (function() {
                    // cache container
                    var $blogmasonry = jQuery('#blogmasonry');
                    // initialize isotope
                    $blogmasonry.isotope({
                        masonry: {
                            columnWidth: 1,
                            isResizable: true
                        }
                    });
                })(); // ISOTOPE END
			
			// TESTIMONIAL CAROUSEL
				
                jQuery("#testimon-1").carouFredSel({
                    auto: true,
                    scroll: 1,
                    speed: 50000,
                    swipe: {
                        ontouch: true,
                        onMouse: true
                    },
                    width: 'variable',
                    height: 'variable',
                    items: {
                        width: 'auto',
                        visible: 1
                    }
                }); //TESTIMONIAL CAROUSEL END
				
				// TEAM CAROUSEL START 
                jQuery('#team-carousel').carouFredSel({
                    prev: '.c_prev',
                    next: '.c_next',
                    auto: false,
                    scroll: 1,
                    width: 'variable',
                    height: 'variable',
                    items: {
                        width: 'auto',
                        visible: 4
                    }
                });// TEAM CAROUSEL END
				
				// PORTFOLIO CAROUSEL START 
                jQuery('#portfolio-carousel').carouFredSel({
                    prev: '.c_prev',
                    next: '.c_next',
                    auto: false,
                    scroll: 1,
                    width: 'variable',
                    height: 'variable',
                    items: {
                        width: 'auto',
                        visible: 4
                    }
                });// PORTFOLIO CAROUSEL END 
				 // NUMBERS COUNTER START
                jQuery('.numbers').data('countToOptions', {
                    formatter: function(value, options) {
                        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                    }
                });

                // start timer
                jQuery('.timer').each(count);

                function count(options) {
                    var $this = jQuery(this);
                    options = jQuery.extend({}, options || {}, $this.data('countToOptions') || {});
                    $this.countTo(options);
                } // NUMBERS COUNTER END
                // NIVO SLIDER
                
                    jQuery('#slider').nivoSlider();
               // NIVO SLIDER END 

                // AUDIO PLAYER START
                jQuery("#jquery_jplayer_1").jPlayer({ 
                    ready: function() {
                        jQuery(this).jPlayer("setMedia", {
                            m4a: "http://www.jplayer.org/audio/m4a/TSP-01-Cro_magnon_man.m4a",
                            oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
                        });
                    },
                    swfPath: "js/jplayer/",
                    supplied: "m4a, oga",
                    wmode: "window"
                }); // AUDIO PLAYER END

                // FLICKR FEED START
                jQuery('.flickr-feed').socialstream({
                    socialnetwork: 'flickr',
                    limit: 8,
                    username: 'pixel-industry'
                }); // FLICKR FEED END
				
				
                

                // PORTFOLIO CAROUSEL START 
                jQuery('#portfolio-carousel').carouFredSel({
                    prev: '.c_prev',
                    next: '.c_next',
                    auto: false,
                    scroll: 1,
                    width: 'variable',
                    height: 'variable',
                    items: {
                        width: 'auto',
                        visible: 4
                    }
                });// PORTFOLIO CAROUSEL END 

                // NEWSLETTER FORM AJAX SUBMIT
                jQuery('.newsletter .submit').on('click', function(event) {
                    event.preventDefault();
                    var email = $(this).siblings('.email').val(); 
                    var form_data = new Array({'Email': email});
                    jQuery.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'newsletter', 'form_data': form_data})
                    }).done(function(data) {
                        alert(data);
                    });
                });

            });
			
			//BLOG WIDGET
                jQuery('.latest-posts-3 ul li').each(function() {

                    jQuery(this).on('mouseenter mouseleave', function(e) {

                        jQuery(this).siblings('li').removeClass('blog-post-item-active').end().addClass('blog-post-item-active');
                    });
                });//BLOG WIDGET END
				// yyy
				jQuery(".latest-posts-3 ul li:nth-child(2) ").each(function(i){
				   jQuery(this).addClass('blog-post-item-active');
				});
                // yyy
				
				jQuery('#nav li:has(ul)').addClass('has-child');
			
				 //JQUERY SHARRE PLUGIN START
                jQuery('#shareme').sharrre({
                    share: {
                        twitter: true,
                        facebook: true,
                        googlePlus: true
                    },
                    template: '<div class="box"><div class="left">Share</div><div class="middle"><a href="#" class="facebook">f</a><a href="#" class="twitter">t</a><a href="#" class="googleplus">+1</a></div><div class="right">{total}</div></div>',
                    enableHover: false,
                    enableTracking: true,
                    render: function(api, options) {
                        jQuery(api.element).on('click', '.twitter', function() {
                            api.openPopup('twitter');
                        });
                        jQuery(api.element).on('click', '.facebook', function() {
                            api.openPopup('facebook');
                        });
                        jQuery(api.element).on('click', '.googleplus', function() {
                            api.openPopup('googlePlus');
                        });
                    }
                }); //JQUERY SHARRE PLUGIN END