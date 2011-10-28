<?php

	/*
	*
	*   Filename:	a3_posthandler.php
	*   Purpose:	Handles all actions dealing with post manipulation.
	*   Author:		Charles "MisutoWolf" Baker
	*   Date:		October 26, 2011
	*
	*/

	require_once("a3_helper.php");
	
	
	
	// First, check to see if this PHP was arrived at via form submission.
	$submitted = $_POST['submitted'];
	$theAction = $_POST['theAction'];
	
	if (!$submitted) {
		die("This page is only accessible as a result of submitting a post-related form.  Sorry.")
	}
	
	if (!$action) {
		die("This script call needs to have an action associated with it to perform.  Try again after fixing the POST data.")
	}
	
	

	// Now that we know the form has been submitted, we'll check to see what kind of action we'll be dealing with.
	
	

?>