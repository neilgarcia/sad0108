
				
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
							$stmt = $dbc->prepare("SELECT * FROM orders WHERE customer_id = :cid");
							$stmt->execute(array(':cid'=>$_SESSION['cid']));
							echo '<div id="tableContainer" class="tableContainer">';
							echo '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollContent">';
							
							
							echo '
								<tr class=fixedHeader>
										<th><a href="#">Order ID</a></th>
										<th><a href="#">Order Date</a></th>
										<th><a href="#">Status</a></th>

									</tr>
							';
							$ctr = 0;
							while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
								$ctr++;
								$id = $res['order_id'];
								$date = $res['order_date'];
								$status = $res['status'];
								if($ctr%2==0){
								echo "<tr class=normalRow>";
								echo "<td>" . $id . "</td>";
								echo "<td>" . $date . "</td>";
								echo "<td>" . $status . "</td>";
								echo "</tr>";
							}else{
								echo "<tr class=alternateRow>";
								echo "<td>" . $id . "</td>";
								echo "<td>" . $date . "</td>";
								echo "<td>" . $status . "</td>";
								echo "</tr>";
							}
							

								
							}
							$stmt = $dbc->prepare("SELECT * FROM customizedorder WHERE customer_id = :cid");
							$stmt->execute(array(':cid'=>$_SESSION['cid']));
							while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
								$ctr++;
								$id = $res['order_id'];
								$date = $res['date'];
								$status = $res['status'];
								if($ctr%2==0){
								echo "<tr class=normalRow>";
								echo "<td>" . $id . "</td>";
								echo "<td>" . $date . "</td>";
								echo "<td>" . $status . "</td>";
								echo "</tr>";
							}else{
								echo "<tr class=alternateRow>";
								echo "<td>" . $id . "</td>";
								echo "<td>" . $date . "</td>";
								echo "<td>" . $status . "</td>";
								echo "</tr>";
							}
							

								
							}
						
						?>
						</table>
						<Br>
						

			
					
					</center>
					</section>
				</div>
				
				<!-- end of main -->
