<?php

	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM users");
	$stmt->execute();
	echo '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="">';
		echo '<thead class="fixedHeader">
			<tr>
					<th><a href="#">Customer ID</a></th>
					<th><a href="#">First Name</a></th>
					<th><a href="#">Last Name</a></th>
					<th><a href="#">Email</a></th>
					<th><a href="#">Contact Number</a></th>
					<th><a href="#">Address</a></th>

				</tr>
		</thead>';
		echo '<tbody class="scrollContent">';
		$ctr = 0;
	while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
		$ctr++;
		$CId = $res['customer_id'];
		$fname = $res['first_name'];
		$lname = $res['last_name'];
		$email = $res['email'];
		$cnum = $res['contact_num'];
		$add = $res['address'];
		if($ctr%2==0){
			echo "<tr class='normalRow'>";
			echo "<td>$CId</td>";
			echo "<td>$fname</td>";
			echo "<td>$lname</td>";
			echo "<td>$email</td>";
			echo "<td>$cnum</td>";
			echo "<td>$add</td>";
			echo "</tr>";
		}else{
			echo "<tr class='alternateRow'>";
			echo "<td>$CId</td>";
			echo "<td>$fname</td>";
			echo "<td>$lname</td>";
			echo "<td>$email</td>";
			echo "<td>$cnum</td>";
			echo "<td>$add</td>";
			echo "</tr>";
		}
	}
	echo "</tbody></table>";


?>