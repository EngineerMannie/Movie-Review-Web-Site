<!--
 * 
 * uMovie sidebar1.php
 * Martin Naismith - 1304494
 * Last Revision 4th Aug 2014
 * Edit user details added
 *
 * 27th July 2014
 * additional buttons added
 *
 * 4th July 2014
 * revised for uMovie 
 *
 * 23rd March 2014
 * Initial build.
 *
-->
<form action="sideselect1.php" method="post" 
		style="position:relative; left:5px; top:5px; width:185px; height:835px;
		background: transparent url('images/sidebar.png') no-repeat top left;">
		
	<div style="position:absolute;left:5px;top:16px;width:176px;height:135px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C0">Movie Selector</span></p>
		<p class="myBody-P"><span class="myBody-C-C1">Use the selectors<br />below to refine<br />your search</span></p>
	</div>
	
	<input type="submit" style="position:absolute; left:38px; top:157px; 
		width:121px; height:25px;" name="butn_4" value="Search">
		
	<div style="position:absolute;left:11px;top:200px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Film Category</span></p>
	</div>
	<select name="cbxcategory" size="1" style="position:absolute; right:45px; top:230px;">
		<option value="">category</option>
		<?php include 'dbconn/category.php'; ?>
	</select>
	
	<div style="position:absolute;left:10px;top:280px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Film Genre</span></p>
	</div>
	<select name="cbxgenre" size="1" style="position:absolute; right:23px; top:310px;">
		<option value="">genre</option>
		<?php include 'dbconn/genre.php'; ?>
	</select>
	
	<div style="position:absolute;left:10px;top:360px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Director</span></p>
	</div>
	<select name="cbxdirector" size="1" style="position:absolute; right:25px; top:390px;">
		<option value="">director</option>
		<?php include 'dbconn/director.php'; ?>
	</select>
	
	<div style="position:absolute;left:10px;top:440px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Review Ratings</span></p>
	</div>
	<select name="cbxrating" size="1" style="position:absolute; right:55px; top:470px;">
		<option value="">rating</option>
		<?php include 'dbconn/rating.php'; ?>
	</select>
	
	<div style="position:absolute;left:10px;top:520px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Upload Your Review</span></p>
	</div>
	<button type="button" 
		style="position:absolute; left:38px; top:550px; width:121px; height:25px;"
		onclick="window.location.href='user/addreview.php'">
		Add&nbsp;Review
	</button>
	
	<div style="position:absolute;left:10px;top:600px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Upload Your Comment</span></p>
	</div>
	
	<?php 
	if ( isset( $_GET['id'] ) ) $review =$_GET['id'];
	$review = isset($review) ? $review : "";
	?>
	<button type="button" 
		style="position:absolute; left:38px; top:630px; width:121px; height:25px;"
		onclick="window.location.href='user/addcomment.php?id=<?php echo $review ?>'">
		Add&nbsp;Comment
	</button>
	
	<?php 
	// if logged in allow user edit details	
	// if session is set continue else alert user to login
	if(isset($_SESSION['auth']) && isset($_SESSION['user']) &&
			isset($_SESSION['fname']) && isset($_SESSION['lname']) &&
			isset($_SESSION['type'])){
	?>
	<div style="position:absolute;left:10px;top:680px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Edit Your Details</span></p>
	</div>
	
	<button type="button" 
		style="position:absolute; left:38px; top:710px; width:121px; height:25px;"
		onclick="window.location.href='user/editdetails.php'">
		Edit&nbsp;Details
	</button>
	<?php 
	}
	?>
	
</form>