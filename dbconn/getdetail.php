<?php
/*
* uMovie getdetail.php
* Martin Naismith - 1304494
* Last Revision 30th July 2014
* Revised SQL for status
* 
* 23rd July 2014
* initial build
*
*/

$review = $_GET["id"];
$review = isset($review) ? $review : "1";


// connect to a database remember to set which in dbconnect file
// returns $myconn
include 'dbconnect.php';

$where = " WHERE up.status = 'active' AND r.review_id = $review ";

$sql = "SELECT r.*, ur.firstname, ur.lastname
		FROM umovie_review r JOIN umovie_upload up
		ON r.review_id = up.review_id
		JOIN umovie_user ur ON up.user_id = ur.user_id
		$where";

// TESTING: echo $sql;

$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result)
{
	// close connection & logout
	header("Location: ../logoutuser.php");
	exit();
}

$row = mysqli_fetch_array($result);

$firstname = $row['firstname'];
$lastname = $row['lastname'];
$review_id = $row['review_id'];
$filmname = $row['filmname'];
$genre = $row['genre'];
$category = $row['category'];
$starring = $row['starring'];
$director = $row['director'];
$releasedate = $row['releasedate'];
$runtime = $row['runtime'];
$review = $row['review'];
$urate = $row['urate'];
$image1 = $row['image1'];
$image2 = $row['image2'];

mysqli_free_result($result);
// close connection
mysqli_close($myconn);

// TESTING: echo $firstname.' '.$lastname;

?>