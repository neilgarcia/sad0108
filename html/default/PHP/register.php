<?php

	$fname = filter_input(INPUT_POST, 'txtFirstname');
	$lname = filter_input(INPUT_POST, 'txtLastname');
	$username = filter_input(INPUT_POST, 'txtUsername');
	$cont = filter_input(INPUT_POST, 'txtCont');
	$pass = filter_input(INPUT_POST, 'txtPassword');
	$repass = filter_input(INPUT_POST, 'rePass');
	$add = filter_input(INPUT_POST, 'txtAdd');
	$email = filter_input(INPUT_POST, 'txtEmail');

	include_once '../db.php';

	if(!empty($fname) && !empty($lname) && !empty($username) && !empty($cont) && !empty($pass) && !empty($repass) && !empty($add) && !empty($email)){
		$stmt = $dbc->prepare("SELECT * FROM accounts WHERE username = :user");
		$stmt->execute(array(':user'=>$username));
		$result = $stmt->rowCount();

		if($result>0){
			echo 1;
		}else{
			if($pass==$repass){
				$stmt = $dbc->prepare("INSERT INTO accounts VALUES(NULL, :user, :pass, :client)");
				$stmt->execute(array(':user'=>$username, ':pass'=>$pass, ':client'=>'client'));
				$stmt = $dbc->prepare("SELECT * FROM accounts WHERE username = :user AND password = :pass");
				$stmt->execute(array('user'=>$username, ':pass'=>$pass));
				$res = $stmt->fetch(PDO::FETCH_ASSOC);
				$id = $res['account_id'];
				$custid = 'cust' . $id;
				$stmt = $dbc->prepare("INSERT INTO users(customer_id,first_name,last_name,email,contact_num,address,account_id) VALUES(:custid, :fname, :lname, :email, :cnum, :add, :addid)");
				$stmt->execute(array(':custid'=>$custid, ':fname'=>$fname, ':lname'=>$lname, ':email'=>$email, ':cnum'=>$cont, ':add'=>$add, ':addid'=>$id));
				session_start();
				$_SESSION['activeclient'] = $username;
				echo 2;
			}else{
				echo 4;
			}
			
		}
	}else{
		echo 3;
	}
	

?>
