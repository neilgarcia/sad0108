<?php
	include_once	'../db.php';
    $stmt = $dbc->prepare("SELECT * FROM products WHERE prod_id=:prodId");
    $stmt->execute(array(':prodId'=>$_GET['prodId']));
    while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
    	header("Content-type: image/jpeg");
    	echo $res['prod_img'];
    }
    
?>