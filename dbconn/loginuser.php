<?php

/*
 * uMovie loginuser
 *
 * Martin Naismith - 1304494
 * Last Revision 4th July 2014
 * revised for uMovie
 * 
 * 23rd June 2014
 * Initial Build
 * test prints and added session ends
 * to search errors.
 */


if((empty($_POST["uname_in"])) && (empty($_POST["pword_in"]))){
	header("Location: ../registration.php");
	exit;
}

// add in htmlspecialchars below
$chkuname = ($_POST["uname_in"]);
$chkpword = ($_POST["pword_in"]);

// Testing : echo 'uname : '.$chkuname.' pword : '.$chkpword;

// connect to a database remember to set which in dbconnect file
include 'dbconnect.php';

// define and execute a query
$sql = "SELECT * 
		FROM umovie_user
		WHERE username = '$chkuname' 
		AND password = '$chkpword'";

$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result) {
	// TESTING: echo 'Search Error!!!';
	// close connection
	mysqli_close($myconn);
	header("Location: loginerror.php");
	exit;
}
if(mysqli_num_rows($result)==1){
	$row = mysqli_fetch_array($result);
	// if (user exists) then setup session and login
	session_start();
	$_SESSION['auth'] = session_id();
	$_SESSION['user'] = $row['user_id'];
	$_SESSION['fname'] = $row['firstname'];
	$_SESSION['lname'] = $row['lastname'];
	$_SESSION['type'] = $row['type'];
} else {
	// TESTING: echo 'Search Error!!!';
	// kill a session & free variables
	session_destroy();
	unset($_SESSION['auth']);
	unset($_SESSION['user']);
	unset($_SESSION['fname']);
	unset($_SESSION['lname']);
	unset($_SESSION['type']);
	// close connection
	mysqli_close($myconn);
	
	header("Location: loginerror.php");
	exit;
}

// TESTING:
/*
echo $_SESSION['auth']."<br />";
echo $_SESSION['user']."<br />";
echo $_SESSION['fname']."<br />";
echo $_SESSION['lname']."<br />";
echo $_SESSION['type'];
*/

// close connection
mysqli_close($myconn);

// TODO: need a couple of if statement
// if (user is admin) then loginAdmin cfm
// if (user is user) then loginUser
// if (user not exist) then include registration.php
// else error

if ($_SESSION['type']=='user'){
	if (!isset($addtype)) {
		//echo 'session set - no link $addtype';
		header("Location: ../homepage.php");
		exit;
	} /*elseif($addtype == 'comment'){
		echo 'session set - comment';
		//header("Location: ../user/addcomment.php");
		exit;
	} elseif($addtype == 'review'){
		echo 'session set - review';
		//header("Location: ../user/addreview.php");
		exit; 
	}*/ else {
		echo 'do something one';
	}
	
} elseif($_SESSION['type']=='admin') {
	header("Location: ../admin/adminhome.cfm");
	exit;
} else {
	echo 'do something two';
}

?>