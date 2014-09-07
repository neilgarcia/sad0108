<?php


 
	$email = filter_input(INPUT_POST, 'txtEmail');
	$pass= filter_input(INPUT_POST, 'txtPass');
	
		include_once   '../db.php';

			$stmt = $dbc->prepare("SELECT * FROM accounts WHERE username = :email AND password = :pass");
			$stmt->execute(array(':email'=>$email, ':pass'=>$pass));
			$result = $stmt->rowCount();


			if ($result > 0){
				$cid = '';
				while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
					$cid = $res['account_id'];

						if ($res['privilage'] === "client"){
							session_start();
							$_SESSION['activeclient'] = $email;

								echo "1";
							//header("Location: http://localhost/sad0108/html/default/home.php");
							
						}	
						
						else if ($res['privilage'] === "admin") {
							session_start();
							$_SESSION['activeadmin'] = $email;
								echo "3";
							//header("Location: http://localhost/sad0108/html/default/home.php");
							
						}


					
				}
				$stmt = $dbc->prepare("SELECT customer_id FROM users WHERE account_id = :id");
				$stmt->execute(array(':id'=>$cid));
				$res = $stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION['cid'] = $res['customer_id'];
			
				
			}
			else {
				echo "2";
			}
		
 

?>