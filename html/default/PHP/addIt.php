<?php
	session_start();
	$id = $_SESSION['cart']['prodID'];
	$quantity = $_SESSION['cart']['quantity'];
	$size = $_SESSION['cart']['size'];
	$date = date('Y-m-d');
	$cid = $_SESSION['cid'];
	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM orders");
	$stmt->execute();
	$count = $stmt->rowCount();
	$p = 'PID' . ($count + 1);
	$stmt = $dbc->prepare("INSERT INTO orders VALUES(

		:orderID,
		:orderDate,
		:customerID

	)");
	$stmt->execute(array(

		':orderID'=>$p,
		':orderDate'=>$date,
		':customerID'=>$cid

	));

	for ($i=0; $i < count($id); $i++) { 
		
		$prodID = $id[$i];
		$q = $quantity[$i];
		$s = $size[$i];
		$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id = :id");
		$stmt->execute(array(':id'=>$prodID));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		$price = $res['price'];
		$stmt = $dbc->prepare("INSERT INTO orderquantity VALUES(

			:payID,
			:prodID,
			:quantity,
			:amount,
			:total

		)");
		$stmt->execute(array(

			':payID'=>$p,
			':prodID'=>$prodID,
			':quantity'=>$q,
			':amount'=>$price,
			':total'=>$price*$q

		));

	}

?>