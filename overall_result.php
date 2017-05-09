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
                                    <!--Table-->
                                    <style type="text/css" title="currentStyle">
                                                            @import "media/css/demo_page.css";
                                                            @import "media/css/demo_table.css";
                                                    </style>
                                                    <script type="text/javascript" charset="utf-8" src="media/js/jquery.js"></script>
                                                    <script type="text/javascript" charset="utf-8" src="media/js/jquery.dataTables.js"></script>
                                                    <script type="text/javascript" charset="utf-8" src="media/js/AutoFill.js"></script>
                                                    <script type="text/javascript" charset="utf-8">
                                                            $(document).ready( function () {
                                                                    var oTable = $('#example').dataTable();
                                                                    new AutoFill( oTable );
                                                            } );
                                                    </script>
                                    <!--Table--> 
                                    <!--Ajax & Validation -->
                                    <script type="text/javascript" src="js/admin.js"></script>
                                    <!--Ajax & Validation -->
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
                                                                                                                                                        <b style="font-size:24px; color:#09C; padding:10px 0 0 0px;">Overall Results</b><br><br>
                                                                                <div id="container">
                                                                                    <div style=" background-color: #e7d693; padding: 10px 0px 10px 0px; height: 30px;">
                                                                                        <div style=" width: 250px; float: left; margin-left: 80px; ">Choose Year :
                                                                                            <select name="year" id="year">
                                                                                                <option value="" selected="selected">**Select Year**</option>
                                                                                                                                                                                                    <option value="2008">2008</option>
                                                                                                                                                                                                    <option value="2013">2013</option>
                                                                                                                                                                                            </select>
                                                                                        </div>
                                                                                        <div style=" width: 200px; text-align: left; margin-left: 20px; padding-left: 20px; float: left;">

                                                                                            <input value="View" onclick="getOverallResult();" type="button">
                                                                                        </div>

                                                                                    </div>


                                                                                                        <form>
                                                                                                        <div id="demo">
                                                                                <table class="display" id="example" border="0" cellpadding="0" cellspacing="0">
                                                                                        <thead>
                                                                                                    <tr style="background:#aad0ed;">
                                                                                                    <th>Trade</th>
                                                                                                    <th>Number  of Trainees Admitted</th>
                                                                                                    <th>Number of Trainees appeared for AITT</th>
                                                                                                    <th>Number of Trainees Passed</th>
                                                                                                    <th>Number of Certificates issued</th>
                                                                                                    <th>Result File</th>
                                                                                                    <th>&nbsp;</th>
                                                                                                </tr>
                                                                                        </thead>

                                                                                        <tbody id="recBody">


                                                                                        </tbody>
                                                                                </table>
                                                                                                        </div>
                                                                                                </form>

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