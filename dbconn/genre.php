<?php

/*
* uMovie genre.php
* Martin Naismith - 1304494
* Last Revision 30th July 2014
* SQL revised for status = active
* 
* 9th July 2014
* revised for uMovies
* 
* 25th June 2014
* Initial Build &
* test sql for combobox
* 
*/

// connect to a database remember to set which in dbconnect file
// returns $myconn
include 'dbconnect.php';

$sql = "SELECT DISTINCT r.genre 
		FROM umovie_review r JOIN umovie_upload up
		ON r.review_id = up.review_id
		WHERE up.status = 'active'";
		
$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result) 
	{
	// close connection & logout
	header("Location: ../logoutuser.php");
	exit;
}

// output the available options
while ($row = mysqli_fetch_array($result) )
	{
	$genre = $row['genre'].','.$genre;
}
// remove last comma
$genre = rtrim($genre, ',');
// TESTING: 	echo $genre;

// close connection
mysqli_close($myconn);

// separate each keyword and make them unique
$arrayGenre = explode(',', $genre);
$trimmedGenre = array_map('trim',$arrayGenre);
$uniqueGenre = array_unique($trimmedGenre, $sort_flags = SORT_STRING);
sort($uniqueGenre);

// output to html
foreach( $uniqueGenre as $value )
	{
	echo ("<option value='".$value."'>".$value."</option>");
}

?>