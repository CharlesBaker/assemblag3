<?php

	/*
	*
	* 	Filename:  	a3-dbprep.php
	* 	Purpose:	Using PDO, prepare the database for use, by creating needed tables.
	* 	Author:		Charles "MisutoWolf" Baker
	* 	Created:	Nov. 2, 2011
	* 	Modified:
	*
	*/

	// This gives us the PDO handle to do what we need with the database.
	require_once("a3-includes/db-connect.php");
	
	global $a3_dbh;
	
	
	// Here, we build a query to create a table to hold posts.
	$posts_query = <<<___THEQUERY
		CREATE TABLE IF NOT EXISTS 'a3_posts' (
			'post_id' 				int(11) 	NOT NULL AUTO_INREMENT PRIMARY KEY,		
			'post_author'			int			NOT NULL,
			'post_title'			text		NOT NULL,
			'post_date'				datetime	NOT NULL,
			'post_date_gmt'			datetime	NOT NULL,
			'post_mod'				datetime	NOT NULL,
			'post_mod_gmt'			datetime	NOT NULL,
			'post_comment_status'	tinyint(1)	NOT NULL,
			'post_status'			int			NOT NULL
		)
	___THEQUERY; 
	
	// Here, we build a query to create a table for holding users.
	$users_query = <<<___THEQUERY
		CREATE TABLE IF NOT EXISTS 'a3_users' (
			
		)
	___THEQUERY;

?>