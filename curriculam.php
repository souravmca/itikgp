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
                                                                            <b style="font-size:24px; color:#09C; padding:10px 0 0 0px;">Extra Curricular activities</b><br><br>
                                                                                Extra Curricular activities will goes here…
																				

																				<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" à la place de "mysql" qui est obsolète.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e paramètre si vous avez mis un mot de passe à root
*/
$mysqli = new mysqli('127.0.0.1', 'root', '','testdb');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Connection OK';
$sql = "SELECT roll,name,sub1,sub2 FROM testtab";
$result = $mysqli->query($sql);
ECHO "<table border=1>";
ECHO "<tr><td>ROLL<TD>NAME<TD>SUB1<TD>SUB2";

if ($result->num_rows > 0) {
    // output data of each row
while ($row = $result->fetch_assoc()){

echo "<TR>"."<TD>".$row['roll']."<TD>".$row['name']."<TD>".$row['sub1']."<TD>".$row['sub2'];
}
  
} else {
    echo "0 results";
}
ECHO"</TABLE>";
$mysqli->close();
?>

					
					
					
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