<?php

	include_once 'db.php';
	if(isset($_GET['data'])){
		$data = $_GET['data'];
		$pieces = explode(';', $data);

	 $prodId = $pieces[0];
	  $prodName = $pieces[1];
	  $prodType = $pieces[2];
	  $designName = $pieces[3];
	  $textile = $pieces[4];
	  $color = $pieces[5];
	  $specification = $pieces[6];
	  $reversible = $pieces[7];
	  $type = $pieces[8];
	  $font = $pieces[9];
	  $sizes = $pieces[10];
	  $price = $pieces[11];

	}
	if(isset($_POST['regShirt'])){
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
	 $sizes = isset($_POST['sizes'])?implode(',', $_POST['sizes']):'';
	 $price = filter_input(INPUT_POST, 'price');
	 if(!empty($prodId) && !empty($prodName) && !empty($prodType) && !empty($designName) && !empty($textile) && !empty($color) && !empty($specification) && !empty($reversible) && !empty($type) && !empty($font) && !empty($sizes) &&  !empty($price)){
	 	$stmt = $dbc->prepare("UPDATE products SET
	 		prod_name = :prodName,
	 		prod_type = :prodType,
	 		design_name = :designName,
	 		textile = :textile,
	 		color = :color,
	 		specification = :specification,
	 		reversible = :reversible,
	 		type = :type,
	 		font = :font,
	 		sizes = :sizes,
	 		price = :price
	 	WHERE prod_id=:prodId");
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
	 		':sizes'=>$sizes,
	 		':price'=>$price
	 	));
		 $res = "Product Successfully Edited!";
		 
	 }else{
	
	 		$res = "Please complete all fields!";
	 	
	 	

	 	
	 }
	 echo $res;

	}

?>
<div class="main">
				
					
					<section class="cnus">
					<form method="post" action="http://localhost/sad0108/html/default/index.php?action=edit">
					
					<label for="prodId">Product Id:</label>
					<input type="text" readonly name="prodId" value="<?php 

						
						echo $prodId;

					 ?>"><br>
					<label for="prodName">Product Name:</label>
					<input type="text" name="prodName" value="<?php if(isset($prodName)){echo $prodName;}?>"><br>
					<label for="prodType">Product Type:</label>
					<div class="block">
					<input type="radio" name="prodType" value="Basketball Jersey" <?php if(isset($prodType) && $prodType=='Basketball Jersey'){ echo ' checked="checked"'; } ?>>Basketball Jersey<br>
					<input type="radio" name="prodType" value="Volleyball Uniform" <?php if(isset($prodType) && $prodType=='Volleyball Uniform'){ echo ' checked="checked"'; } ?>>Volleyball Uniform<br>
					<input type="radio" name="prodType" value="Badminton Uniform" <?php if(isset($prodType) && $prodType=='Badminton Uniform'){ echo ' checked="checked"'; } ?>>Badminton Uniform<br>
					<input type="radio" name="prodType" value="Varsity Jacket" <?php if(isset($prodType) && $prodType=='Varsity Jacket'){ echo ' checked="checked"'; } ?>>Varsity Jacket<br>
					<input type="radio" name="prodType" value="Sublimation" <?php if(isset($prodType) && $prodType=='Sublimation'){ echo ' checked="checked"'; } ?>>Sublimation
					</div>
					<br>
					<label for="designName">Design Name:</label>
					<input type="text" name="designName" value="<?php if(isset($designName)){echo $designName;}?>"><br>
					<label for="textile">Textile:</label>
					<input type="text" name="textile" value="<?php if(isset($textile)){echo $textile;}?>"><br>
					<label for="color">Color:</label>
					<input type="text" name="color" value="<?php if(isset($color)){echo $color;}?>">
					<label for="specification">Specification:</label>
					<input type="text" name="specification" value="<?php if(isset($specification)){echo $specification;}?>"><br>
					<label for="reversible">Reversible:</label>
					<div class="block">
					<input type="radio" name="reversible" value="Yes" <?php if(isset($reversible) && $reversible=='Yes'){ echo ' checked="checked"'; } ?>>Yes<br>
					<input type="radio" name="reversible" value="No" <?php if(isset($reversible) && $reversible=='No'){ echo ' checked="checked"'; } ?>>No<br>
					</div>
					<label for="type">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:</label>
					
					<div class="block">
					<input type="radio" name="shirtType" value="Tacketwill" <?php if(isset($type) && $type=='Tacketwill'){ echo ' checked="checked"'; } ?>>Tacketwill<br>
					<input type="radio" name="shirtType" value="Printed" <?php if(isset($type) && $type=='Printed'){ echo ' checked="checked"'; } ?>>Printed<br>
					</div>
					<br><br>
					<label for="font">Font:</label>
					<div class="block">
					<input type="radio" name="font" value="Collegiate" <?php if(isset($font) && $font=='Collegiate'){ echo ' checked="checked"'; } ?>>Collegiate<br>
					<input type="radio" name="font" value="Old English" <?php if(isset($font) && $font=='Old English'){ echo ' checked="checked"'; } ?>>Old English<br>
					</div>
					<br><br><br>
					<label for="sizes">Available Sizes:</label>
					<div class="block">
					<input type="checkbox" name="sizes[]" value="XS">XS&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="L">L&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="3XL">3XL<br>
					<input type="checkbox" name="sizes[]" value="S">S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="XL">XL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="4XL">4XL<br>
					<input type="checkbox" name="sizes[]" value="M">M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="2XL">2XL&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="sizes[]" value="5XL">5XL<br><br>
					</div>
					<br>
					<label for="price">Price:</label>
					<input type="text" name="price" value="<?php if(isset($price)){echo $price;}?>">
					<br><br>
					<input type="submit" name="regShirt" id="regShirt" value="Add Product">
					</form>
					</section>
					

				</div>