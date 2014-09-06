
				
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
								$product = $res['prod_img'];
								$imgType = $res['img_type'];
								$id = $res['prod_id'];
								$img = '<img src="data:image/$imgType;base64,' . base64_encode( $product ) . '" />';
								echo "<a class='link' id='$id'><img src='data:image/$imgType;base64," . base64_encode( $product ) . "' /></a></a>";
								

								//echo "<a class='fancybox' rel='group' href='css/shirts/$product.jpg'>" . '<img src="data:image/$imgType;base64,' . base64_encode( $product ) . '" />' . "</a>";
							}

						?>


			
					
					</center>
					</section>
				</div>
				
				<!-- end of main -->
				