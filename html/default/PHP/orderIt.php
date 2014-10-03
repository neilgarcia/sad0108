<?php

	session_start();
	if(isset($_SESSION['activeclient'])){
		if(isset($_SESSION['cart'])){
		$_SESSION['cart']['prodID'][]=$_POST['id'];
		$_SESSION['cart']['quantity'][]=$_POST['quantity'];
		$_SESSION['cart']['size'][]=$_POST['size'];
		}else{
			$_SESSION['cart'] = array();
			$_SESSION['cart']['prodID'][]=$_POST['id'];
			$_SESSION['cart']['quantity'][]=$_POST['quantity'];
			$_SESSION['cart']['size'][]=$_POST['size']; 
			
		}
		echo "Product Added to Cart!";
	}else{
		echo "You have to login before you can order!";
	}
	
?>