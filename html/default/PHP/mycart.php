<script type="text/javascript" src="js/script.js"></script>
<?php

	include_once   '../db.php';

	session_start();
	if(isset($_SESSION['cart'])){

	$id = $_SESSION['cart']['prodID'];
	$quantity = $_SESSION['cart']['quantity'];
	
	
	for ($i=0; $i < count($id); $i++) { 
		$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id = :id");
		$stmt->execute(array(':id'=>$id[$i]));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		$img = '<img src="data:image/$imgType;base64,' . base64_encode( $res['prod_img'] ) . '" width=100 height=100 align="left" />';
		$name = $res['prod_name'];
		$price = $res['price'];
		echo '<div class="box">';
    	echo '<div class="close_box">X</div>';
    	$total = $quantity[$i] * $price;
    		echo $img;
    		echo "<h2>$name</h2>";
    		echo "<div id='prodPrice'>$price</div>";
    		echo "<input type='text' id='prodQuantity' value=$quantity[$i]>";
    		echo "<div id='prodTotal'>$total</div>";

		echo '</div>';
	}
	}else{
		echo "<h2>You dont have any orders!</h2>";
	}
?>

