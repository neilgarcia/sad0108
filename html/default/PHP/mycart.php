
<?php

	include_once   '../db.php';

	session_start();
	if(isset($_SESSION['cart']) && count($_SESSION['cart']['prodID'])>0){

	$id = $_SESSION['cart']['prodID'];
	$quantity = $_SESSION['cart']['quantity'];
	$totalPrice = 0;
	
	for ($i=0; $i < count($id); $i++) { 
		$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id = :id");
		$stmt->execute(array(':id'=>$id[$i]));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		$img = '<img src="data:image/$imgType;base64,' . base64_encode( $res['prod_img'] ) . '" width=100 height=100 align="left" />';
		$name = $res['prod_name'];
		$price = $res['price'];
		$prodID = $res['prod_id'];
		echo "<div class='box' id=$i>";
    	echo '<div class="close_box">X</div>';
    	$total = $quantity[$i] * $price;
    		echo $img;
    		echo "<h2 id='prodID'>$prodID</h2>";
    		echo "<h2 id='prodName'>$name</h2>";
    		echo "<div id='prodPrice'>$price</div>";
    		echo "<input type='text' id='prodQuantity' value=$quantity[$i]>";
    		echo "<div id='prodTotal'>$total</div>";

		echo '</div>';
		$totalPrice = $totalPrice + $total;
	}
<<<<<<< HEAD
	echo'
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="7LMBZ8ZN2AXM2">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>';

=======
	echo "<div id='totalPrice'>Total Amount: $totalPrice</div>"
	?>
	<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="stargamesportswear@yahoo.com">
	<input type="hidden" name="currency_code" value="PHP">
	<input type="hidden" name="item_name" value="shirt">
	<input type="hidden" id='payPrice' name="amount" value="<?php echo $totalPrice ?>">
	<input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	</form>
	<?php
>>>>>>> 86c628ffdf280f7591cd216d717840b4f725e30b
	}else{
		echo "<h2>You dont have any orders!</h2>";
	}
?>

