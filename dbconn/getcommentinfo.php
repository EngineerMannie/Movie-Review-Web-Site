<?php
/*
* uMovie getcommentinfo.php
* Martin Naismith - 1304494
*
* Last Revision 29th July 2014
* initial build
*
*/

$review = $_GET["id"];
$review = isset($review) ? $review : "1";


// connect to a database remember to set which in dbconnect file
// returns $myconn
include 'dbconnect.php';

$where = " WHERE review_id = $review ";

$sql = "SELECT filmname 
			FROM umovie_review 
			$where";

// TESTING: echo $sql;

$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result){
	// close connection & logout
	header("Location: ../logoutuser.php");
	exit();
}

$row = mysqli_fetch_row($result);

echo $row[0];

mysqli_free_result($result);
// close connection
mysqli_close($myconn);

?>