<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class=" js" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
-->
<head>
		<title>Kharagpur Pvt. I.T.I</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
.mySlides {display:none}
.demo {cursor:pointer}
</style>
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
	</head>

	<body>
	
		<section id="header_area">
			<div class="menu">
<?php include 'menuinclude.php';?>
</div>
		</section>
		
		<section id="content_area">

		

		
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					<div class="w3-container">
  <h2>Slideshow Indicators</h2>
  <p>Using images to indicate how many slides there are in the slideshow, and highlight the image the user is currently viewing.</p>
</div>

<div class="w3-content" style="max-width:1200px">
  <img class="mySlides" src="slider/1.jpg" style="width:60%">
  <img class="mySlides" src="slider/2.jpg" style="width:60%">
  <img class="mySlides" src="slider/3.jpg" style="width:60%">
  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="slider/1.jpg" style="width:50%" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="slider/2.jpg" style="width:50%" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="slider/3.jpg" style="width:50%" onclick="currentDiv(3)">
    </div>
  </div>
</div>
					
					<div class="clearfix content">
						<div class="content_title"><h2>Welcome to Kharagpur Pvt. I.T.I</h2></div>
						
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								
							</div>
							<div class="clearfix post_detail">
								<h2><a href="">Welcome to Kharagpur Pvt.   I.T.I</a></h2>
								<div class="clearfix post-meta">
									
								</div>
								<div class="clearfix post_excerpt">
									<img src="images/thumb.png" alt="">
									<p>Industrial Training Institute is training institute which provide training 
									in technical technical disciplines in India. Normally a person who has passed 
									10 standard (Secondery Lavel) is eligible for admission to ITI. 
									The objective of operating of ITI is provide technical manpower to industries. 
									Students are trained in basic skills required for Technical Industry. 
									ITI's provide training in technical disciplines like electrician, fitter, 
									plumber etc. Student of engineering trade can go for higher studies like 
									diploma in engineering. There are also specialized short term courses in 
									Advanced Training Institute (ATI) which enhances the skills of candidates. 
									ITI qualified student can run their own garage, motor/generator/transformer 
									winding workshops or fabrication shops depending upon trade opted. </p>
								</div>
								
							</div>
						</div>
						
						
						
											
					</div>
					
					
				</div>
				<div class="clearfix sidebar_container floatright">
				
					<div class="menu">
<?php include 'sidemenu.php';?>
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
						<li><a class="tooltip tooltipstered" href=""><i class="fa fa-rss-square"></i></a></li>
						<li><a class="tooltip tooltipstered" href="login.html"><i class="fa fa-sitemap"></i> </a></li>
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
		<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

		<script type="text/javascript" src="js/placeholder_support_IE.js"></script>
		
<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
-->	
		
	

</body>
</html>