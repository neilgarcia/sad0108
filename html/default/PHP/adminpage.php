<center>
<h2><strong>
Welcome, 
<?php 
	
	echo $_SESSION['activeadmin'], "!";
?>
</strong></h2>
<br>
<h2><strong>Admin Page</strong></h2>
<br>
<a href="?action=productAdd" id="btnAdd" class="sidemargin button">Add</a>
<a href="#" id="btnEdit"  class="sidemargin button">Edit</a>
<a href="#" id="btnDelete"  class="sidemargin button">Delete</a>
<br><br>
<?php
	
	include_once 'db.php';
	$stmt = $dbc->prepare("SELECT * FROM products");
	$stmt->execute();
	echo "<table border=1 id='tblProducts'>";
	echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Type</th><th>Design Name</th><th>Textile</th><th>Color</th><th>Specification</th><th>Reversible</th><th>Type</th><th>Font</th><th>Sizes</th><th>Price</th></tr>";
	while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
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
		echo "</tr>";
	}
	echo "</table>";

?>




</center>