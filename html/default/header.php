<!-- header -->
				<header id="header">
					<h1 id="logo"><a href="home.php">SG</a></h1>
					<!-- search -->
					<div class="search">
						
							<span class="field">
								<div class="click-nav">
								  <ul class="no-js">
								    <li>
								      <a href="#" class="clicker"><img src="css/images/i-1.png" alt="Icon">

								      <?php

								      	session_start();
										if(isset($_SESSION['activeclient'])){
											echo $_SESSION['activeclient'];
										}else if(isset($_SESSION['activeadmin'])){
											echo $_SESSION['activeadmin'];
										}else{
											echo "User";
										}

								      ?>

								      </a>
								      <?php 

								        if(isset($_SESSION['activeclient'])){
											echo '<ul>
										        <li><a href="php/signout.php"><img src="css/images/i-6.png" alt="Icon">Sign out</a></li>
										      </ul>';
										}else if(isset($_SESSION['activeadmin'])){
											echo '<ul>
										        <li><a href="?action=admin"><img src="css/images/i-3.png" alt="Icon">Admin</a></li>
										        <li><a href="php/signout.php"><img src="css/images/i-6.png" alt="Icon">Sign out</a></li>
										      </ul>';
											
										}else{
											echo '<ul>
										        <li><a href="login.php"><img src="css/images/i-5.png" alt="Icon">Login</a></li>
										      </ul>';
										}

								      	
								      ?>
								      
								    </li>
								  </ul>
								</div>
								<?php

									

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
						<li class="active"><a href="?action=home">HOME</a></li>
						<li><a href="?action=aboutus">ABOUT US</a>
							
							
							
						<li><a href="?action=faqs">FAQ's</a></li>
						<li><a href="?action=sportsfolio">SPORTSFOLIO</a></li>
						<li><a href="#">ONLINE SERVICES</a></li>
						<li><a href="?action=contactus">CONTACT US</a></li>
						<li><a href="?action=contactus">GALLERY</a></li>
						

						
					</ul>
				</nav>
				<!-- end of navigation -->