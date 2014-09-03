<?php

	include_once 'db.php';
	$prodId = $_POST['prodId'];
	$stmt = $dbc->prepare("DELETE * FROM products WHERE prod_id = :prodId");
	$stmt->execute(array(':prodId'=>$prodId));


?>