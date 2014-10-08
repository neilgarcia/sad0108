<?php
	session_start();
	$inner = $_SESSION['inner'];
	$outer = $_SESSION['outer'];
	$tname = $_SESSION['tname'];
	$fPos = $_SESSION['fPos'];
	$cfType =$_SESSION['cfType'];
	$pName = $_SESSION['pName'];
	$textile = $_SESSION['textile'];
	$logoPosition =$_SESSION['logoPosition'];
	$sizes =$_SESSION['sizes'];
	$quantity =$_SESSION['quantity'];
	$date = date('Y-m-d');
	$cid = $_SESSION['cid'];
	include_once '../db.php';
	$stmt = $dbc->prepare("SELECT * FROM customizedorder");
	$stmt->execute();
	$count = $stmt->rowCount();
	$p = 'CPID' . ($count + 1);
	$stmt = $dbc->prepare("INSERT INTO customizedorder VALUES(

		:orderID,
		:inner,
		:outer,
		:teamName,
		:namePos,
		:fontType,
		:playerName,
		:textile,
		:logoPosition,
		:sizes,
		:quantity,
		:customerID,
		:orderDate,
		:status

	)");
	$stmt->execute(array(

		':orderID'=>$p,
		':inner'=>$inner,
		':outer'=>$outer,
		':teamName'=>$tname,
		':namePos'=>$fPos,
		':fontType'=>$cfType,
		':playerName'=>$pName,
		':textile'=>$textile,
		':logoPosition'=>$logoPosition,
		':sizes'=>$sizes,
		':quantity'=>$quantity,
		':customerID'=>$cid,
		':orderDate'=>$date,
		':status'=>'pending'

	));

	

?>