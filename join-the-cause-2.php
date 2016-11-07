<?php
require_once("db.inc.php");
if(isset($_POST['updatevalue'])) {
	insertDood();
}
$count = getCount();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Join The Cause</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/thumbs.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/sForm.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<!--<script src="js/jquery.easing.1.3.js"></script>-->
	<script src="js/jquery.iosslider.min.js"></script>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/faddlogo.png" alt="Fadd Logo">
						</a>
					</h1>
					<div class="menu_block ">
						
						<div class="clear"></div>
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="what-not-to-do.html">What Not To Do</a></li>
								<!--=====<li><a href="how-to-prevent.html">How To Prevent</a></li>=====-->		
								<li class="current"><a href="join-the-cause.php">Join The Cause</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content4"><div class="ic">enter text hear</div>
			<div class="container_12">
				<div class="gallery">
					<div class="grid_12.1">
					<center>
					<p style="color: red; text-align: center"><?php echo $count; ?> users have taken the pledge!</p>
					<p>Thank you for taking the pledge! We hope you'll practice safe driving, and also promote the cause that we stand for. Driving while distracted is a dangerous action. Pay attention to the road, whatever you're doing can wait. Please remember to invite your friends to take the pledge to stop distracted driving.</p>
					</center>
					</div>	
				</div>
			</div>
		</div>
		<div class="bottom_block">
			<div class="container_12">
					<div class="grid_4">
				<h4 class="inline-text">Follow FADD</h4>
				<a href="http://facebook.com"><img class="inline-image" src="images/facebook.png" class="fadd-social" alt="Facebook" width="32" height="32"></a>
				<a href="http://twitter.com"><img class="inline-image" src="images/twitter.png" class="fadd-social" alt="Twitter" width="32" height="32"></a>
				

				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<ul class="footerlist">
							<li><a href="sources.html">Sources</a></li>
							<li><a href="contact-us.html">Contact Us</a></li>
							<li><p>© 2015 Styko Company</p></li>
						</ul>
						<ul class="footerlist2">
							<li><p>Magnolia Team 1 - Area 5 - Region 2</p></li>
						<ul class="footerlist2">
							<li><p>Andrew Nunn (#02-0228-0028) - Taylor Riley (#02-0228-0013) - Jacob Sass (#02-0228-0030) - Daniel Toerner (#02-0228-0015)</p></li>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>