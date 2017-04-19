<?php

	define('DB_HOST', 'localhost'); 
	define('DB_USER', 'root'); //Keep as it is when your mysql is on localhost
	define('DB_PASSWORD', ''); //Give a password what u use to login mysql
	define('DB_DATABASE', 'DevAT'); //Create database in mysql and use name here
	
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	
?>
