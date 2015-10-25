<?php
/*
* uMovie getcomments.php
* Martin Naismith - 1304494
* Last Revision 31st July 2014
* SQL revised for 'active' status
* 
* 26th July 2014
* initial build
*
*/

$review_id = isset($review_id) ? $review_id : "1";

// connect to a database remember to set which in dbconnect file
// returns $myconn
include 'dbconnect.php';

$where = " WHERE c.status = 'active' AND c.review_id = $review_id ";
// TESTING : echo 'WHERE = '.$where;

$sql = "SELECT ur.firstname, ur.lastname, c.date, c.comment, c.urate
		FROM umovie_comment c 
		JOIN umovie_user ur ON c.user_id = ur.user_id
		$where";

$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result)
{
	// close connection & logout
	echo 'No Comments Available!';
	// close connection
	mysqli_close($myconn);
	exit();
}

// get the numbers from the comments urates
$sql2 = "SELECT AVG(urate) as average, COUNT(urate) as numcomm
			FROM umovie_comment
			WHERE status = 'active' AND review_id = $review_id";

$result2 = mysqli_query($myconn, $sql2);

$row2 = mysqli_fetch_array($result2);

$average = number_format($row2['average'], 1);

$numcomments = $row2['numcomm'];

echo '<p class="myNormal-P"><span class="myBody-C-C1"><br /><b>';
echo $numcomments.'</b>&nbsp;No.&nbsp;Comments&nbsp;.&nbsp;.&nbsp;uMovie&nbsp;
				uRate&nbsp;From&nbsp;Comments&nbsp;:&nbsp;'.$average.'</span></p>';

// output the data
while ($row = mysqli_fetch_array($result))
{
	echo '<br>';
	echo '<hr>';
	echo '<br>';
	echo '<b>Comment by : </b>'.$row['firstname'].' '.$row['lastname'];
	echo '&nbsp;.&nbsp;.&nbsp;<b>My uRate : </b>'.$row['urate'];
	echo '&nbsp;.&nbsp;.&nbsp;<b>Date of Comment : </b>'.date('jS M Y',strtotime($row['date']));
	echo '<br><br>';
	echo $row['comment'];
	echo '<br/>';
}
echo '<br>';
echo '<hr>';

mysqli_free_result($result);
// close connection
mysqli_close($myconn);

?>