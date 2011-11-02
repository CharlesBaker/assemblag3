<?php

	/*
	 * 
	 * 	Filename:  	a3-includes/a3-dbconnect.php
	 * 	Purpose:	Connect to the target database using PDO, and make that connection available for all scripts.
	 * 	Author:		Charles "MisutoWolf" Baker
	 * 	Created:	Nov. 2, 2011
	 * 	Modified:	
	 * 
	 */

	// First, get connection requirements from the config file.
	$configLocation =  $_SERVER['DOCUMENT_ROOT'] . "a3-config.php";
	require_once($configLocation);
	
	// Now, we use PDO to connect to the DB, and make the handle available.
	
	// First, build the DSN, from the variables in the config.
	$dsn = "mysql:host=" . A3_DBHOST . ";dbname=" . A3_DBNAME;
	
	// Now, use that DSN to connect to the database itself.
	$a3_dbh = new PDO($dsn, A3_DBUSER, A3_DBPASS);

?>