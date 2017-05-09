<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
--><head>
		<title>Kharagpur Pvt. I.T.I</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/tooltipster.css">
		<!-- home slider-->
		<link href="css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">	
                                    <!---Gallery --->
                                    <script type="text/javascript" src="highslide/highslide-full.js"></script>
                                        <link rel="stylesheet" type="text/css" href="highslide/highslide.css">
                                        <script type="text/javascript">
                                        hs.graphicsDir = 'highslide/graphics/';
                                        hs.align = 'center';
                                        hs.transitions = ['expand', 'crossfade'];
                                        hs.fadeInOut = true;
                                        hs.dimmingOpacity = 0.8;
                                        hs.outlineType = 'rounded-white';
                                        hs.captionEval = 'this.thumb.alt';
                                        hs.marginBottom = 105; // make room for the thumbstrip and the controls
                                        hs.numberPosition = 'caption';

                                        // Add the slideshow providing the controlbar and the thumbstrip
                                        hs.addSlideshow({
                                                //slideshowGroup: 'group1',
                                                interval: 5000,
                                                repeat: false,
                                                useControls: true,
                                                overlayOptions: {
                                                        className: 'text-controls',
                                                        position: 'bottom center',
                                                        relativeTo: 'viewport',
                                                        offsetY: -60
                                                },
                                                thumbstrip: {
                                                        position: 'bottom center',
                                                        mode: 'horizontal',
                                                        relativeTo: 'viewport'
                                                }
                                        });
                                        </script>
                                 <!--Gallery ---->
	<style type="text/css">.highslide img {cursor: url(highslide/graphics/zoomin.cur), pointer !important;}.highslide-viewport-size {position: fixed; width: 100%; height: 100%; left: 0; top: 0}</style></head>

	<body>
	
		<section id="header_area">
			<div class="menu">
<?php include 'menuinclude.php';?>
</div>
		</section>
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			<!--Customize Content-->
                                                        <div class="clearfix main_content floatleft">
                                                            <div class="highslide-gallery" style="width: 100%; margin: auto">
                                                        <!--
                                                                4) This is how you mark up the thumbnail images with an anchor tag around it.
                                                                The anchor's href attribute defines the URL of the full-size image. Given the captionEval
                                                                option is set to 'this.img.alt', the caption is grabbed from the alt attribute of
                                                                the thumbnail image.
                                                        -->
                                                                <a class="highslide" href="slider/1.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/1.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/2.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/2.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/3.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/3.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/4.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/4.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/gallery5.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/gallery5.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/gallery6.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/gallery6.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/gallery7.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/gallery7.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/gallery8.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/gallery8.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>

                                                                <a class="highslide" href="slider/gallery9.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/gallery9.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a> 

                                                        <a class="highslide" href="slider/gallery10.jpg" onclick="return hs.expand(this)">
                                                                        <img src="slider/gallery10.jpg" style="width:120px; height:80px;" alt="Mountain valley"></a>           

                                                        </div>
                                                        </div>
                                                      <!--Customize Content-->
				
				<div class="clearfix sidebar_container floatright">
				
					
					
			<div class="menu">
<?php include 'sidemenu.php';?>
</div>
		
				</div>
			</div>
		</section>
		
		<section id="footer_top_area">
			<div class="clearfix wrapper footer_top">
				<div class="clearfix footer_top_container">
					
					
					
				</div>
			</div>
		</section>
		
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright © All rights reserved by <span>Kharagpur Pvt. I.T.I</span></p>
				</div>
				<div class="clearfix social floatright">
					<ul>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-facebook-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-twitter-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-google-plus-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-linkedin-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-tumblr-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-pinterest-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-rss-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-sitemap"></i> </a></li>
					</ul>
				</div>
			</div>
		</section>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>	
		<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.tooltip').tooltipster();
			});
		</script>
		 <script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>		
		<script src="js/pgwslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.pgwSlider').pgwSlider({
					
					intervalDuration: 5000
				
				});
			});
		</script>
		<script type="text/javascript" src="js/placeholder_support_IE.js"></script>
		
<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
-->	
		
	

<div style="padding: 0px; border: medium none; margin: 0px; position: absolute; left: 0px; top: 0px; width: 100%; z-index: 1001; direction: ltr;" class="highslide-container"><a style="position: absolute; top: -9999px; opacity: 0.75; z-index: 1;" href="javascript:;" title="Click to cancel" class="highslide-loading">Loading...</a><div style="display: none;"></div><div style="padding: 0px; border: medium none; margin: 0px; visibility: hidden;" class="highslide-viewport highslide-viewport-size"></div><table style="padding: 0px; border: medium none; margin: 0px; visibility: hidden; position: absolute; border-collapse: collapse; width: 0px;" cellspacing="0"><tbody style="padding: 0px; border: medium none; margin: 0px;"><tr style="padding: 0px; border: medium none; margin: 0px; height: auto;"><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll 0px 0px; height: 20px; width: 20px;"></td><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll 0px -40px; height: 20px; width: 20px;"></td><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll -20px 0px; height: 20px; width: 20px;"></td></tr><tr style="padding: 0px; border: medium none; margin: 0px; height: auto;"><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll 0px -80px; height: 20px; width: 20px;"></td><td class="rounded-white highslide-outline" style="padding: 0px; border: medium none; margin: 0px; position: relative;"></td><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll -20px -80px; height: 20px; width: 20px;"></td></tr><tr style="padding: 0px; border: medium none; margin: 0px; height: auto;"><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll 0px -20px; height: 20px; width: 20px;"></td><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll 0px -60px; height: 20px; width: 20px;"></td><td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: transparent url(&quot;http://www.kpiti.org/highslide/graphics/outlines/rounded-white.png&quot;) repeat scroll -20px -20px; height: 20px; width: 20px;"></td></tr></tbody></table></div></body>