<?php

	/*
	*
	*   Filename:	a3_helper.php
	*   Purpose:	Provides helper functions and code to the CMS.
	*   Author:		Charles "MisutoWolf" Baker
	*   Date:		October 27, 2011
	*
	*/

	// Import configuration file.
	require_once("a3_config.inc.php");
	
	//This stops SQL Injection in POST vars
	foreach ($_POST as $key => $value) {
		$_POST[$key] = mysql_real_escape_string($value);
	}
	
	//This stops SQL Injection in GET vars
	foreach ($_GET as $key => $value) {
		$_GET[$key] = mysql_real_escape_string($value);
	}

	// Connect to SQL server and select our database.
	$dbc = @mysql_connect(MYSQL_HOSTNAME,MYSQL_USERNAME,MYSQL_PASSWORD) or die("Unable to connect to assemblag3's configured server (".MYSQL_HOSTNAME."): ".mysql_error());
	$dbh = @mysql_select_db(MYSQL_DATABASE,$dbc) or die ("Unable to select proper database(".MYSQL_DATABASE."): ".mysql_error());
	global $dbc, $dbh;

?>