<?php

/*
* uMovie director.php
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

$sql = "SELECT DISTINCT r.director 
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
	$director = $row['director'].','.$director;
}
// remove last comma
$director = rtrim($director, ',');
// TESTING: 	echo $genre;

// close connection
mysqli_close($myconn);

// separate each keyword and make them unique
$arrayDirector = explode(',', $director);
$trimmedDirector = array_map('trim',$arrayDirector);
$uniqueDirector = array_unique($trimmedDirector, $sort_flags = SORT_STRING);
sort($uniqueDirector);

// output to html
foreach( $uniqueDirector as $value )
	{
	echo ("<option value='".$value."'>".$value."</option>");
}

?>