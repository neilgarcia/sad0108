<?php

	include_once '../db.php';
	$id = filter_input(INPUT_POST, 'id');
	$status = filter_input(INPUT_POST, 'status');
	$type = filter_input(INPUT_POST, 'type');
	

	if($type == 'custom'){
		$stmt = $dbc->prepare("UPDATE customizedorder SET status=:status WHERE order_id = :id");
		$stmt->execute(array(':status'=>$status, ':id'=>$id));
	}else{
		$stmt = $dbc->prepare("UPDATE orders SET status=:status WHERE order_id = :id");
		$stmt->execute(array(':status'=>$status, ':id'=>$id));
	}
?>