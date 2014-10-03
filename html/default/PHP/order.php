<?php
	
	$id = $_GET['id'];
	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id=:prodId");
	$stmt->execute(array(':prodId'=>$id));
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
	$size = explode(',', $res['sizes']);
	$prod_id = $res['prod_id'];
	$prod_type = $res['prod_type'];
	$prod_name = $res['prod_name'];
	$design_name = $res['design_name'];
	$textile = $res['textile'];
	$color = $res['color'];
	$specification = $res['specification'];
	$reversible = $res['reversible'];
	$type = $res['type'];
	$font = $res['font'];
	$price = $res['price'];
	$product = $res['prod_img'];
	$imgType = $res['img_type'];
?>
<script type="text/javascript" src="js/script.js"></script>
<?php
	echo '<img src="data:image/$imgType;base64,' . base64_encode( $product ) . '" align=left style="width:300px;height:350px;vertical-align:middle;margin-right:10px;"/>';
 ?>
<form id="orderForm">
	<label>Product ID: </label><input type="text" readonly name="id" value="<?php echo $prod_id ?>">
<br><label>Product Name: </label><input type="text" readonly name="name" value="<?php echo $prod_name ?>">	
<br><label>Product Type: </label><input type="text" readonly name="" value="<?php echo $prod_type ?>">
<br><label>Design: </label><input type="text" readonly name="" value="<?php echo $design_name ?>">
<br><label>Textile: </label><input type="text" readonly name="" value="<?php echo $textile ?>">
<br><label>Color: </label><input type="text" readonly name="" value="<?php echo $color ?>">
<br><label>specification: </label><input type="text" name="" readonly value="<?php echo $specification ?>">
<br><label>Reversible: </label><input type="text" name="" readonly value="<?php echo $reversible ?>">
<br><label>Type: </label><input type="text" readonly name="" value="<?php echo $type ?>">
<br><label>Font: </label><input type="text" readonly name="" value="<?php echo $font ?>">
<br><label>Sizes: </label><select name="size" readonly><?php foreach ($size as $key => $value) {

	echo "<option>" . $value . "</option>";
	
} ?></select>
<br><label>Product Price: </label><input name="" type="text" readonly value="<?php echo $price ?>">
<br><label>Quantity: </label><input name="quantity" type="text">
<br><input type="button"  id="btnCart" value="Add to cart">
</form>
