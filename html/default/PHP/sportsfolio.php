
				
				<div class="main">
					<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					<section class="cols">
						<div class="cl">&nbsp;</div>
					</section>
					<section class="cnus">
					<center>
					<h1>Products Ready to Order</h1>
						
						<?php

							include_once 'db.php';
							$stmt = $dbc->prepare("SELECT * FROM products");
							$stmt->execute();
							while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
								$product = $res['prod_name'];
								echo "<a class='fancybox' rel='group' href='css/shirts/$product.jpg'><img src='css/shirts/$product.jpg' alt='' /></a>";
							}

						?>


			
					
					</center>
					</section>
				</div>
				
				<!-- end of main -->
				