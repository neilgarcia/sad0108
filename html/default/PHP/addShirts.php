<?php

	 //$info = pathinfo($_FILES['attachment']['name']);
	 $target = '../css/shirts/' . $_FILES['attachment']['name'];
	 move_uploaded_file( $_FILES['attachment']['tmp_name'], $target);

?>