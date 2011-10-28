<?php

	/*
	 * 
	 *   Filename:	a3_newpost.php
	 *   Purpose:	Provide a front-end for posting things to the site blog.  (View!)
	 *   Author:	Charles "MisutoWolf" Baker
	 *   Date:		October 26, 2011
	 * 
	 */

	// Helper functions/code for CMS.
	require_once("a3_helper.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>assemblag3 - new post</title>
	</head>
	
	<body>
		<form action="a3_posthandler.php" method="POST">
			Author ID#: <input type="text" size="10" maxlenth="10" name="post_author" value="Author ID#" /><br />
			Post Title: <input type="text" size="50" maxlength="100" name="post_title" value="Post title..." /><br /><br />
			Post Content:<br />
			<textarea rows="20" cols="60" name="post_content">Sample post content... HTML is permitted...</textarea>
		</form>
	</body>
	
</html>