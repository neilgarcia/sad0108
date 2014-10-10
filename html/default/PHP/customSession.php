<?php

	session_start();
	if(isset($_SESSION['activeclient'])){
		$_SESSION['inner'] = filter_input(INPUT_POST, 'inner');
	$_SESSION['inner'] = explode(';', $_SESSION['inner']);
	$_SESSION['inner'] = $_SESSION['inner'][1];
	$_SESSION['outer'] = filter_input(INPUT_POST, 'outer');
	$_SESSION['outer'] = explode(';', $_SESSION['outer']);
	$_SESSION['outer'] = $_SESSION['outer'][1];
	$_SESSION['tname'] = filter_input(INPUT_POST, 'tName');
	$_SESSION['fPos'] = filter_input(INPUT_POST, 'fontPosition');
	$_SESSION['cfType'] = filter_input(INPUT_POST, 'cFontType');
	$_SESSION['pName'] = filter_input(INPUT_POST, 'playerName');
	$_SESSION['textile'] = filter_input(INPUT_POST, 'cTextile');
	$_SESSION['logoPosition'] = filter_input(INPUT_POST, 'cLogoPosition');
	$_SESSION['sizes'] = isset($_POST['sizes'])?implode(',', $_POST['sizes']):'';
	$_SESSION['quantity'] = filter_input(INPUT_POST, 'cQuantity');
	echo "2";
}else{
	echo "1";
}
	

?>