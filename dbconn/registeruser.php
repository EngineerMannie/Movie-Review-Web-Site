<?php

/*
* uMovie registeruser.php
*
* Martin Naismith - 1304494
* 
* Last Revision 146th July 2014
* revised for uMovies
* 
* 24th June 2014
* minor additions and checking
* links added
* 
* Initial Build 23rd March 2014
* test prints and added session ends
* to search errors.
*/

if((empty($_POST["uname"])) || (empty($_POST["fname"])) || 
		(empty($_POST["lname"])) || (empty($_POST["pword1"])) || 
		(empty($_POST["pword2"])) || (empty($_POST["year"])) || 
		(empty($_POST["email"])) || (empty($_POST["type"])) ){
	//echo 'something required was empty';
	header("Location: ../registration.php");
	exit;
}
//
// TESTING: echo "Data returned to registerUser <br />";
//

// strip out sql characters
$trimlist = ("\x20..\x2D\x2F\x3A..\x3F\x5C\x7B..\x7E");

$uname = trim($_POST["uname"],$trimlist);
$pword = trim($_POST["pword1"],$trimlist);
$pword2 = trim($_POST["pword2"],$trimlist);
if($pword != $pword2){
	header("Location: registererror.php?id=1");
	// TESTING:		echo 'passwords do not match';
}

$fname = trim($_POST["fname"],$trimlist);
$lname = trim($_POST["lname"],$trimlist);
$type = trim($_POST["type"],$trimlist);
$yob = intval(trim($_POST["year"],$trimlist));
$email = trim($_POST["email"],$trimlist);
$address1 = trim($_POST["address1"],$trimlist);
$address2 = trim($_POST["address2"],$trimlist);
$town = trim($_POST["town"],$trimlist);
$state = trim($_POST["state"],$trimlist);
$country = trim($_POST["country"],$trimlist);
$postcode = trim($_POST["postcode"],$trimlist);

// strip empty data fields from database insertion
if ($address1 == 'Address Line 1') $address1 = null;
if ($address2 == 'Address Line 2') $address2 = null;
if ($town == 'City / Town') $town = null;
if ($state == 'State / County') $state = null;
if ($country == 'Country') $country = null;
if ($postcode == 'Post code') $postcode = null;
//
// TESTING: echo ("$type<br />$uname<br /> $pword<br /> $pword2<br />");
// TESTING:	echo ("$fname<br /> $lname<br /> $yob<br /> $email<br />");
// TESTING: echo ("$address1<br /> $address2<br /> $town<br /> $state<br />");
// TESTING: echo ("$country<br /> $postcode<br />");
//


// connect to a database remember to set which in dbconnect file
include 'dbconnect.php';

// check for existing username
$sql = "SELECT username FROM umovie_user";
$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result) {
	// TESTING: echo 'Search Error!!!';
	mysqli_close($myconn);
	header("Location: registererror.php?id=2");
	exit;
}

// check the return against the submitted username
$rows = mysqli_num_rows($result);
// check result is valid
if($rows > 0){
	while($arrayrow = mysqli_fetch_array($result)){
		// TESTING:	echo ('db; '.$arrayrow['username'].' uname '. $uname.'<br />');
        if($arrayrow['username'] === $uname){
            $uname = null;
            mysqli_close($myconn);
            // TESTING: 
            echo "\nbreak uname = ".$uname."\n";
            header("Location: registererror.php?id=3");
            //username already exists redo registration
            exit;
        }
    }
}

// define and execute a query
$sql = "INSERT INTO umovie_user (type, username, password, firstname, lastname, yob, email, 
							address1, address2, town, state, country, postcode)
                       VALUES ('$type', '$uname','$pword','$fname','$lname','$yob','$email',
							'$address1','$address2','$town','$state','$country','$postcode')";
$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
// TESTING:	if(!$result) echo 'Line xx - INSERT NOT CARRIED OUT!!!';
//
// TESTING: else echo 'Record Inserted OK';

// define and execute a query
$sql = "SELECT * FROM umovie_user
WHERE username = '$uname' AND password = '$pword'";
$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result) {
	// TESTING: 
	echo 'Search Error!!!';
	header("Location: ../loginerror.php");
	exit;
}
if(mysqli_num_rows($result)==1){
	$arrayRow = mysqli_fetch_array($result);
}
// if (user exists) then setup session and login
session_start();
$_SESSION['auth'] = session_id();
$_SESSION['user'] = $arrayRow['user_id'];
$_SESSION['fname'] = $arrayRow['firstname'];
$_SESSION['lname'] = $arrayRow['lastname'];
$_SESSION['type'] = $arrayRow['type'];

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

// if (user is admin) then loginAdmin
// if (user is user) then loginUser
// if (user not exist) then include registration.php
// else error

if($_SESSION['type']=='admin' || $_SESSION['type']=='user'){
	session_destroy();
	header("Location: ../homepage.php");
	exit;
} else {
	header("Location: registererror2.php");
	exit;
}
session_destroy(); // maybe not required
header("Location: registererror2.php");
exit;

?>