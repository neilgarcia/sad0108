<?php

$dbc = new PDO('mysql:host=localhost;dbname=stargame;charset=utf8','sad0108','sad0108');
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbc->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>