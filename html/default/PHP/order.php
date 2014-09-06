<?php
	
	$id = $_GET['id'];
	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id=:prodId");
	$stmt->execute(array(':prodId'=>$id));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	echo "<label>Product Name: </label>" . $res['prod_id'];
	echo "<br><label>Product Type: </label>" . $res['prod_type'];
	echo "<br><label>Design: </label>" . $res['design_name'];
	echo "<br><label>Textile: </label>" . $res['textile'];
	echo "<br><label>Color: </label>" . $res['color'];
	echo "<br><label>specification: </label>" . $res['specification'];
	echo "<br><label>Reversible: </label>" . $res['reversible'];
	echo "<br><label>Type: </label>" . $res['type'];
	echo "<br><label>Font: </label>" . $res['font'];
	echo "<br><label>Sizes: </label>" . $res['sizes'];
	echo "<br><label>Product Type: </label>" . $res['price'];
	echo "<br><a href='?action=orderIt' id='order'>Order Now</a>";
?>
