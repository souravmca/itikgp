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
                                    <!--Table-->
                                        <link href="css/table.css" rel="stylesheet" type="text/css">
                                    <!--Table-->
	</head>

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
                                                                            <div class="contact_us">
						
							<h1>Contact us</h1>
							
							<p></p>
							
							<form action="contactinsert.php" method="post">
								<p><input class="wpcf7-text" name="txtname" placeholder="Full Name*" type="text"></p>
								<p><input class="wpcf7-email" name="txtemail" placeholder="Email*" type="text"></p>
								<p><input class="wpcf7-text" name="txtsubject" placeholder="Subject*" type="text"></p>
								<p><textarea class="wpcf7-textarea" name="txtmessage" placeholder="Message*"></textarea></p>
								<p><input class="wpcf7-submit" value="Submit" type="Submit"></p>
							</form>
							
							<?php
							$mysqli = new mysqli('127.0.0.1', 'root', '','testdb');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Connection OK';
$sql = "SELECT roll,name,sub1,sub2 FROM testtab";
$result = $mysqli->query($sql);
$mysqli->close();
?>
                                                                                                                               <table style="font-size: 16pt;" align="left">
                                                                                                                                <tbody><tr>
                                                                                                                                    <td>Khargpur Pvt. I.T.I</td>
                                                                                                                                </tr>
                                                                                                                                    <tr>
                                                                                                                                    <td>NH6,Sahachawk Word no.12, Kharagpur.Poschim Medini Pur, pincode-721301
Contact-7001273957.
                                                                                                                            </td>
                                                                                                                                </tr>

                                                                                                                                    <tr>
                                                                                                                                    <td>Dist-Pashchim Medinipur </td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td>West Bengal</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td>PIN : 721301</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td>Email : XXXXXXXX</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td>Phone : 7001273957</td>
                                                                                                                                </tr>
                                                                                                                            </tbody></table>
							
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
		
	


</body>