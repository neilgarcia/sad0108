<a href="#" class="m-btn-grey grey-btn">request a demo</a>
					<section class="cols">
						<div class="cl">&nbsp;</div>
					</section>
					<section class="cnus">
					<center>
					<h1>Products Ready to Order</h1>
						<div class="liquid-slider" id="slider-id">
						
						<?php
							
							include_once 'db.php';
							$stmt = $dbc->prepare("SELECT * FROM products");
							$stmt->execute();
							$ctr=0;
							
							while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
								
								$ctr++;
								$product = $res['prod_img'];
								$imgType = $res['img_type'];
								$id = $res['prod_id'];
								if($ctr==1){
									echo "<div>";
								}
								
								echo "<a class='link' id='$id'><img src='data:image/$imgType;base64," . base64_encode( $product ) . "' /></a>";
								
								if($ctr==9){
									echo "</div>";
									$ctr=0;
								}
								
								
							}

						
						?>
						
						
						</div>
						<Br>
						<a href="#" class="button link2">Proceed to Cart</a>

			
					
					</center>
					</section>