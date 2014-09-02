<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Stargame Sportswear</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
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
				<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="home.php">SG</a></h1>
					<!-- search -->
					<div class="search">
						<form method="post">
							<span class="field"><input type="text" class="field" value="keywords here ..." title="keywords here ..." /></span>
							<input type="submit" class="search-btn" value="" />
						</form>
					</div>
					<!-- end of search -->
				</header>
				<!-- end of header -->
				<!-- navigation -->
				<nav id="navigation">
					<a href="#" class="nav-btn">HOME<span class="arr"></span></a>
					<ul>
						<li class="active"><a href="home.php">HOME</a></li>
						<li><a href="aboutus.php">ABOUT US</a>
							
							
							
						<li><a href="faqs.php">FAQ's</a></li>
						<li><a href="sportsfolio.php">SPORTSFOLIO</a></li>
						<li><a href="#">ONLINE SERVICES</a></li>
						<li><a href="contactus.php">CONTACT US</a></li>
						<li><a href="login.php">
						
						<?php 
						
							session_start();
						
								if (ISSET($_SESSION['activeadmin'])){
										
										echo"Hello!, '".$_SESSION['activeadmin']."' ";
								}
								
								else{
									
									header ("Location: ../home.php");
									
									}
										
						
						
						
						?>
						
						
						</a></li>
					</ul>
				</nav>
				<!-- end of navigation -->
				<!-- slider -->
				<div class="m-slider">
					<div class="slider-holder">
						<span class="slider-shadow"></span>
						<span class="slider-b"></span>
						<div class="slider flexslider">
							<ul class="slides">
								<li>
									<div class="img-holder">
										<img src="css/images/slide-img1.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>CHOOSE YOUR OWN</h2>
										<div class="box-cnt">
											<p>Check out the latest trends when it comes to sports apparel and make sure you own one. Order now! Limited stocks only.</p>
										</div>
										<a href="#" class="grey-btn">Choose now</a>
									</div>
								</li>
								<li>
									<div class="img-holder">
										<img src="css/images/slide-img2.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>CUSTOMIZE YOUR OWN</h2>
										<div class="box-cnt">
											<p>We value your preference and interest. So what are you waiting for? Customize now your own sports apparel and be featured at our website.</p>
										</div>
										<a href="#" class="grey-btn">Customize now</a>
									</div>
								</li>
								<li>
									<div class="img-holder">
										<img src="css/images/slide-img1.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>SUBMIT YOUR OWN</h2>
										<div class="box-cnt">
											<p>Already have your own design ready? What are you waiting for let's take a good look at it and start your orders now!</p>
										</div>
										<a href="#" class="grey-btn">Submit now</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>		
				<!-- end of slider -->
				<!-- main -->
				<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					<section class="cols">
						<div class="col">
							<img src="css/images/col-img3.png" alt="" />
							<div class="col-cnt">
								<h2>Registration</h2>
								<p>Want to join us? Want to be a Stargamers?</p>
								<a href="registration.php" class="more">Register Now!</a>
							</div>
						</div>
						<div class="cl">&nbsp;</div>
					</section>
					<section class="post">
						<div class="video-holder">
							<img src="css/images/video-img.png" alt="" />
						</div>

						<div class="post-cnt">
							<h2>Official Supplier of GMA Network</h2>
							<p><strong>Yes! We are proud to say that Stargame Sportswear is now the official supplier of GMA Network.</strong>We are chosen because we can guarantee you to give you nothing but the finest and highest quality sports apparel.</p>

							<ul>
								<li><a href="#">Know more about us</li>
								<li><a href="#">Just ask us a question</a></li>
								<li><a href="#">Location instructions</a></li>
								<li><a href="#">Why are we a trusted manufacturer?</a></li>
							</ul>
						</div>
						<div class="cl">&nbsp;</div>
					</section>

					<section class="testimonial">
						<h2>STARGAME SPORTSWEAR</h2>

						<p><strong class="quote">“</strong>No. 1 supplier of high quality sportswear. This is your game. You can change the game STARGAME.<strong class="quote">          ”</strong></p>

						<p class="author">Almedo "Dong" Turla, <strong>Stargame Sportswear</strong></p>
					</section>
				</div>
				<!-- end of main -->
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
				<div id="footer">
					<div class="footer-cols">
						<div class="col">
							<h2>Services</h2>
							<ul>
								<li><a href="#"><strong>Customized Orders</strong></a></li>
								<li><a href="#"><strong>Customer Profiling</strong></a></li>
								<li><a href="#"><strong>Order Pre-designs</strong></a></li>
								<li><a href="#"><strong>Order Ready-to-Wear</strong></a></li>
							</ul>
						</div>
						<div class="col">
							<h2>Events</h2>
							<ul>
								<li><a href="#"><strong>Summer Sale</strong></a></li>
								<li><a href="#"><strong>Back-to-School Promo</strong></a></li>
								<li><a href="#"><strong>Bulk Order Promo</strong></a></li>
								<li><a href="#"><strong>Christmas Sale</strong></a></li>
							</ul>
						</div>
						<div class="col">
							<h2>Sizing</h2>
							<ul>
								<li><a href="#"><strong>Local Size Chart</strong></a></li>
								<li><a href="#"><strong>International Size Chart</strong></a></li>
								<li><a href="#"><strong>Sample Jersey w/ Sizes</strong></a></li>
								<li><a href="#"><strong>Ways to get your own size</strong></a></li>
							</ul>
						</div>
						<div class="col">
							<h2>Other Products</h2>
							<ul>
								<li><a href="#"><strong>Sports Cap</strong></a></li>
								<li><a href="#"><strong>Sports Socks</strong></a></li>
								<li><a href="#"><strong>Sports Headbands</strong></a></li>
								<li><a href="#"><strong>Sports Wristbands</strong></a></li>
							</ul>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!-- end of footer-cols -->
					<div class="footer-bottom">
						<nav class="footer-nav">
							<ul>
								<li class="active"><a href="home.php">HOME</a></li>
								<li><a href="aboutus.php">ABOUT US</a></li>
								<li><a href="faqs.php">FAQ's</a></li>
								<li><a href="sportsfolio.php">SPORTSFOLIO</a></li>
								<li><a href="#">ONLINE SERVICES</a></li>
								<li><a href="contactus.php">CONTACT US</a></li>
								<li><a href="login.php">LOG IN</a></li>
							</ul>
						</nav>
						<p class="copy">&copy; Copyright 2014 Stargame Sportswear<span>|</span> <strong>Design by <a href="http://chocotemplates.com" target="_blank">SAD0108</a></strong></p>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
			</div>
			<!-- end of container -->	
		</div>
		<!-- end of shell -->	
	</div>
	<!-- end of wrapper -->
</body>
</html>