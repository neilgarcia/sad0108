<?php
	
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
	
	
?>