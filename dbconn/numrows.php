<?php
// get the total num returned from query
$sql = "SELECT u.status, r.review_id
		FROM umovie_review r JOIN umovie_upload u
		ON r.review_id = u.review_id
		$where";

// TESTING : echo 'sql = '.$sql;

$result = mysqli_query($myconn, $sql);
// count the number of retured rows
$numrows = mysqli_num_rows($result);
?>