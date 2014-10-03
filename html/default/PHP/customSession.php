<?php

	session_start();
	$_SESSION['inner'] = filter_input(INPUT_POST, 'inner');
	$_SESSION['outer'] = filter_input(INPUT_POST, 'outer');
	$_SESSION['tname'] = filter_input(INPUT_POST, 'tName');
	$_SESSION['fPos'] = filter_input(INPUT_POST, 'fontPosition');
	$_SESSION['cfType'] = filter_input(INPUT_POST, 'cFontType');
	$_SESSION['fType'] = filter_input(INPUT_POST, 'fontType');
	$_SESSION['pName'] = filter_input(INPUT_POST, 'playerName');
	$_SESSION['textile'] = filter_input(INPUT_POST, 'cTextile');
	$_SESSION['logoPosition'] = filter_input(INPUT_POST, 'cLogoPosition');
	$_SESSION['sizes'] = filter_input(INPUT_POST, 'sizes');
	$_SESSION['quantity'] = filter_input(INPUT_POST, 'cQuantity');

?>