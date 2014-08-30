<?php

	 
	 $prodId = filter_input(INPUT_POST, 'prodId');
	 $prodName = filter_input(INPUT_POST, 'prodName');
	 $prodType = filter_input(INPUT_POST, 'prodType');
	 $designName = filter_input(INPUT_POST, 'designName');
	 $textile = filter_input(INPUT_POST, 'textile');
	 $color = filter_input(INPUT_POST, 'color');
	 $specification = filter_input(INPUT_POST, 'specification');
	 $reversible = filter_input(INPUT_POST, 'reversible');
	 $type = filter_input(INPUT_POST, 'shirtType');
	 $font = filter_input(INPUT_POST, 'font');
	//$sizes = filter_input(INPUT_POST, 'sizes');
	 $price = filter_input(INPUT_POST, 'price');
	 $info = pathinfo($_FILES['attachment']['name']);
	 $ext = $info['extension'];
	 

	 include_once	'../db.php';

	 if(!empty($prodId) && !empty($prodName) && !empty($prodType) && !empty($designName) && !empty($textile) && !empty($color) && !empty($specification) && !empty($reversible) && !empty($type) && !empty($font) &&  !empty($price)){
	 	$stmt = $dbc->prepare("INSERT INTO products VALUES(
	 		:prodId,
	 		:prodName,
	 		:prodType,
	 		:designName,
	 		:textile,
	 		:color,
	 		:specification,
	 		:reversible,
	 		:type,
	 		:font,
	 		:sizes,
	 		:price
	 	)");
	 	$stmt->execute(array(
	 		':prodId'=>$prodId,
	 		':prodName'=>$prodName,
	 		':prodType'=>$prodType,
	 		':designName'=>$designName,
	 		':textile'=>$textile,
	 		':color'=>$color,
	 		':specification'=>$specification,
	 		':reversible'=>$reversible,
	 		':type'=>$type,
	 		':font'=>$font,
	 		':sizes'=>'XS',
	 		':price'=>$price
	 	));
	 	$filename = $prodName . "." . $ext;
	 $target = '../css/shirts/' . $filename;
	 move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);
	 }else{
	 	echo 2;
	 }
	 echo "<pre>";
	 print_r($_POST);
	 echo "</pre>";

?>