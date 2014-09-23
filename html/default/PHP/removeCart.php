<?php
	include_once	'../db.php';
	session_start();
	$prodID = $_POST['id'];
	$quantity = $_POST['quantity'];
	$id = $_SESSION['cart']['prodID'];
	$q = $_SESSION['cart']['quantity'];
	$count  = count($q);
	for ($i=0; $i < $count; $i++) { 
		if($id[$i] == $prodID && $q[$i] == $quantity){
			array_splice($_SESSION['cart']['prodID'], $i, 1);
			array_splice($_SESSION['cart']['quantity'], $i, 1);
			break;
		}
	}
	$id = $_SESSION['cart']['prodID'];
	$quantity = $_SESSION['cart']['quantity'];
	$totalPrice = 0;
	
	for ($i=0; $i < count($id); $i++) { 
		$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id = :id");
		$stmt->execute(array(':id'=>$id[$i]));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		$price = $res['price'];
		$prodID = $res['prod_id'];
    	$total = $quantity[$i] * $price;
		$totalPrice = $totalPrice + $total;
	}
	echo $totalPrice;
?>