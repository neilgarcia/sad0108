
				<?php

				$inner = filter_input(INPUT_POST, 'inner');
				$outer = filter_input(INPUT_POST, 'output');
				$tname = filter_input(INPUT_POST, 'tName');
				$fPos = filter_input(INPUT_POST, 'fontPosition');
				$cfType = filter_input(INPUT_POST, 'cFontType');
				$fType = filter_input(INPUT_POST, 'fontType');
				$pName = filter_input(INPUT_POST, 'playerName');
				$textile = filter_input(INPUT_POST, 'cTextile');
				$logoPosition = filter_input(INPUT_POST, 'cLogoPosition');
				$sizes = filter_input(INPUT_POST, 'sizes');
				$quantity = filter_input(INPUT_POST, 'cQuantity');

				?>
				<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					<section class="cols">
						<div class="cl">&nbsp;</div>
					</section>
					<section class="cnus">
					<center>
					<h1>Your Order Summary</h1>
					</center>
					<?php

						include_once 'db.php';
						
						$stmt = $dbc->prepare("SELECT account_id from accounts WHERE username = :user");
						$stmt->execute(array(':user'=>$_SESSION['activeclient']));
						$res = $stmt->fetch(PDO::FETCH_ASSOC);
						$id = $res['account_id'];
						$stmt = $dbc->prepare("SELECT * from users WHERE account_id = :id");
						$stmt->execute(array(':id'=>$id));
						$res = $stmt->fetch(PDO::FETCH_ASSOC);
						$name = $res['first_name'] . " " . $res['last_name'];
						$add = $res['address'];
						$email = $res['email'];
						$cnum = $res['contact_num'];
						$date = date('M d, Y');
						

					?>
					<Br><br><br>
					<span>Name:</span><?php echo $name ?>
					<span style="float:right;">Date: <?php echo $date ?> </span><br>
					<span>Address:</span><?php echo $add ?><br>
					<span>Contact Number:</span><?php echo $cnum ?><br>
					<span>Email:</span><?php echo $email ?><br><br>
					<div class="summaryContent">
					<h3 style="display:inline">Description:</h3>
					<h3 style="float:right;">Amount:</h3>
					<?php
							
							$inner = $_SESSION['inner'];
							$outer = $_SESSION['outer'];
							$tname = $_SESSION['tname'];
							$fPos = $_SESSION['fPos'];
							$cfType =$_SESSION['cfType'];
							$pName = $_SESSION['pName'];
							$textile = $_SESSION['textile'];
							$logoPosition =$_SESSION['logoPosition'];
							$sizes =$_SESSION['sizes'];
							$quantity =$_SESSION['quantity'];
				











							
	
							echo "<h5>Inner: $inner</h5>";
							echo "<h5>Outer: $outer</h5>";
							echo "<h5>Team Name: $tname</h5>";
							echo "<h5>Position: $fPos</h5>";
							echo "<h5>Font Type: $cfType</h5>";
							echo "<h5>Player Name Position: $pName</h5>";
							echo "<h5>Textile: $textile</h5>";
							echo "<h5>Logo Position: $logoPosition</h5>";
							echo "<h5></h5>";
							echo "<h5>Quantity: $quantity</h5>";
							
							$total = 1000 * $quantity;
						

						echo "<h3 class='topdown'>Total Amount: " . $total .  "</h3>"
					?>
						
					</div>
			
					
					
					</section>
				</div>
				
				<!-- end of main -->
				