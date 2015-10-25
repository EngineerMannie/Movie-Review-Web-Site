<?php
/*
 * uMovie logoutuser.php
 * Martin Naismith - 1304494
 *
 * Last Revision 28th July 2014
 * Initial build.
 *
*/
	session_start();
	// kill a session & free variables
	unset($_SESSION['auth']);
	unset($_SESSION['user']);
	unset($_SESSION['fname']);
	unset($_SESSION['lname']);
	unset($_SESSION['type']);
	
	session_destroy();
	
	// return to homepage
	header('Location: homepage.php');
	exit;

?>