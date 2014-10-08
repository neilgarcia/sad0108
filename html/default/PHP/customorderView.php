<?php

	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM customizedorder");
	$stmt->execute();
	echo '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollContent">';

		echo '
			<tr class="fixedHeader">
					<th><a href="#">Customer ID</a></th>
					<th><a href="#">Order ID</a></th>
					<th><a href="#">Date</a></th>
					<th><a href="#">Inner Color</a></th>
					<th><a href="#">Outer Color</a></th>
					<th><a href="#">Team Name</a></th>
					<th><a href="#">Name Position</a></th>
					<th><a href="#">Font Type</a></th>
					<th><a href="#">Player Name</a></th>
					<th><a href="#">Textile</a></th>
					<th><a href="#">Logo Position</a></th>
					<th><a href="#">Sizes</a></th>
					<th><a href="#">Quantity</a></th>
					<th><a href="#">Status</a></th>
				</tr>
		';
		
		$ctr = 0;
	while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
		$ctr++;
		$id = $res['order_id'];
		$inner = $res['inner'];
		$outer = $res['outer'];
		$tName = $res['teamName'];
		$namepos = $res['namePosition'];
		$fType = $res['fontType'];
		$pName = $res['playerName'];
		$textile = $res['textile'];
		$logoPos = $res['logoPosition'];
		$size = $res['sizes'];
		$quantity = $res['quantity'];
		$cid = $res['customer_id'];
		$date = $res['date'];
		$status = $res['status'];
		if($ctr%2==0){
			echo "<tr class='normalRow'>";
			echo "<td>$cid</td>";
			echo "<td>$id</td>";
			echo "<td>$date</td>";
			echo "<td>$inner</td>";
			echo "<td>$outer</td>";
			echo "<td>$tName</td>";
			echo "<td>$namepos</td>";
			echo "<td>$fType</td>";
			echo "<td>$pName</td>";
			echo "<td>$textile</td>";
			echo "<td>$logoPos</td>";
			echo "<td>$size</td>";
			echo "<td>$quantity</td>";
			if($status == 'pending'){
				echo "<td><input type='radio' id=$id checked name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' id=$id name='paymentStatus$ctr' value='paid'>Paid</td>";
			}else{
				echo "<td><input type='radio' id=$id  name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' checked id=$id name='paymentStatus$ctr' value='paid'>Paid</td>";
			}
			echo "</tr>";
		}else{
			echo "<tr class='alternateRow'>";
			echo "<td>$cid</td>";
			echo "<td>$id</td>";
			echo "<td>$date</td>";
			echo "<td>$inner</td>";
			echo "<td>$outer</td>";
			echo "<td>$tName</td>";
			echo "<td>$namepos</td>";
			echo "<td>$fType</td>";
			echo "<td>$pName</td>";
			echo "<td>$textile</td>";
			echo "<td>$logoPos</td>";
			echo "<td>$size</td>";
			echo "<td>$quantity</td>";
			if($status == 'pending'){
				echo "<td><input type='radio' id=$id checked name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' id=$id name='paymentStatus$ctr' value='paid'>Paid</td>";
			}else{
				echo "<td><input type='radio' id=$id  name='paymentStatus$ctr' value='pending'>Pending";
				echo "<input type='radio' id=$id checked name='paymentStatus$ctr' value='paid'>Paid</td>";
			}
			
			echo "</tr>";
		}
	}

	echo "</table>";

?>