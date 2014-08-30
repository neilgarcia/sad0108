<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="home.php">SG</a></h1>
					<!-- search -->
					<div class="search">
						
							<span class="field">
								<?php

									session_start();
									if(isset($_SESSION['activeclient'])){
										echo "Welcome back " , $_SESSION['activeclient'] , "!";
									}else if(isset($_SESSION['activeadmin'])){
										echo "Welcome back " , $_SESSION['activeadmin'] , "!";
									}else{
										echo "Please Login!";
									}

								?>
							</span>
							
						
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
						<?php

						if(isset($_SESSION['activeadmin']) || isset($_SESSION['activeclient']))
							echo '<li><a href="PHP/signout.php">LOG OUT</a></li>';
						else
							echo '<li><a href="login.php">LOG IN</a></li>';
						?>
						
					</ul>
				</nav>
				<!-- end of navigation -->