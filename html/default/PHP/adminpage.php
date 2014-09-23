<center>
<h2><strong>
Welcome, 
<?php 
	
	echo $_SESSION['activeadmin'], "!";
	if(isset($_GET['prodId']) && isset($_GET['imgType']) && isset($_SESSION['activeadmin'])){

		$prodId = $_GET['prodId'];
		$type = $_GET['imgType'];
		include_once 'db.php';
		$stmt = $dbc->prepare("DELETE FROM products WHERE prod_id = :prodId");
		$stmt->execute(array(':prodId'=>$prodId));


	}

?>
</strong></h2>
<br>
<h2><strong>ADMIN PAGE</strong></h2>
<br>
<a href="?action=productAdd" id="btnAdd" class="sidemargin button">Add</a>
<br><br>
<?php
	
	include_once 'db.php';
	$stmt = $dbc->prepare("SELECT * FROM products");
	$stmt->execute();
	echo "<table border=1 id='tblProducts'>";
	echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Type</th><th>Design Name</th><th>Textile</th><th>Color</th><th>Specification</th><th>Reversible</th><th>Type</th><th>Font</th><th>Sizes</th><th>Price</th><th>Process</th></tr>";
	while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
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
		echo "<tr>";
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
	echo "</table>";

?>




</center>