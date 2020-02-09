(function() {	
	tinymce.create('tinymce.plugins.sympleShortcodeMce', {
		init : function(ed, url){
			tinymce.plugins.sympleShortcodeMce.theurl = url;
		},
		createControl : function(btn, e) {
			if ( btn == "symple_shortcodes_button" ) {
				var a = this;	
				var btn = e.createSplitButton('symple_button', {
	                title: "Insert Shortcode",
					image: tinymce.plugins.sympleShortcodeMce.theurl +"/images/favicon.png",
					icons: false,
	            });
	            btn.onRenderMenu.add(function (c, b) {
					
					b.add({title : 'Reversal Shortcodes', 'class' : 'mceMenuItemTitle'}).setDisabled(1);
					
					
					// Columns
					c = b.addMenu({title:"Columns"});
					
						a.render( c, "One Half", "half" );
						a.render( c, "One Third", "third" );
						a.render( c, "One Fourth", "fourth" );
						a.render( c, "One Fifth", "fifth" );
						a.render( c, "One Sixth", "sixth" )
						
						c.addSeparator();		
								
						a.render( c, "Two Thirds", "twothird" );
						a.render( c, "Three Fourths", "threefourth" );
						a.render( c, "Two Fifths", "twofifth" );
						a.render( c, "Three Fifths", "threefifth" );
						a.render( c, "Fourth Fifths", "fourfifth" );
						a.render( c, "Five Sixths", "fivesixth" );
					
					b.addSeparator();
					
					
					// Elements
					c = b.addMenu({title:"Elements"});
									
						a.render( c, "Button", "button" );
						a.render( c, "Callout", "callout" );
						a.render( c, "Google Map", "googlemap" );
						a.render( c, "Heading", "heading" );
						a.render( c, "Pricing Table", "pricing" );
						a.render( c, "Skillbar", "skillbar" );
						a.render( c, "Social Icon", "social" );	
						a.render( c, "Testimonial", "testimonial" );
					
					b.addSeparator();
					
					// Boxes
					c = b.addMenu({title:"Boxes"});
					
						a.render( c, "Blue", "blueBox" );
						a.render( c, "Gray", "grayBox" );
						a.render( c, "Green", "greenBox" );
						a.render( c, "Red", "redBox" );
						a.render( c, "Yellow", "yellowBox" );
						
					b.addSeparator();
					
					// Highlights
					c = b.addMenu({title:"Highlights"});
					
						a.render( c, "Blue", "blueHighlight" );
						a.render( c, "Gray", "grayHighlight" );
						a.render( c, "Green", "greenHighlight" );
						a.render( c, "Red", "redHighlight" );
						a.render( c, "Yellow", "yellowHighlight" );
						
					b.addSeparator();
					
					
					// Dividers
					c = b.addMenu({title:"Dividers"});
					
						a.render( c, "Solid", "solidDivider" );
						a.render( c, "Dashed", "dashedDivider" );
						a.render( c, "Dotted", "dottedDivider" );
						a.render( c, "Double", "doubleDivider" );
						a.render( c, "FadeIn", "fadeinDivider" );
						a.render( c, "FadeOut", "fadeoutDivider" );
						
					b.addSeparator();
					
					
					// jQuery
					c = b.addMenu({title:"jQuery"});
					
						a.render( c, "Accordion", "accordion" );
						a.render( c, "Tabs", "tabs" );
						a.render( c, "Toggle", "toggle" );
					
					b.addSeparator();
					
					
					// Helpers
					c = b.addMenu({title:"Other"});
					
						a.render( c, "Spacing", "spacing" );
						a.render( c, "Clear Floats", "clear" );
						
					// custom 
					b.addSeparator();
					d=b.addMenu({title:"Reversal"});
					  a.render(d,"Reversal Our Feature", "reversalourfeature");
					  a.render(d,"Reversal Price Table", "reversalpricetable");
					  a.render(d,"Reversal Our Capability", "reversalcapability");
					  a.render(d,"Reversal Recent Post", "reversalrecentpost");
					  a.render(d,"Reversal Portfolio", "reversalportfolio");
					  a.render(d,"Reversal Service", "reversalservice");
					  a.render(d,"Reversal Our Team", "reversalourteam");
					  a.render(d,"Reversal Paralux", "reversalparalux");
					  a.render(d,"Reversal Testimonial", "reversaltestimonial");
					  a.render(d,"Reversal Social", "reversalsocial");
					  a.render(d,"Reversal Bottom", "reversalbottom");
					  a.render(d,"Reversal Client", "reversalclient");
					  a.render(d,"Reversal Head", "reversalhead");	
					  
					  

					  
				});
	            
	          return btn;
			}
			return null;               
		},
		render : function(ed, title, id) {
			ed.add({
				title: title,
				onclick: function () {
					
					// Selected content
					var mceSelected = tinyMCE.activeEditor.selection.getContent();
					
					// Add highlighted content inside the shortcode when possible - yay!
					if ( mceSelected ) {
						var sympleDummyContent = mceSelected;
					} else {
						var sympleDummyContent = 'Sample Content';
					}
					
					// Accordion
					if(id == "accordion") {
						tinyMCE.activeEditor.selection.setContent('[symple_accordion]<br />[symple_accordion_section title="Section 1"]<br />Accordion Content<br />[/symple_accordion_section]<br />[symple_accordion_section title="Section 2"]<br />Accordion Content<br />[/symple_accordion_section]<br />[/symple_accordion]');
					}
					
					
					
					
					// Boxes
					if(id == "blueBox") {
						tinyMCE.activeEditor.selection.setContent('[symple_box color="blue" text_align="left" width="100%" float="none"]<br />' + sympleDummyContent + '<br />[/symple_box]');
					}
					if(id == "grayBox") {
						tinyMCE.activeEditor.selection.setContent('[symple_box color="gray" text_align="left" width="100%" float="none"]<br />' + sympleDummyContent + '<br />[/symple_box]');
					}
					if(id == "greenBox") {
						tinyMCE.activeEditor.selection.setContent('[symple_box color="green" text_align="left" width="100%" float="none"]<br />' + sympleDummyContent + '<br />[/symple_box]');
					}
					if(id == "redBox") {
						tinyMCE.activeEditor.selection.setContent('[symple_box color="red" text_align="left" width="100%" float="none"]<br />' + sympleDummyContent + '<br />[/symple_box]');
					}
					if(id == "yellowBox") {
						tinyMCE.activeEditor.selection.setContent('[symple_box color="yellow" text_align="left" width="100%" float="none"]<br />' + sympleDummyContent + '<br />[/symple_box]');
					}
					
					
					
					
					// Button
					if(id == "button") {
						tinyMCE.activeEditor.selection.setContent('[symple_button color="blue" url="http://www.wpexplorer.com" title="Visit Site" target="blank" border_radius=""]' + sympleDummyContent + '[/symple_button]');
					}
					
					
					
					
					// Clear Floats
					if(id == "clear") {
						tinyMCE.activeEditor.selection.setContent('[symple_clear_floats]');
					}
					
					
					
					
					// Callout
					if(id == "callout") {
						tinyMCE.activeEditor.selection.setContent('[symple_callout button_text="button text" button_color="blue" button_url="http://www.wpexplorer.com" button_rel="nofollow"]' + sympleDummyContent + '[/symple_callout]');
					}
					
					
					
					
					// Columns
					if(id == "half") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="one-half" position="first"]<br />' + sympleDummyContent + '<br />[/symple_column]');
					}
					if(id == "third") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="one-third" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "fourth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="one-fourth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "fifth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="one-fifth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "sixth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="one-sixth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					
					
					if(id == "twothird") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="two-third" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "threefourth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="three-fourth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "twofifth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="two-fifth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "threefifth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="three-fifth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "fourfifth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="four-fifth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}
					if(id == "fivesixth") {
						tinyMCE.activeEditor.selection.setContent('[symple_column size="five-sixth" position="first"]' + sympleDummyContent + '[/symple_column]');
					}	
					
									
				
					// Divider
					if(id == "solidDivider") {
						tinyMCE.activeEditor.selection.setContent('[symple_divider style="solid" margin_top="20px" margin_bottom="20px"]');
					}
					if(id == "dashedDivider") {
						tinyMCE.activeEditor.selection.setContent('[symple_divider style="dashed" margin_top="20px" margin_bottom="20px"]');
					}
					if(id == "dottedDivider") {
						tinyMCE.activeEditor.selection.setContent('[symple_divider style="dotted" margin_top="20px" margin_bottom="20px"]');
					}
					if(id == "doubleDivider") {
						tinyMCE.activeEditor.selection.setContent('[symple_divider style="double" margin_top="20px" margin_bottom="20px"]');
					}
					if(id == "fadeinDivider") {
						tinyMCE.activeEditor.selection.setContent('[symple_divider style="fadein" margin_top="20px" margin_bottom="20px"]');
					}
					if(id == "fadeoutDivider") {
						tinyMCE.activeEditor.selection.setContent('[symple_divider style="fadeout" margin_top="20px" margin_bottom="20px"]');
					}
					
					
					
					
					// Google Map
					if(id == "googlemap") {
						tinyMCE.activeEditor.selection.setContent('[symple_googlemap title="Envato Office" location="2 Elizabeth St, Melbourne Victoria 3000 Australia" zoom="10" height=250]');
					}
					
					
					
					
					// Heading
					if(id == "heading") {
						tinyMCE.activeEditor.selection.setContent('[symple_heading type="h2" title="' + sympleDummyContent + '" margin_top="20px;" margin_bottom="20px" text_align="left"]');
					}
					
					
					
					
					// Highlight
					if(id == "blueHighlight") {
						tinyMCE.activeEditor.selection.setContent('[symple_highlight color="blue"]' + sympleDummyContent + '[/symple_highlight]');
					}
					if(id == "grayHighlight") {
						tinyMCE.activeEditor.selection.setContent('[symple_highlight color="gray"]' + sympleDummyContent + '[/symple_highlight]');
					}
					if(id == "greenHighlight") {
						tinyMCE.activeEditor.selection.setContent('[symple_highlight color="green"]' + sympleDummyContent + '[/symple_highlight]');
					}
					if(id == "redHighlight") {
						tinyMCE.activeEditor.selection.setContent('[symple_highlight color="red"]' + sympleDummyContent + '[/symple_highlight]');
					}
					if(id == "yellowHighlight") {
						tinyMCE.activeEditor.selection.setContent('[symple_highlight color="yellow"]' + sympleDummyContent + '[/symple_highlight]');
					}					
					
					
					
					// Pricing
					if(id == "pricing") {
						tinyMCE.activeEditor.selection.setContent('[symple_pricing_table]<br />[symple_pricing size="one-half" plan="Free" cost="$0" per="per month" button_url="#" button_text="Sign Up" button_color="gold" button_border_radius="" button_target="self" button_rel="nofollow" position=""]<br /><ul><li>30GB Storage</li><li>512MB Ram</li><li>10 databases</li><li>1,000 Emails</li><li>25GB Bandwidth</li></ul>[/symple_pricing]<br /><br />[symple_pricing size="one-half" position="last" featured="yes" plan="Basic" cost="$19.99" per="per month" button_url="#" button_text="Sign Up" button_color="gold" button_border_radius="" button_target="self" button_rel="nofollow"]<br /><ul><li>30GB Storage</li><li>512MB Ram</li><li>10 databases</li><li>1,000 Emails</li><li>25GB Bandwidth</li></ul>[/symple_pricing]<br />[/symple_pricing_table]');
					}
					
					
					
					
					//Spacing
					if(id == "spacing") {
						tinyMCE.activeEditor.selection.setContent('[symple_spacing size="40px"]');
					}
					
					
					
					
					//Social
					if(id == "social") {
						tinyMCE.activeEditor.selection.setContent('[symple_social icon="twitter" url="http://www.twitter.com/wpexplorer" title="Follow Us" target="self" rel=""]');
					}
					
					
					
					
					//Skillbar
					if(id == "skillbar") {
						tinyMCE.activeEditor.selection.setContent('[symple_skillbar title="' + sympleDummyContent + '" percentage="100" color="#6adcfa"]');
					}
					
					
					
					
					//Tabs
					if(id == "tabs") {
						tinyMCE.activeEditor.selection.setContent('[symple_tabgroup]<br />[symple_tab title="First Tab"]<br />First tab content<br />[/symple_tab]<br />[symple_tab title="Second Tab"]<br />Third Tab Content.<br />[/symple_tab]<br />[/symple_tabgroup]');
					}
					
					
					
					//Testimonial
					if(id == "testimonial") {
						tinyMCE.activeEditor.selection.setContent('[symple_testimonial by="WPExplorer"]' + sympleDummyContent + '[/symple_testimonial]');
					}
					
					
					
					//Toggle
					if(id == "toggle") {
						tinyMCE.activeEditor.selection.setContent('[symple_toggle title="This Is Your Toggle Title"]' + sympleDummyContent + '[/symple_toggle]');
					}
					

					// Reversal our Feature

					if (id == "reversalourfeature"){
						tinyMCE.activeEditor.selection.setContent('[reversal_our_feature][reversal_our_feature_body title="Great Ideas" icon="007"]<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisc Morbi porttitor lectus vitae augue ullamcorper Honcus diam laoreet.</br/><br/>[/reversal_our_feature_body]<br/><br/>[reversal_our_feature_body title="Great Ideas" icon="008"]<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisc Morbi porttitor lectus vitae augue ullamcorper Honcus diam laoreet.</br/><br/>[/reversal_our_feature_body]</br/></br/>[reversal_our_feature_body title="Great Ideas" icon="004"]<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisc Morbi porttitor lectus vitae augue ullamcorper Honcus diam laoreet.</br/><br/>[/reversal_our_feature_body]<br/><br/>[reversal_our_feature_body title="Great Ideas" icon="006"]<br/><br/>Lorem ipsum dolor sit amet, consectetur adipisc Morbi porttitor lectus vitae augue ullamcorper Honcus diam laoreet.</br/><br/>[/reversal_our_feature_body]<br/>[/reversal_our_feature]')
					}

					// Reversal Price Table

					if (id == "reversalpricetable"){
						tinyMCE.activeEditor.selection.setContent('[reversal_price_table title="Price" text="Proin ultricies, nisl in imperdiet interdum, est tortor viverra neque, eu molestie dolor lacus sollicitudin sem. <br> Aenean fringilla suscipit justo. Curabitur sagittis quam dolor"][reversal_price_table_body feature="Ultimate" price="499" date="Month"]<br/><br/><p class="tbl-border"><span class="price-number">05</span><span class="price-item">Email Account</span></p><br/><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Website Layout</span></p><br><p class="tbl-border"><span class="price-number">03</span><span class="price-item">Photo Stock Banner</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Java Script Slider</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Hosting</span></p>[/reversal_price_table_body]<br/>[reversal_price_table_body feature="Ultimate" price="499" date="Month"]<br/><br/><p class="tbl-border"><span class="price-number">05</span><span class="price-item">Email Account</span></p><br/><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Website Layout</span></p><br><p class="tbl-border"><span class="price-number">03</span><span class="price-item">Photo Stock Banner</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Java Script Slider</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Hosting</span></p>[/reversal_price_table_body]<br/>[reversal_price_table_body feature="Ultimate" price="499" date="Month"]<br/><br/><p class="tbl-border"><span class="price-number">05</span><span class="price-item">Email Account</span></p><br/><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Website Layout</span></p><br><p class="tbl-border"><span class="price-number">03</span><span class="price-item">Photo Stock Banner</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Java Script Slider</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Hosting</span></p>[/reversal_price_table_body]<br/>[reversal_price_table_body feature="Ultimate" price="499" date="Month"]<br/><br/><p class="tbl-border"><span class="price-number">05</span><span class="price-item">Email Account</span></p><br/><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Website Layout</span></p><br><p class="tbl-border"><span class="price-number">03</span><span class="price-item">Photo Stock Banner</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Java Script Slider</span></p><br><p class="tbl-border"><span class="price-number">01</span><span class="price-item">Hosting</span></p>[/reversal_price_table_body][/reversal_price_table]')
					}

					// Reversal Head

					if (id == "reversalhead"){
						tinyMCE.activeEditor.selection.setContent('[reversal_head title="Profolio"]')
					}

					if (id == "reversalcapability"){
						tinyMCE.activeEditor.selection.setContent('[reversal_capability][reversal_capability_head title="OUR CAPABILITIES" text="Proin ultricies, nisl in imperdiet interdum, est tortor viverra neque, eu molestie dolor lacus sollicitudin sem.<br> Aenean fringilla suscipit justo. Curabitur sagittis quam dolor"]<br/><p class="text5">Proin ultricies, nisl in imperdiet interdum, est tortor viverra neque, eu molestie dolor lacus sollicitudin sem. Aenean<br/> fringilla suscipit justo, eu commodo nunc pharetra vel. Suspendisse pellentesque purus eget libero pharetra, at lacinia mi<br/> mollis. Curabitur sagittis quam dolor, eget mollis turpis gravida non.</p><br/>[/reversal_capability_head][reversal_capability_body capability="65" name="PHOTOGRAPHY"]<br/>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget sapien dictum<br>[/reversal_capability_body]<br/>[reversal_capability_body capability="65" name="PHOTOGRAPHY"]<br/>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget sapien dictum<br>[/reversal_capability_body]<br/>[reversal_capability_body capability="65" name="PHOTOGRAPHY"]<br/>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget sapien dictum<br>[/reversal_capability_body]<br/>[reversal_capability_body capability="65" name="PHOTOGRAPHY"]<br/>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget sapien dictum<br>[/reversal_capability_body][/reversal_capability]')
					}

					if (id == "reversalrecentpost"){
						tinyMCE.activeEditor.selection.setContent('[reversal_recent_post][reversal_recent_post_head title="RECENT POST"]<p class="text5">Proin ultricies, nisl in imperdiet interdum, est tortor viverra neque, eu molestie dolor lacus sollicitudin sem.<br>Aenean fringilla suscipit justo. Curabitur sagittis quam dolor</p>[/reversal_recent_post_head][reversal_post_body_section][/reversal_recent_post]')
					}

					if (id == "reversalportfolio"){
						tinyMCE.activeEditor.selection.setContent('[reversal_portfolio_head title="FEATURED WORKS"]<br/>Proin ultricies, nisl in imperdiet interdum, est tortor viverra neque, eu molestie dolor lacus sollicitudin sem.Aenean fringilla suscipit justo. Curabitur sagittis quam dolor<br/>[/reversal_portfolio_head][reversal_portfolio][reversal_portfolio_body][reversal_portfolio_body_section][/reversal_portfolio]')
					}

					if (id == "reversalservice"){
						tinyMCE.activeEditor.selection.setContent('[reversal_service][reversal_service_head title="SERVICES"][reversal_service_body][reversal_service_body_section1][reversal__body_section1_content title="ONLINE MARKETING" icon="#xe00d"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section1_content]<br/>[reversal__body_section1_content title="SEARCH ENGINE OPTIMIZATION" icon="#xe00f"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section1_content]<br/>[reversal__body_section1_content title="WEB DESIGN" icon="#x7d"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section1_content]<br/>[reversal__body_section1_content title="WORDPRESS THEME" icon="#xe002"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section1_content][/reversal_service_body_section1][reversal_service_body_image img_src="http://localhost/onepage-test/wp-content/themes/onepage/assets/images/service1.png"][reversal_service_body_section2][reversal__body_section2_content title="PHOTOGRAPHY" icon="#xe007"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section2_content]<br/>[reversal__body_section2_content title="SOCIAL MEDIA" icon="#x7a"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section2_content]<br/>[reversal__body_section2_content title="ADS NETWORK" icon="#x76"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section2_content]<br/>[reversal__body_section2_content title="ANALYTICS" icon="#x67"]<p class="text10">In hac habitasse platea dictumst. Nunc ultricies iaculis luctus. Aliquam eget eros eget sapien dictum dictum sed in enim.</p>[/reversal__body_section2_content][/reversal_service_body_section2][/reversal_service_body][/reversal_service]')
					}


					if (id == "reversalourteam"){
						tinyMCE.activeEditor.selection.setContent('[reversal_ourteam][reversal_ourteam_head title="OUR TEAM"]<br>Proin ultricies, nisl in imperdiet interdum, est tortor viverra neque, eu molestie dolor lacus sollicitudin sem.<br/>Aenean fringilla suscipit justo. Curabitur sagittis quam dolor<br>[/reversal_ourteam_head]<br>[reversal_ourteam_body][reversal_body_section][/reversal_body_section][/reversal_ourteam_body][/reversal_ourteam]')
					}

					if (id == "reversalparalux"){
						tinyMCE.activeEditor.selection.setContent('[reversal_paralux title="ONE PAGE CREATIVE PSD TEAMPLATE" logo_img="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/logo2.png" alt="logo"]<br/> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit<br/>[/reversal_paralux]')
					}


					if (id == "reversaltestimonial"){
						tinyMCE.activeEditor.selection.setContent('[reversal_customer][reversal_customer_body item="active" img_url="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/customer_img.png"]<br/>In neque purus, congue ut imperdiet vel, sodales vel neque. Phasellus tempus hendrerit tempus. Donec at tellus risus. Pel-<br> lentesque fermentum odio sit amet urna posuere dictum. Suspendisse eu gravida lectus, ac venenatis turpis.<br/>[/reversal_customer_body][reversal_customer_body item="" img_url="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/customer_img.png"]<br/>In neque purus, congue ut imperdiet vel, sodales vel neque. Phasellus tempus hendrerit tempus. Donec at tellus risus. Pel-<br> lentesque fermentum odio sit amet urna posuere dictum. Suspendisse eu gravida lectus, ac venenatis turpis.<br/>[/reversal_customer_body][reversal_customer_body item="" img_url="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/customer_img.png"]<br/>In neque purus, congue ut imperdiet vel, sodales vel neque. Phasellus tempus hendrerit tempus. Donec at tellus risus. Pel-<br> lentesque fermentum odio sit amet urna posuere dictum. Suspendisse eu gravida lectus, ac venenatis turpis.<br/>[/reversal_customer_body][/reversal_customer]')
					}


					if (id == "reversalsocial"){
						tinyMCE.activeEditor.selection.setContent('[reversal_social][reversal_social_body][/reversal_social]')
					}

					if (id == "reversalbottom"){
						tinyMCE.activeEditor.selection.setContent('[reversal_bottom_header headline="ONE PAGE CREATIVE PSD TEAMPLATE" email="tranmautritam@gmail.com" phone="84 935 815 989"]<br/>164 Nguyen Xi, Binh Thanh, Ho Chi Minh City, Vietnam<br/>[/reversal_bottom_header]')
					}

					if (id == "reversalclient"){
						tinyMCE.activeEditor.selection.setContent('[reversal_client][reversal_client_body item="active"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img1.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img4.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img3.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img2.png"][/reversal_client_body][reversal_client_body item=""][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img1.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img4.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img3.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img2.png"][/reversal_client_body][reversal_client_body item=""][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img1.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img4.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img3.png"][reversal_client_body_section client_logo="http://localhost/reversal-2/wp-content/themes/reversal/assets/images/client_img2.png"][/reversal_client_body][/reversal_client]')
					}

					


					// Recent Post
					
					if(id=="recentpost")
					{
					  var posts = prompt("Number of posts", "1");
                      var text = prompt("List Heading", "This is the heading text");

                      if (text != null && text != ''){
                      if (posts != null && posts != '')
                     tinyMCE.activeEditor.selection.setContent('[pentagon-recent-post posts="'+posts+'"]'+text+'[/pentagon-recent-post]');
                    else
                     tinyMCE.activeEditor.selection.setContent('[pentagon-recent-post]'+text+'[/pentagon-recent-post]');
                  }
                 else{
                  if (posts != null && posts != '')
                     tinyMCE.activeEditor.selection.setContent('[pentagon-recent-post posts="'+posts+'"]');
                  else
                     tinyMCE.activeEditor.selection.setContent('[pentagon-recent-post]');
                 }
			   
					 // tinyMCE.activeEditor.selection.setContent('[pentagon-recent-post posts="1"]' + sympleDummyContent + '[/pentagon-recent-post]');
					}
					
					
					return false;
				}
			})
		}
	
	});
	tinymce.PluginManager.add("symple_shortcodes", tinymce.plugins.sympleShortcodeMce);
})();