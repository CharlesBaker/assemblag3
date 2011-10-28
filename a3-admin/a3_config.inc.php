<?php

	/*
	*
	*   Filename:	a3_config.inc.php
	*   Purpose:	Base configuration for assemblag3.  (WIP)
	*   Author:		Charles "MisutoWolf" Baker
	*   Date:		October 26, 2011
	*
	*/

	

	// Define MySQL configuration constants.
	define('MYSQL_USERNAME', 'assemblag3');
	define('MYSQL_PASSWORD', 'a3testpass');
	define('MYSQL_HOSTNAME', 'localhost');
	define('MYSQL_DATABASE', 'assemblag3');
	
	// Make sure they're usable outside this file, via "global".
	global MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_HOSTNAME, MYSQL_DATABASE;

?>