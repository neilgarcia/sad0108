<?php
if(isset($_SESSION['cart'])){
	unset($_SESSION['cart']['prodID']);
	unset($_SESSION['cart']['quantity']);
}


?>