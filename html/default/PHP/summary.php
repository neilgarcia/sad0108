
				
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
						$total = 0;
						$id = $_SESSION['cart']['prodID'];
						$quantity = $_SESSION['cart']['quantity'];
						$size = $_SESSION['cart']['size'];
						for ($i=0; $i < count($id) ; $i++) { 
							$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id = :id");
							$stmt->execute(array(':id'=>$id[$i]));
							$res = $stmt->fetch(PDO::FETCH_ASSOC);
							$price = $res['price'];
							$name = $res['prod_name'];

							echo "<h5>Name: $name</h5>";
							echo "<h5>PID" . rand(10000,99999) . "</h5>";
							echo "<h5 style='float:right;margin-right:20px;'>Price: " . $price * $quantity[$i] . "</h5>";
							echo "<h5>Item Price: $price</h5>";
							echo "<h5 style='border-bottom:1px solid black;'>Quantity:" . $quantity[$i] . "</h5>";
							$total = $total + $price * $quantity[$i];
						}

						echo "<h3 class='topdown'>Total Amount: $total</h3>"

					?>	
					<br><br><br>
						
						<input type="button" id="btnSummary" class="login" value="Finish">
					</div>
			
					
					
					</section>
				</div>
				
				<!-- end of main -->
				