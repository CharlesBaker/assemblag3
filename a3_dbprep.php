<?php

/*
 * 
 *   Filename:	a3_dbprep.php
 *   Purpose:	Just a temporary script to prepare database usage for assemblag3 development.
 *   Author:	Charles "MisutoWolf" Baker
 *   Date:		October 26, 2011
 * 
 */


	// First, we set the variables needed to connect to the SQL server.
	$server = "localhost";
	$username = "assemblag3";
	$password = "a3testpass";
	
	// Connect to MySQL (local) 
	$dbc = @mysql_connect($server,$username,$password);
	
	// Check for connection success.
	if (!$dbc) {
		die("Unable to connect to requested MySQL Server: " . mysql_error());	
	}
	echo "Connected to MySQL Server!<br />\n";
	
	
	// Now, select the database to add the table to.
	$database = "assemblag3";
	$dbh = @mysql_select_db($database,$dbc);

	// Check for proper DB selection.
	if (!$dbh) {
		die("Unable to select MySQL database properly: " . mysql_error());
	} 
	echo "Selected database successfully! (" . $database . ")";
	
	// Now that we've selected the database we're going to construct tables in, let's START CONSTRUCTING QUERIES.
	$query_createposts = "CREATE TABLE a3_posts
	(
	id int NOT NULL AUTO_INCREMENT,
	 
?>