<?php

session_start();

if ( empty($_SESSION['user']) || empty($_POST['filmname']) ||
		empty($_POST['cbxcategory']) || empty($_POST['genre']) ||
		empty($_POST['director']) || empty($_POST['releasedate']) ||
		empty($_POST['starring']) || empty($_POST['runtime']) ||
		empty($_POST['cbxurate']) || empty($_POST['review']) || 
		empty($_POST['image1']) ) {
	//echo 'something required was empty';
	header("Location: ../user/addreview.php");
	exit;
}
/*
 * TESTING :-
echo 'user_id = '.$_SESSION['user'];
echo '<br>filmname = '.$_POST['filmname'];
echo '<br>category = '.$_POST['cbxcategory'];
echo '<br>genre = '.$_POST['genre'];
echo '<br>director = '.$_POST['director'];
echo '<br>releasedate = '.
	DateTime::createFromFormat('d/m/Y', $_POST['releasedate'])->format('Y-m-d');
echo '<br>starring = '.$_POST['starring'];
echo '<br>runtime = '.$_POST['runtime'];
echo '<br>urate = '.$_POST['cbxurate'];
echo '<br>review = '.$_POST['review'];
echo '<br>image1 = '.$_POST['image1'];
echo '<br>image2 = '.$_POST['image2'];
*/
$filmname = htmlspecialchars($_POST['filmname']);
$genre = htmlspecialchars($_POST['genre']);
$category = $_POST['cbxcategory'];
$starring = htmlspecialchars($_POST['starring']);
$director = htmlspecialchars($_POST['director']);
$releasedate = DateTime::createFromFormat('d/m/Y', $_POST['releasedate'])->format('Y-m-d');
$runtime = $_POST['runtime'];
$review = htmlspecialchars($_POST['review']);
$urate = $_POST['cbxurate'];
$image1 = htmlspecialchars($_POST['image1']);
$image2 = isset($_POST['image2']) ? htmlspecialchars($_POST['image2']) : "";

$sql = "INSERT INTO umovie_review
			(filmname, genre, category, starring, director, 
				releasedate, runtime, review, urate, image1, image2)
			VALUES
			('$filmname', '$genre', '$category', '$starring', '$director', 
				'$releasedate', $runtime, '$review', $urate, '$image1', '$image2')";

include 'dbconnect.php';

$result = mysqli_query($myconn, $sql);
//
// confirm query has run successfully
// TESTING
if(!$result){
	mysqli_close($myconn);
	?>
	<script type="text/javascript">
	alert("Your Review was not saved!");
	window.history.go(-1);
	</script>
	<?php
	exit;
} else {
	
	//log the upload
	$result = mysqli_query($myconn, "SELECT review_id FROM umovie_review ORDER BY review_id DESC LIMIT 1");
	$row = mysqli_fetch_row($result);
	$review_id = $row[0];
	$user_id = $_SESSION['user'];
	$datenow = date('Y-m-d');
	$sql = "INSERT INTO umovie_upload
				(user_id, review_id, date)
				VALUES
				($user_id, $review_id,'$datenow')";
	
	$result = mysqli_query($myconn, $sql);
	
	if(!$result){
		mysqli_close($myconn);
		?>
		<script type="text/javascript">
		alert("Your Upload Data was not saved!");
		window.history.go(-1);
		</script>
		<?php
		exit;
	}
	mysqli_close($myconn);
	?>
	<script type="text/javascript">
	alert("Your Review has been logged!");
	window.history.go(-2);
	</script>
<?php } ?>