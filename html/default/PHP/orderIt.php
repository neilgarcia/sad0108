<?php

	session_start();
	if(isset($_SESSION['cart'])){
		$_SESSION['cart']['prodID'] = $_POST['id'];
		$_SESSION['cart']['quantity'] = $_POST['quantity'];
	}else{
		$_SESSION['cart'] = array();
		$_SESSION['cart']['prodID'] = $_POST['id'];
		$_SESSION['cart']['quantity'] = $_POST['quantity'];
	}

?>