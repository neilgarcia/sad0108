<?php
							
							include_once '../db.php';
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
							$id = filter_input(INPUT_POST, 'id');
							$stmt = $dbc->prepare("SELECT * FROM orders WHERE customer_id = :cid");
							$stmt->execute(array(':cid'=>$id));
							$stmt2 = $dbc->prepare("SELECT * FROM customizedorder WHERE customer_id = :cid");
							$stmt2->execute(array(':cid'=>$id));
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
							
							while ($res2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
								$ctr++;
								$id = $res2['order_id'];
								$date = $res2['date'];
								$status = $res2['status'];
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
							echo "</table>"
						?>