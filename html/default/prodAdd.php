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
	<!--<script type="text/javascript" src="js/addShirts.js"></script>-->
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
				
				<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					
					<section class="cnus">
					
					
				<form action="php/addShirts.php" method="post"  enctype="multipart/form-data">
					<input type="file" name="attachment"><br>
					<label for="prodId">Product Id:</label>
					<input type="text" readonly name="prodId" value="<?php echo rand(10000, 99999); ?>"><br>
					<label for="prodName">Product Name:</label>
					<input type="text" name="prodName"><br>
					<label for="prodType">Product Type:</label>
					<div class="block">
					<input type="radio" name="prodType" value="Basketball Jersey">Basketball Jersey<br>
					<input type="radio" name="prodType" value="Volleyball Uniform">Volleyball Uniform<br>
					<input type="radio" name="prodType" value="Badminton Uniform">Badminton Uniform<br>
					<input type="radio" name="prodType" value="Varsity Jacket">Varsity Jacket<br>
					<input type="radio" name="prodType" value="Sublimation">Sublimation
					</div>
					<br>
					<label for="designName">Design Name:</label>
					<input type="text" name="designName"><br>
					<label for="textile">Textile:</label>
					<input type="text" name="textile"><br>
					<label for="color">Color:</label>
					<input type="text" name="color">
					<label for="specification">Specification:</label>
					<input type="text" name="specification"><br>
					<label for="reversible">Reversible:</label>
					<div class="block">
					<input type="radio" name="reversible" value="Yes">Yes<br>
					<input type="radio" name="reversible" value="No">No<br>
					</div>
					<label for="type">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:</label>
					
					<div class="block">
					<input type="radio" name="shirtType" value="Tacketwill">Tacketwill<br>
					<input type="radio" name="shirtType" value="Printed">Printed<br>
					</div>
					<br><br>
					<label for="font">Font:</label>
					<div class="block">
					<input type="radio" name="font" value="collegiate">Collegiate<br>
					<input type="radio" name="font" value="Old English">Old English<br>
					</div>
					<br><br><br>
					<label for="sizes">Available Sizes:</label>
					<div class="block">
					<input type="checkbox" name="sizes[]" value="XS">XS&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="L">L&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="3XL">3XL<br>
					<input type="checkbox" name="sizes[]" value="S">S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="XL">XL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="4XL">4XL<br>
					<input type="checkbox" name="sizes[]" value="M">M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="2XL">2XL&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="5XL">5XL<br><br>
					</div>
					<br>
					<label for="price">Price:</label>
					<input type="text" name="price">
					<br><br>
					<input type="submit" value="Add Product">
				</form>
					
					
					</section>
					

				</div>
				<!-- end of main -->
				<!-- start of footer -->
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
					<?php include_once 'footer.php'; ?>
				</div>
			</div>
			<!-- end of container -->	
		</div>
		<!-- end of shell -->	
	</div>
	<!-- end of wrapper -->
</body>
</html>