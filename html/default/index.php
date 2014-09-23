<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Stargame Sportswear</title>
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/liquid-slider.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.liquid-slider.min.js"></script>

	<script>
/* If installing in the footer, you won't need $(function() {} */

</script>
	<?php
	if(!isset($_GET['action']) || ($_GET['action']<>'productAdd' && $_GET['action']<>'edit'))
		echo '<script type="text/javascript" src="js/script.js"></script>';
	?>
	
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<?php include_once	'header.php' ?>
				<?php

					$action = 'home'; 
					// Specify some disallowed paths 
					$disallowed_paths = array('header', 'footer', 'adminpage', 'prodAdd'); 
					if (!empty($_GET['action'])) { 
					    $tmp_action = basename($_GET['action']); 
					    // If it's not a disallowed path, and if the file exists, update $action 
					    if (!in_array($tmp_action, $disallowed_paths) && file_exists("PHP/{$tmp_action}.php")) 
					        $action = $tmp_action; 
					} 
					// Include $action 
					include("PHP/$action.php"); 

				?>
				<div class="socials">
					<div class="socials-inner">
						<h3>Follow us</h3>
						<ul>
							<li><a href="https://www.facebook.com/stargamesportswear" class="facebook-ico"><span></span>Facebook</a></li>
							<li><a href="https://www.twitter.com/stargameswear" class="twitter-ico"><span></span>Twitter</a></li>
							<li><a href="http://instagram.com/stargamesportswear" class="rss-feed-ico"><span></span>Instagram</a></li>
							<li><a href="#" class="myspace-ico"><span></span>G-mail</a></li>
							<li><a href="https://profile.yahoo.com/645RD7JIMOADVGDUXCDGH2CRTY/" class="john-doe-123-ico"><span></span>Yahoo Mail</a></li>
						</ul>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
				<?php include_once 'footer.php'; ?>
			<!-- end of container -->	
		</div>
		<!-- end of shell -->	
	</div>
	<!-- end of wrapper -->
</body>
</html>