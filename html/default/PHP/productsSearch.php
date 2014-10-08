<?php


		
		include_once '../db.php';
		$search = filter_input(INPUT_POST, 'data');
		$ctr = 0;
		$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_name LIKE '$search%'");
		$stmt->execute();

		echo '<div id="tableContainer" class="tableContainer">';
		echo '<table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollContent">';
		
		
		echo '
			<tr class=fixedHeader>
					<th><a href="#">Product ID</a></th>
					<th><a href="#">Product Name</a></th>
					<th><a href="#">Product Type</a></th>
					<th><a href="#">Design Name</a></th>
					<th><a href="#">Textile</a></th>
					<th><a href="#">Color</a></th>
					<th><a href="#">Specification</a></th>
					<th><a href="#">Reversible</a></th>
					<th><a href="#">Type</a></th>
					<th><a href="#">Font</a></th>
					<th><a href="#">Sizes</a></th>
					<th><a href="#">Price</a></th>
					<th><a href="#">Process</a></th>
				</tr>
		';
		while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
			$ctr++;
				$prod_id = $res['prod_id'];
				$prod_name = $res['prod_name'];
				$prod_type = $res['prod_type'];
				$design_name = $res['design_name'];
				$textile = $res['textile'];
				$color = $res['color'];
				$specification = $res['specification'];
				$reversible = $res['reversible'];
				$type = $res['type'];
				$font = $res['font'];
				$sizes = $res['sizes'];
				$price = $res['price'];

				$edit = "$prod_id;$prod_name;$prod_type;$design_name;$textile;$color;$specification;$reversible;$type;$font;$sizes;$price";
				$edit = urlencode($edit);
			if($ctr%2==0){
				echo "<tr class=normalRow>";
			echo "<td>" . $res['prod_id'] . "</td>";
			echo "<td>" . $res['prod_name'] . "</td>";
			echo "<td>" . $res['prod_type'] . "</td>";
			echo "<td>" . $res['design_name'] . "</td>";
			echo "<td>" . $res['textile'] . "</td>";
			echo "<td>" . $res['color'] . "</td>";
			echo "<td>" . $res['specification'] . "</td>";
			echo "<td>" . $res['reversible'] . "</td>";
			echo "<td>" . $res['type'] . "</td>";
			echo "<td>" . $res['font'] . "</td>";
			echo "<td>" . $res['sizes'] . "</td>";
			echo "<td>" . $res['price'] . "</td>";
			echo "<td>
					<a href=http://localhost/sad0108/html/default/index.php?action=admin&prodId=" . $res['prod_id'] . "&imgType=" . $res['img_type'] . ">Delete</a>
					<a href=http://localhost/sad0108/html/default/index.php?action=edit&data=$edit>Edit</a>
				  </td>";
			echo "</tr>";
		}else{
			echo "<tr class=alternateRow>";
			echo "<td>" . $res['prod_id'] . "</td>";
			echo "<td>" . $res['prod_name'] . "</td>";
			echo "<td>" . $res['prod_type'] . "</td>";
			echo "<td>" . $res['design_name'] . "</td>";
			echo "<td>" . $res['textile'] . "</td>";
			echo "<td>" . $res['color'] . "</td>";
			echo "<td>" . $res['specification'] . "</td>";
			echo "<td>" . $res['reversible'] . "</td>";
			echo "<td>" . $res['type'] . "</td>";
			echo "<td>" . $res['font'] . "</td>";
			echo "<td>" . $res['sizes'] . "</td>";
			echo "<td>" . $res['price'] . "</td>";
			echo "<td>
					<a href=http://localhost/sad0108/html/default/index.php?action=admin&prodId=" . $res['prod_id'] . "&imgType=" . $res['img_type'] . ">Delete</a>
					<a href=http://localhost/sad0108/html/default/index.php?action=edit&data=$edit>Edit</a>
				  </td>";
			echo "</tr>";
		}
			
		}
		
	

	echo"</tbody>
		</table>";

?>