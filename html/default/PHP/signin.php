<?php


 
	$email = filter_input(INPUT_POST, 'txtEmail');
	$pass= filter_input(INPUT_POST, 'txtPass');
	
		include_once   '../db.php';

			$stmt = $dbc->prepare("SELECT * FROM users WHERE username = :email");
			$stmt->execute(array(':email'=>$email));
			$result = $stmt->rowCount();


			if ($result > 0){
				while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
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
			
				
				
			}
			else {
				echo "2";
			}
		
 

?>