<?php

session_start();

if ( empty($_SESSION['user']) || empty($_POST['comment']) || 
		empty($_POST['cbxrating']) || empty($_GET['id']) ) {
	//echo 'something required was empty';
	header("Location: ../user/addcomment.php");
	exit;
}
/*
 * TESTING :-
echo 'user_id = '.$_SESSION['user'];
echo '<br>comment = '.$_POST['comment'];
echo '<br>uRating = '.$_POST['cbxrating'];
echo '<br>review_id = '.$_GET['id'];
*/

$user_id = $_SESSION['user'];
$review_id = $_GET['id'];
$date = date("Y-m-d");
$comment = $_POST['comment'];
$urate = $_POST['cbxrating'];

$sql = "INSERT INTO umovie_comment
		(user_id, review_id, date, comment, urate)
		VALUES
		($user_id,$review_id,'$date','$comment',$urate)";

// TESTING : echo 'SQL = '.$sql;

include 'dbconnect.php';

$result = mysqli_query($myconn, $sql);
//
// confirm query has run successfully
// TESTING
if(!$result){
	mysqli_close($myconn);
	?>
	<script type="text/javascript">
	alert("Your Comment was not saved!");
	window.history.go(-1);
	</script>
<?php
} else {
	mysqli_close($myconn);
	?>
	<script type="text/javascript">
	alert("Your Comment has been logged!");
	window.history.go(-2);
	</script>
<?php 
} 
?>