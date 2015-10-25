<!DOCTYPE HTML>
<meta charset="utf-8">
<!--
 * 
 * uMovie movielist.php
 *
 * Martin Naismith - 1304494
 * Last Revision 16th July 2014
 * revised for uMovies
 * 
 * 25th June 2014
 * adjustments to layout
 *
 * 29th June 2014
 * Initial build.
 *
-->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>uMovie Review 1304494</title>

	<meta name="viewport" content="width=960">
	
	<link rel="stylesheet" href="scripts/main.css" type="text/css" />
	
	<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Alegreya+Sans:400,800,400italic' 
		rel='stylesheet' type='text/css'>
		<!-- Google Fonts - - -
		font-family: 'Bubblegum Sans', cursive; Normal 400 & Bold 700
		font-family: 'Alegreya Sans', sans-serif; Normal 400
		-->
	
</head>

<body text="#000000" style="background:#CDBCEB; height:1000px;" >
	<div style="background-color:transparent;
		margin-left:auto;
		margin-right:auto;
		position:relative;
		width:960px;
		height:1000px;">
		
		<div id="bg">
  			<img src="images/bg.png" alt="">
		</div>
		
		<div id="login">
			<?php 
			session_start();
			if (isset($_SESSION['type'])){
				if ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'user'){
					include 'logout.php';
				} else {
					include 'login.php'; 
				}
			} else {
				include 'login.php'; 
			}
			?>
		</div>
		
		<div id="header">
			<?php 
			$pageindex = "movielist";
			include 'header1.php'; ?>
		</div>
		
		<div id="sidebar">
			<?php include_once 'sidebar1.php'; ?>
		</div>
		
		<div id="content">
			<div
			style="position:absolute;
			left:5px;
			top:5px;
			width:740px;
			height:840px;
			background-color:white;
			overflow:hidden;">
				<p class="myBody-P">
					<span class="myBody-C-C0">Listing Of Available Film Reviews</span>
				</p>
				<p class="myBody-P">
					<span class="myBody-C-C2">
						The number of reviews can be limited by applying
						a 'Selection' at the side and clicking 'Search'.
					</span>
				</p>
			</div>
			<div
			style="position:absolute;
			left:5px;
			top:70px;
			width:740px;
			height:760px;" >
				<?php 
				include 'movielistcontent.php'; ?>
			</div>
			
		</div>
	</div>
</body>
</html>