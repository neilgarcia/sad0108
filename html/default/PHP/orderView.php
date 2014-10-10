<?php

	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM orders");
	$stmt->execute();

	echo '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollContent">';
		echo '
			<tr class="fixedHeader">
					<th><a href="#">Customer ID</a></th>
					<th><a href="#">Order ID</a></th>
					<th><a href="#">Date</a></th>
					<th><a href="#">Product ID</a></th>
					<th><a href="#">Quantity</a></th>
					<th><a href="#">Amount</a></th>
					<th><a href="#">Total</a></th>
					<th><a href="#">Status</a></th>
				</tr>
		';
		
		$ctr = 0;
	while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
		$id = $res['order_id'] ;
		$ctr++;
		$stmt2 = $dbc->prepare("SELECT * FROM orderquantity WHERE order_id = :orderID");
		$stmt2->Execute(array(':orderID'=>$res['order_id']));
		$res2 = $stmt2->fetch(PDO::FETCH_ASSOC);
		$status = $res['status'];
		if($ctr%2==0){
			echo "<tr class='normalRow'>";
			echo "<td>" . $res['customer_id'] . "</td>";
			echo "<td>" . $res['order_id'] . "</td>";
			echo "<td>" . $res['order_date'] . "</td>";
			echo "<td>" . $res2['prod_id'] . "</td>";
			echo "<td>" . $res2['quantity'] . "</td>";
			echo "<td>" . $res2['amount'] . "</td>";
			echo "<td>" . $res2['total'] . "</td>";
			if($status == 'pending'){
				echo "<td><input type='radio' id=$id checked name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' id=$id name='paymentStatus$ctr' value='paid'>Paid</td>";
			}else{
				echo "<td><input type='radio' id=$id  name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' id=$id checked name='paymentStatus$ctr' value='paid'>Paid</td>";
			}
			echo "</tr>";
		}else{
			echo "<tr class='alternateRow'>";
			echo "<td>" . $res['customer_id'] . "</td>";
			echo "<td>" . $res['order_id'] . "</td>";
			echo "<td>" . $res['order_date'] . "</td>";
			echo "<td>" . $res2['prod_id'] . "</td>";
			echo "<td>" . $res2['quantity'] . "</td>";
			echo "<td>" . $res2['amount'] . "</td>";
			echo "<td>" . $res2['total'] . "</td>";
			if($status == 'pending'){
				echo "<td><input type='radio' id=$id checked name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' id=$id name='paymentStatus$ctr' value='paid'>Paid</td>";
			}else{
				echo "<td><input type='radio' id=$id  name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' checked id=$id name='paymentStatus$ctr' value='paid'>Paid</td>";
			}
			echo "</tr>";
		}
	}
	echo "</table>";

?>