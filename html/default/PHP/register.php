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
		$stmt = $dbc->prepare("SELECT * FROM users WHERE username = :user");
		$stmt->execute(array(':user'=>$username));
		$result = $stmt->rowCount();

		if($result>0){
			echo 1;
		}else{
			if($pass==$repass){
				$stmt = $dbc->prepare("INSERT INTO users(username,password,first_name,last_name,email,contact_num,address,privilage) VALUES(:user, :pass, :fname, :lname, :email, :cnum, :add, :client)");
				$stmt->execute(array(':user'=>$username, ':pass'=>$pass, ':fname'=>$fname, ':lname'=>$lname, ':email'=>$email, ':cnum'=>$cont, ':add'=>$add, ':client'=>'client'));
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
