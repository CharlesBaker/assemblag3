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
	echo "Selected database successfully! (" . $database . ")<br />\n";
	
	// Now that we've selected the database we're going to construct tables in, let's START CONSTRUCTING QUERIES.
	$query_createposts = "CREATE TABLE a3_posts
	(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	post_author bigint(20),
	post_title text,
	post_content longtext,
	post_excerpt text,
	post_date datetime,
	post_date_gmt datetime,
	post_comment_status int,
	post_comment_count bigint(20),
	post_mod datetime,
	post_mod_gmt datetime,
	post_categories text,
	post_image bigint(20)
	)";
	
	$query_createcat = "CREATE TABLE a3_categories
	(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	cat_name text,
	cat_parent int
	)";
	
	// Now that we've constructed our table queries, let's execute them.
	$qpost = @mysql_query($query_createposts,$dbc);
	if (!$qpost) {
		die("Unable to create posts table in target database: " . mysql_error());
	}
	echo "Posts table created in target database!<br />\nAttempting to create category table!<br />\n";
	
	$qpost = @mysql_query($query_createcat,$dbc);
	if (!$qpost) {
		die("Unable to create category table in target database: " . mysql_error());
	}
	echo "Category table created in target database!<br />\n";
	
?>