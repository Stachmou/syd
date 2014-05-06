<?php
	$db_login='root';
	$db_password='';
	$db_server='localhost';
	$db_table='syd';

	$db = new PDO('mysql:host='.$db_server.';dbname='.$db_table,$db_login,$db_password);
?>
