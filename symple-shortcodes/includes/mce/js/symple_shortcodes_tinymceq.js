(function() {

    tinymce.PluginManager.add('my_mce_button', function( editor, url ) {

        editor.addButton( 'my_mce_button', {

            text: 'Shortcode',

            icon: false,

            type: 'menubutton',

            menu: [
						{
							text:'Thalassa Layout',
							
							menu: [
									{
									text:'Thalassa section',
								menu: [
										{

										text: 'Section',
										onclick: function() {


                                        editor.insertContent( '[Full_width_container]<br/><br/>[/Full_width_container]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Color Section',
										onclick: function() {


                                        editor.insertContent( '[Full_width_color_container]<br/><br/>[/Full_width_color_container]');
										
                                   

                               

                            }
										
										
										},
										
										{

										text: 'Complete Section',
										onclick: function() {


                                        editor.insertContent( '[Full_width_container]<br/><br/>[container]<br/><br/>[row]<br/><br/>[/row]<br/><br/>[/container]<br/><br/>[/Full_width_container]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Complete Color Section',
										onclick: function() {


                                        editor.insertContent( '[Full_width_color_container]<br/><br/>[container]<br/><br/>[row]<br/><br/>[/row]<br/><br/>[/container]<br/><br/>[/Full_width_color_container]');
										
                                   

                               

                            }
										
										
										},
									]	
										},
										
										{

										text: 'Thalassa Container',
										onclick: function() {

                                

                                        editor.insertContent( '[container]<br/><br/>[/container]');
										
                                   

                            }
										
										
										},
										{

										text: 'Thalassa Row',
										onclick: function() {

                                

                                    

                                        editor.insertContent( '[row]<br/><br/>[/row]');
										
                                    }

                                

                           
										
										
										},
										{

										text: 'Thalassa Span12',
										onclick: function() {


                                        editor.insertContent( '[span12]<br/><br/>[/span12]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span11',
										onclick: function() {


                                        editor.insertContent( '[span11]<br/><br/>[/span11]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span10',
										onclick: function() {


                                        editor.insertContent( '[span10]<br/><br/>[/span10]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span9',
										onclick: function() {


                                        editor.insertContent( '[span9]<br/><br/>[/span9]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span8',
										onclick: function() {


                                        editor.insertContent( '[span8]<br/><br/>[/span8]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span7',
										onclick: function() {


                                        editor.insertContent( '[span7]<br/><br/>[/span7]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span6',
										onclick: function() {


                                        editor.insertContent( '[span6]<br/><br/>[/span6]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span5',
										onclick: function() {


                                        editor.insertContent( '[span5]<br/><br/>[/span5]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span4',
										onclick: function() {

                                    

                                        editor.insertContent( '[span4]<br/><br/>[/span4]');
										
                                    

                                

                            }
										
										
										},
										{

										text: 'Thalassa Span3',
										onclick: function() {


                                        editor.insertContent( '[span3]<br/><br/>[/span3]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span2',
										onclick: function() {


                                        editor.insertContent( '[span2]<br/><br/>[/span2]');
										
                                   

                               

                            }
										
										
										},
										{

										text: 'Thalassa Span1',
										onclick: function() {


                                        editor.insertContent( '[span1]<br/><br/>[/span1]');
										
                                   

                               

                            }
										
										
										},
									]
						
						},
						{

										text: 'Thalassa blockquote',
										onclick: function() {


                                        editor.insertContent( '[thalassa_blockquote]<br/><br/>[/thalassa_blockquote]');
										
                                   

                               

                            }
										
										
										},
						


						{
						text:'Thalassa Feature',
							
							menu: [
									{

                            text: 'Thalassa Feature with icon',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Feature Shortcode',

                                    body: [
										
										{

                                            type: 'listbox',

                                            name: 'feacol',

                                            label: 'Collume',

                                            values: [
													{text: '3 Collume', value: 'grid_4'},
													{text: '4 Collume', value: 'grid_3'},
													{text: '2 Collume', value: 'grid_6'},
													]

                                        },
										{

                                            type: 'listbox',

                                            name: 'iconstyle',

                                            label: 'Icon Style',

                                            values: [{text: 'Style 1', value: 'style-1'},
													{text: 'Style 2', value: 'style-2'},
													]

                                        },
										{
										type: 'textbox',

                                            name: 'postcount',

                                            label: 'Post Par Page',

                                            value: '3'

                                        },


                                        
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[feature collume="'+ e.data.feacol +'" icon_style="'+ e.data.iconstyle +'" post_par_page="'+ e.data.postcount +'"][/feature]');

                                    }

                                });

                            }
							},
							{

                            text: 'Thalassa Feature with Image',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Feature Shortcode',

                                    body: [
										
										{

                                            type: 'listbox',

                                            name: 'feacol2',

                                            label: 'Collume',

                                            values: [
													{text: '3 Collume', value: 'grid_4'},
													{text: '4 Collume', value: 'grid_3'},
													{text: '2 Collume', value: 'grid_6'},
													]

                                        },
										
										{
										type: 'textbox',

                                            name: 'postcount2',

                                            label: 'Post Par Page',

                                            value: '4'

                                        },


                                        
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[feature_with_img collume="'+ e.data.feacol2 +'" post_par_page="'+ e.data.postcount2 +'"][/feature_with_img]');

                                    }

                                });

                            }
							},
							]
							
                        },
						
						
						{
						
							text: 'Thalassa Portfolio',
							menu: [
									{
							

                            text: 'Thalassa Horizontal Style',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Portfolio Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'porttitle',

                                            label: 'Title',

                                            value: 'Our Portfolio'

                                        },

                                        

                                        {

                                            type: 'textbox',

                                            name: 'subtitles',

                                            label: 'Sub Title',

                                            value: 'Thalassa offers multiple layouts and ways of displaying your content in a manner that best suits for you and</br> your customer. Make beautiful and eye catching site with Thalassa today!',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'post_per_pages',

                                            label: 'Post par page',

                                            value: '4'

                                        }

                                        

                                        

                                        

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[portfolio_details po_title="'+ e.data.porttitle +'" post_per_pages="'+ e.data.post_per_pages +'" ]<br/><br/>' + e.data.subtitles +'<br/><br/>[/portfolio_details]<br/><br/>[our_portfolio]<br/><br/>[/our_portfolio]');
										
                                    }

                                });

                            }
							
							},
							{
							

                            text: 'Thalassa Carousel Style',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Portfolio Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'car_porttitle',

                                            label: 'Title',

                                            value: 'portfolio projects'

                                        },
                                        
										{

                                            type: 'listbox',

                                            name: 'car_style',

                                            label: 'Hover Style',

                                            values: [{text: 'style 1', value: 'portfolio-style-1'},
													{text: 'style 2', value: 'portfolio-style-2'},
													]

                                        }

                                        

                                        

                                        

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_portfolio_carousel portfolio_title="'+ e.data.car_porttitle +'"]<br/><br/>[thalassa_port_carousel style="'+ e.data.car_style +'"][/thalassa_port_carousel]<br/><br/>[/thalassa_portfolio_carousel]');
										
                                    }

                                });

                            }
							
							},
							{
							

                            text: 'Thalassa Filter 3 columm Style',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Portfolio Shortcode',

                                    body: [

                                        {

                                            type: 'listbox',

                                            name: 'portstyle1',

                                            label: 'Hover Style',

                                           values: [{text: 'style 1', value: 'portfolio-style-1'},
													{text: 'style 2', value: 'portfolio-style-2'},
													]

                                        },


                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[portfolio_filter]<br/><br/>[/portfolio_filter]<br/><br/>[portfolio_filter_3col style="'+ e.data.portstyle1 +'"]<br/><br/>[/portfolio_filter_3col]');
										
                                    }

                                });

                            }
							
							},
							{
							

                            text: 'Thalassa Filter 4 columm Style',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Portfolio Shortcode',

                                    body: [

                                        {

                                            type: 'listbox',

                                            name: 'portstyle1',

                                            label: 'Hover Style',

                                           values: [{text: 'style 1', value: 'portfolio-style-1'},
													{text: 'style 2', value: 'portfolio-style-2'},
													]

                                        },


                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[portfolio_filter]<br/><br/>[/portfolio_filter]<br/><br/>[portfolio_filter_4col style="'+ e.data.portstyle1 +'"]<br/><br/>[/portfolio_filter_4col]');
										
                                    }

                                });

                            }
							
							},
							
							]

                        },
						{
						text: 'Thalassa Accordion',

                         menu: [
							{
                            text: 'Thalassa Accordion Icon Style',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Accordion Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'accordiontitle',

                                            label: 'Accordion title',

                                            value: 'WHY CHOOSE THALASSA'

                                        },

                                        

                                        {

                                            type: 'textbox',

                                            name: 'title1',

                                            label: 'Title 1',

                                            value: 'Super powerful and responsive theme with amazing design layouts',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'content1',

                                            label: 'Content 1',

                                            value: 'This is Thalassa, super powerful and responsive theme. Thalassa comes with uniquely designed five home page layouts, couple of header and footer design options and many, many more pages layouts. With its clean and beautiful design it will suit every project, from business website to creative portfolio or agency. Thalassa is fully responsive, soyour website will look excellent on any mobiledevice. It has 1170px wide layout which degradesbeautifully on smaller screen sizes.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										{

                                            type: 'listbox',

                                            name: 'active1',

                                            label: 'Active Accordion',

                                            values: [{text: 'Active', value: 'active'},
													{text: 'Deactive', value: 'none'},
													]

                                        },
										{

                                            type: 'textbox',

                                            name: 'title2',

                                            label: 'Title 2',

                                            value: 'Fully responsive design makes your website look excellent on any device',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'content2',

                                            label: 'Content 2',

                                            value: 'This is Thalassa, super powerful and responsive theme. Thalassa comes with uniquely designed five home page layouts, couple of header and footer design options and many, many more pages layouts. With its clean and beautiful design it will suit every project, from business website to creative portfolio or agency. Thalassa is fully responsive, soyour website will look excellent on any mobiledevice. It has 1170px wide layout which degradesbeautifully on smaller screen sizes.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										{

                                            type: 'listbox',

                                            name: 'active2',

                                            label: 'Active Accordion',

                                            values: [{text: 'Active', value: 'active'},
													{text: 'Deactive', value: 'none'},
													]

                                        },
										{

                                            type: 'textbox',

                                            name: 'title3',

                                            label: 'Title 3',

                                            value: 'Business and creative layouts',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'content3',

                                            label: 'Content 3',

                                            value: 'This is Thalassa, super powerful and responsive theme. Thalassa comes with uniquely designed five home page layouts, couple of header and footer design options and many, many more pages layouts. With its clean and beautiful design it will suit every project, from business website to creative portfolio or agency. Thalassa is fully responsive, soyour website will look excellent on any mobiledevice. It has 1170px wide layout which degradesbeautifully on smaller screen sizes.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										{

                                            type: 'listbox',

                                            name: 'active3',

                                            label: 'Active Accordion',

                                            values: [{text: 'Active', value: 'active'},
													{text: 'Deactive', value: 'none'},
													]

                                        },

                                        

                                        

                                        

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_accordion accordion_title="'+ e.data.accordiontitle +'"]<br/>[accordion_content title="'+ e.data.title1 +'" active="'+ e.data.active1 +'"]<br/><br/>'+ e.data.content1 +'<br/>[/accordion_content]<br/><br/>[accordion_content title="'+ e.data.title2 +'" active="'+ e.data.active2 +'"]<br/><br/>'+ e.data.content2 +'<br/>[/accordion_content]<br/><br/>[accordion_content title="'+ e.data.title3 +'" active="'+ e.data.active3 +'"]<br/><br/>'+ e.data.content3 +'<br/>[/accordion_content]<br/>[/thalassa_accordion]');
										
                                    }

                                });

                            }
						},
						{
                            text: 'Thalassa FaQ Accordion',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Accordion Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'postparpage',

                                            label: 'Posts Par Page',

                                            value: '-1'

                                        },

										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_faq_accordion]<br/><br/>[faq_accordion_content post_par_page="'+ e.data.postparpage +'"][/faq_accordion_content]<br/><br/>[/thalassa_faq_accordion]');
										
                                    }

                                });

                            }
						}
						]
                        },
						{

                            text: 'Thalassa News',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa News Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'news_title',

                                            label: 'Title',

                                            value: 'Latest News from Our Company',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,

                                        },
										
										{

                                            type: 'listbox',

                                            name: 'post_type',

                                            label: 'Post Type',

                                            values: [{text: 'Blog Post', value: 'post'},
													{text: 'Portfolio Post', value: 'portfolio'},
													{text: 'Suff Post', value: 'stuff'},
													{text: 'feature Post', value: 'feature'},
													
													]

                                        },
										{

                                            type: 'textbox',

                                            name: 'post_par_page2',

                                            label: 'Posts Par Page',

                                            value: '2'

                                        },


                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_news_holder news_title="'+ e.data.news_title +'"]<br/><br/>[thalassa_news post_type="'+ e.data.post_type +'" post_par_page="'+ e.data.post_par_page2 +'"][/thalassa_news]<br/><br/>[/thalassa_news_holder]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Image',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Image Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'imagebox',

                                            label: 'Image Link',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/responsive2.png'

                                        },

                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_image image_link="'+ e.data.imagebox +'"][/thalassa_image]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Bar Chart',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Bar Chart Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'bartitle',

                                            label: 'Bar Chart Title',

                                            value: 'THIS IS WHAT WE DO'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skill1',

                                            label: 'Skill Title 1',

                                            value: 'Web design 80%'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skillpercentage1',

                                            label: 'Skill Percentage 1',

                                            value: '80'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skill2',

                                            label: 'Skill Title 2',

                                            value: 'Web development 70%'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skillpercentage2',

                                            label: 'Skill Percentage 2',

                                            value: '70'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skill3',

                                            label: 'Skill Title 3',

                                            value: 'Wordpress 90%'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skillpercentage3',

                                            label: 'Skill Percentage 3',

                                            value: '90'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skill4',

                                            label: 'Skill Title 4',

                                            value: 'Marketing 60%'

                                        },
										{

                                            type: 'textbox',

                                            name: 'skillpercentage4',

                                            label: 'Skill Percentage 4',

                                            value: '60'

                                        },

                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_bar_chart bar_chart_title="'+e.data.bartitle +'"]<br/><br/>[thalassa_skill title="'+ e.data.skill1 +'" percentage="'+ e.data.skillpercentage1 +'"][/thalassa_skill]<br/><br/>[thalassa_skill title="'+ e.data.skill2 +'" percentage="'+ e.data.skillpercentage2 +'"][/thalassa_skill]<br/><br/>[thalassa_skill title="'+ e.data.skill3 +'" percentage="'+ e.data.skillpercentage3 +'"][/thalassa_skill]<br/><br/>[thalassa_skill title="'+ e.data.skill4 +'" percentage="'+ e.data.skillpercentage4 +'"][/thalassa_skill]<br/><br/>[/thalassa_bar_chart]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Team',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa team Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'teamtitle',

                                            label: 'Title',

                                            value: 'MEET OUR CREATIVE TEAM'

                                        },

                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_team team_title="'+ e.data.teamtitle +'"]<br/><br/>[thalassa_stuff][/thalassa_stuff]<br/><br/>[/thalassa_team]');
										
                                    }

                                });

                            }

                        },
						
						{

                            text: 'Thalassa Nivo Slider',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa nivo slider Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'slider_img1',

                                            label: 'Image Link',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/slide-1.jpg'

                                        },
										{

                                            type: 'textbox',

                                            name: 'slider_img2',

                                            label: 'Image Link',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/slide-2.jpg'

                                        },
										{

                                            type: 'textbox',

                                            name: 'slider_img3',

                                            label: 'Image Link',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/slide-3.jpg'

                                        },

                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_nivo_slider]<br/><br/>[thalassa_nivo_slider_img slider_img="'+ e.data.slider_img1 +'"][/thalassa_nivo_slider_img]<br/><br/>[thalassa_nivo_slider_img slider_img="'+ e.data.slider_img2 +'"][/thalassa_nivo_slider_img]<br/><br/>[thalassa_nivo_slider_img slider_img="'+ e.data.slider_img3 +'"][/thalassa_nivo_slider_img]<br/><br/>[/thalassa_nivo_slider]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Number Counter',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa number counter Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'countertitle',

                                            label: 'Counter Title',

                                            value: 'WE ARE THALASSA WEB AGENCY'

                                        },
										{

                                            type: 'textbox',

                                            name: 'counterdes',

                                            label: 'Counter Description',

                                            value: 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Lorem lpsum dolor sit amet.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,
											
											
										},
										{

                                            type: 'textbox',

                                            name: 'numbertitle1',

                                            label: 'Counter Number Title 1',

                                            value: 'Satisfied Customers'

                                        },
										{

                                            type: 'textbox',

                                            name: 'numbercounter1',

                                            label: 'Timer Numbers 1',

                                            value: '1933'

                                        },
										{

                                            type: 'textbox',

                                            name: 'numbertitle2',

                                            label: 'Counter Number Title 2',

                                            value: 'Working Hours'

                                        },
										{

                                            type: 'textbox',

                                            name: 'numbercounter2',

                                            label: 'Timer Numbers 2',

                                            value: '2890'

                                        },
										{

                                            type: 'textbox',

                                            name: 'numbertitle3',

                                            label: 'Counter Number Title 3',

                                            value: 'Finished Projects'

                                        },
										{

                                            type: 'textbox',

                                            name: 'numbercounter3',

                                            label: 'Timer Numbers 3',

                                            value: '1756'

                                        },

                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_counter counter_title="'+ e.data.countertitle +'"]<br/><br/>'+ e.data.counterdes +'<br/><br/>[/thalassa_counter]<br/><br/>[thalassa_counter_box]<br/><br/>[thalassa_counter_number counter_item_title="'+ e.data.numbertitle1 +'" thalassa_number="'+ e.data.numbercounter1 +'"][/thalassa_counter_number]<br/><br/>[thalassa_counter_number counter_item_title="'+ e.data.numbertitle2 +'" thalassa_number="'+ e.data.numbercounter2 +'"][/thalassa_counter_number]<br/><br/>[thalassa_counter_number counter_item_title="'+ e.data.numbertitle3 +'" thalassa_number="'+ e.data.numbercounter3 +'"][/thalassa_counter_number]<br/><br/>[/thalassa_counter_box]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Testimonial',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Testimonial Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'testimonialtitle',

                                            label: 'Testimonial Title',

                                            value: 'some words form our valuable clients'

                                        },
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[thalassa_testimonial testimonial_title="'+ e.data.testimonialtitle +'"]<br/><br/>[testimonial_item][/testimonial_item]<br/><br/>[/thalassa_testimonial]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Our Client',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Our Client Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'clienttitle',

                                            label: 'Our Client Title',

                                            value: 'Meet Our Valuable Clients'

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientdes',

                                            label: 'Our Client Description',

                                            value: 'Over 2000+ Happy customers can’t be wrong! Become our customer today and start exploring our  <br />extensive portfolio. You’ll find something for your needs for sure!'
											

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientimg1',

                                            label: 'Image 1',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/cleanbiz.png'

                                        },
										{

                                            type: 'textbox',

                                            name: 'link1',

                                            label: 'Client Site Link 1',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientimg2',

                                            label: 'Image 2',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/metropolis.png'

                                        },
										{

                                            type: 'textbox',

                                            name: 'link2',

                                            label: 'Client Site Link 2',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientimg3',

                                            label: 'Image 3',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/whisper.png'

                                        },
										{

                                            type: 'textbox',

                                            name: 'link3',

                                            label: 'Client Site Link 3',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientimg4',

                                            label: 'Image 4',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/pocket.png'

                                        },
										{

                                            type: 'textbox',

                                            name: 'link4',

                                            label: 'Client Site Link 4',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientimg5',

                                            label: 'Image 5',

                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/moderna.png'

                                        },
										{

                                            type: 'textbox',

                                            name: 'link5',

                                            label: 'Client Site Link 5',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'clientimg6',

                                            label: 'Image 6',
                                            value: 'http://webpentagon.com/demo/themeforest/wordpress/thalassa/wp-content/uploads/2014/08/alexx.png'


                                        },
										{

                                            type: 'textbox',

                                            name: 'link6',

                                            label: 'Client Site Link 6',

                                            value: ''

                                        },
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[thalassa_our_client our_client_title="'+ e.data.clienttitle +'"]<br/><br/>'+ e.data.clientdes +'<br/><br/>[/thalassa_our_client]<br/></br>[thalassa_our_client_box]<br/><br/>[client_item image_link="'+ e.data.clientimg1 +'" link="'+ e.data.link1 +'"][/client_item]<br/><br/>[client_item image_link="'+ e.data.clientimg2 +'" link="'+ e.data.link2 +'"][/client_item]<br/><br/>[client_item image_link="'+ e.data.clientimg3 +'" link="'+ e.data.link3 +'"][/client_item]<br/><br/>[client_item image_link="'+ e.data.clientimg4 +'" link="'+ e.data.link4 +'"][/client_item]<br/><br/>[client_item image_link="'+ e.data.clientimg5 +'" link="'+ e.data.link5 +'"][/client_item]<br/><br/>[client_item image_link="'+ e.data.clientimg6 +'" link="'+ e.data.link6 +'"][/client_item]<br/><br/>[/thalassa_our_client_box]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Blog Post with Image',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Blog Post with Image Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'blg_img_title',

                                            label: 'Title',

                                            value: 'Latest Blog Posts'

                                        },
										{

                                            type: 'textbox',

                                            name: 'blg_img_des',

                                            label: 'Description',

                                            value: 'Thalassa offers multiple layouts and ways of displaying your content in a manner that best suits for you and <br />your customer. Make beautiful and eye catching site with Thalassa today!'

                                        }
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[thalassa_blog-post blog_post_title="'+ e.data.blg_img_title +'"]<br/><br/>'+ e.data.blg_img_des +'<br/><br/>[/thalassa_blog-post]<br/><br/>[thalassa_blog_post_box]<br/><br/>[blog_with_image_item][/blog_with_image_item]<br/><br/>[/thalassa_blog_post_box]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Blog Post without Image',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Blog Post without Image Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'blgtitle',

                                            label: 'Title',

                                            value: 'recent from blog'

                                        },
										{

                                            type: 'textbox',

                                            name: 'postpargpagess',

                                            label: 'Posts Par Page',

                                            value: '2'

                                        }
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[thalassa_blog_post_without_img title="'+ e.data.blgtitle +'"]<br/><br/>[blog_without_image_item post_par_page="'+ e.data.postpargpagess +'"][/blog_without_image_item]<br/><br/>[/thalassa_blog_post_without_img]');
										
                                    }

                                });

                            }

                        },						
						{

                            text: 'Thalassa Tab',

                            menu: [
								{

                            text: 'Horizontal Tab',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Horizontal Tab Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'h_tab_title',

                                            label: 'Title',

                                            value: 'horizontal tabs'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_menu1',

                                            label: 'Tab Title',

                                            value: 'Design'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_icon1',

                                            label: 'Tab icon',

                                            value: 'icon-alarm-2'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_content1',

                                            label: 'Tab content',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. Donec rutrum elementum turpis nec vulputate. Donec eros sapien, adipiscing nec orci vitae, nibh at placerat pretium. Praesent at eros nec diam euismod tristique. Etiam malesuada imperdiet purus, sed adipiscing nibh tempor vitae.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_id1',

                                            label: 'Tab ID',

                                            value: 'tab-1'

                                        },
										{

                                            type: 'listbox',

                                            name: 'h_tab_active1',

                                            label: 'Active Tab',

                                            values: [
													{text: 'Active', value: 'active'},
													{text: 'Deactive', value: 'none'},
													]

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_menu2',

                                            label: 'Tab Title',

                                            value: 'Develop'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_icon2',

                                            label: 'Tab icon',

                                            value: 'icon-lab'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_content2',

                                            label: 'Tab content',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. Donec rutrum elementum turpis nec vulputate. Donec eros sapien, adipiscing nec orci vitae, nibh at placerat pretium. Praesent at eros nec diam euismod tristique. Etiam malesuada imperdiet purus, sed adipiscing nibh tempor vitae.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_id2',

                                            label: 'Tab ID',

                                            value: 'tab-2'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_menu3',

                                            label: 'Tab Title',

                                            value: 'Support'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_icon3',

                                            label: 'Tab icon',

                                            value: 'icon-users'

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_content3',

                                            label: 'Tab content',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. Donec rutrum elementum turpis nec vulputate. Donec eros sapien, adipiscing nec orci vitae, nibh at placerat pretium. Praesent at eros nec diam euismod tristique. Etiam malesuada imperdiet purus, sed adipiscing nibh tempor vitae.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'h_tab_id3',

                                            label: 'Tab ID',

                                            value: 'tab-3'

                                        },
										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[horizontal_tab title="'+ e.data.h_tab_title +'"]<br/><br/>[horizontal_tab_menu tab_title="'+ e.data.h_tab_menu1 +'" tab_icon="'+ e.data.h_tab_icon1 +'" tab_active="'+ e.data.h_tab_active1 +'" tab_id="'+ e.data.h_tab_id1 +'"][/horizontal_tab_menu]<br/><br/>[horizontal_tab_menu tab_title="'+ e.data.h_tab_menu2 +'" tab_icon="'+ e.data.h_tab_icon2 +'" tab_id="'+ e.data.h_tab_id2 +'"][/horizontal_tab_menu]<br/><br/><br/><br/>[horizontal_tab_menu tab_title="'+ e.data.h_tab_menu3 +'" tab_icon="'+ e.data.h_tab_icon3 +'" tab_id="'+ e.data.h_tab_id3 +'"][/horizontal_tab_menu]<br/><br/>[/horizontal_tab]<br/><br/>[horizontal_tab_content_box]<br/><br/>[horizontal_tab_content tab_id="'+ e.data.h_tab_id1 +'"]<br/>'+ e.data.h_tab_content1 +'<br/>[/horizontal_tab_content]<br/><br/><br/><br/>[horizontal_tab_content tab_id="'+ e.data.h_tab_id2 +'"]<br/>'+ e.data.h_tab_content2 +'<br/>[/horizontal_tab_content]<br/><br/><br/><br/>[horizontal_tab_content tab_id="'+ e.data.h_tab_id3 +'"]<br/>'+ e.data.h_tab_content3 +'<br/>[/horizontal_tab_content]<br/><br/>[/horizontal_tab_content_box]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Vertical Tab',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Vertical Tab Shortcode',

                                    body: [
										{

                                            type: 'textbox',

                                            name: 'var_tab_title',

                                            label: 'Title',

                                            value: 'THALASSA CORE FEATURES'

                                        },
										
										
										{

                                            type: 'textbox',

                                            name: 'var_tab_title1',

                                            label: 'Tab Title',

                                            value: 'Responsive design'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_content1',

                                            label: 'Tab Title',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. Donec rutrum elementum turpis nec vulputate. Donec eros sapien, adipiscing nec orci vitae, nibh at placerat pretium. Praesent at eros nec diam euismod tristique. Etiam malesuada imperdiet purus, sed adipiscing nibh tempor vitae.',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_icon1',

                                            label: 'Icon Style',

                                            value: 'icon-desktop'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_id1',

                                            label: 'Tab ID',

                                            value: 'tab1'

                                        },
										
										
										{

                                            type: 'textbox',

                                            name: 'var_tab_title2',

                                            label: 'Tab Title',

                                            value: 'Excellent support'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_content2',

                                            label: 'Tab Title',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. ',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_icon2',

                                            label: 'Icon Style',

                                            value: 'icon-users'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_id2',

                                            label: 'Tab ID',

                                            value: 'tab2'

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'var_tab_title3',

                                            label: 'Tab Title',

                                            value: ' Unlimited color options'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_content3',

                                            label: 'Tab Content',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. ',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_icon3',

                                            label: 'Icon Style',

                                            value: 'icon-wand'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_id3',

                                            label: 'Tab ID',

                                            value: 'tab3'

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'var_tab_title4',

                                            label: 'Tab Title',

                                            value: ' Business and creative feel'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_content4',

                                            label: 'Tab Content',

                                            value: 'Phasellus sit amet orci leo, eget tristique odio. Phasellus tortor lorem, porttitor vitae egestas id, vehicula vel felis. Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat.Duis et eget augue magna, in pulvinar lorem. Donec a nisi sapien, at porta bero. Suspendisse nec tempor odio. Phasellus augue dolorem congue eget posuere quis, commodo id libero. Fusce arcu turpis, semper vel. Aliquam erat volutpat. ',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 25,

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_icon4',

                                            label: 'Icon Style',

                                            value: 'icon-leaf'

                                        },
										{

                                            type: 'textbox',

                                            name: 'var_tab_id4',

                                            label: 'Tab ID',

                                            value: 'tab4'

                                        },
										
										
										
										
                                        
										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[vertical_tab title="'+ e.data.var_tab_title +'"]<br/><br/>[vertical_tab_menu tab_name="'+ e.data.var_tab_id1 +'" tab_icon="'+ e.data.var_tab_icon1 +'" tab_title="'+ e.data.var_tab_title1 +'"][/vertical_tab_menu]<br/><br/>[vertical_tab_menu tab_name="'+ e.data.var_tab_id2 +'" tab_icon="'+ e.data.var_tab_icon2 +'" tab_title="'+ e.data.var_tab_title2 +'"][/vertical_tab_menu]<br/><br/>[vertical_tab_menu tab_name="'+ e.data.var_tab_id3 +'" tab_icon="'+ e.data.var_tab_icon3 +'" tab_title="'+ e.data.var_tab_title3 +'"][/vertical_tab_menu]<br/><br/>[vertical_tab_menu tab_name="'+ e.data.var_tab_id4 +'" tab_icon="'+ e.data.var_tab_icon4 +'" tab_title="'+ e.data.var_tab_title4 +'"][/vertical_tab_menu]<br/><br/>[/vertical_tab]<br/><br/>[vertical_tab_content_box]<br/><br/>[vertical_tab_content tab_name="'+ e.data.var_tab_id1 +'"]<br/><br/>'+ e.data.var_tab_content1 +'<br/><br/>[/vertical_tab_content]<br/><br/>[vertical_tab_content tab_name="'+ e.data.var_tab_id2 +'"]<br/><br/>'+ e.data.var_tab_content2 +'<br/><br/>[/vertical_tab_content]<br/><br/><br/><br/>[vertical_tab_content tab_name="'+ e.data.var_tab_id3 +'"]<br/><br/>'+ e.data.var_tab_content3 +'<br/><br/>[/vertical_tab_content]<br/><br/>[vertical_tab_content tab_name="'+ e.data.var_tab_id4 +'"]<br/><br/>'+ e.data.var_tab_content4 +'<br/><br/>[/vertical_tab_content]<br/><br/>[/vertical_tab_content_box]');
										
                                    }

                                });

                            }

                        }
							]

                        },
						{

                            text: 'Thalassa Poster',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Thalassa Poster Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'postertitle',

                                            label: 'Title',

                                            value: 'Get Thalassa Now!'

                                        },
										{

                                            type: 'textbox',

                                            name: 'posterdes',

                                            label: 'Description',

                                            value: 'Need simple but effective site to attract your visitors? We got it covered! Get you site noticed with Thalassa',
											multiline: true,

                                            minWidth: 450,

                                            minHeight: 50,
                                        },
										{

                                            type: 'textbox',

                                            name: 'postericonstyle',

                                            label: 'icon',

                                            value: 'icon-cart-2'

                                        },
										{

                                            type: 'textbox',

                                            name: 'posbuttonlink',

                                            label: 'Button Link',

                                            value: '#'

                                        },
										{

                                            type: 'textbox',

                                            name: 'posbuttontext',

                                            label: 'Button text',

                                            value: 'buy theme'

                                        },

                                       

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_poster poster_icon="'+ e.data.postericonstyle +'" poster_title="'+ e.data.postertitle +'" button_text="'+ e.data.posbuttontext +'" button_link="'+ e.data.posbuttonlink +'"]'+ e.data.posterdes +'[/thalassa_poster]');
										
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Google Map',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Google Map Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'mapwidth',

                                            label: 'Width',

                                            value: '100%'

                                        },
                                        {

                                            type: 'textbox',

                                            name: 'mapheight',

                                            label: 'Height',

                                            value: '480px',

                                            

                                        },
										{

                                            type: 'textbox',

                                            name: 'mapsrc',

                                            label: 'Location url(Set embed link)',

                                            value: 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1403176391957',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 100,

                                        },


                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[googlemap width="'+ e.data.mapwidth +'" height="'+ e.data.mapheight +'" src="'+ e.data.mapsrc +'"][/googlemap]' );
                                        
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Contact',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Contact Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'contacttitle',

                                            label: 'Title',

                                            value: 'leave us a message'

                                        },
                                        {

                                            type: 'textbox',

                                            name: 'contactform',

                                            label: 'Form Shortcode',

                                            value: '[contact-form-7 id="260" title="Contact form 1"]'
											,

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 30,
                                            

                                        },
										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_contact contact_title="'+ e.data.contacttitle +'"]'+ e.data.contactform +'[/thalassa_contact]' );
                                        
                                    }

                                });

                            }

                        },
						{

                            text: 'Thalassa Contact Information',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Contact information Shortcode',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'contacttitle1',

                                            label: 'Title',

                                            value: 'contact information'

                                        },
										{

                                            type: 'textbox',

                                            name: 'contacttext',

                                            label: 'Description',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 80,

                                        },
                                        {

                                            type: 'textbox',

                                            name: 'contactformadress',

                                            label: 'Adddress',

                                            value: 'First Street, Sunrise Avenue, New York, USA'
											,

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 30,
                                            

                                        },
										{

                                            type: 'textbox',

                                            name: 'contactformemail',

                                            label: 'Email',

                                            value: 'info@webpentagon.com'
											,

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 30,
                                            

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'contactformphone',

                                            label: 'Phone',

                                            value: '+00 485 9857'
											,

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 30,
                                            

                                        },
										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[thalassa_contact_information contact_title="'+ e.data.contacttitle1 +'" address="'+ e.data.contactformadress +'" email="'+ e.data.contactformemail +'" phone="'+ e.data.contactformphone +'" content_text="'+ e.data.contacttext +'"][/thalassa_contact_information]' );
                                        
                                    }

                                });

                            }

                        },

                     
                    ]


               

        });

    });

})();
