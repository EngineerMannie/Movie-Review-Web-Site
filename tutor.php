<!DOCTYPE HTML>
<meta charset="utf-8">
<!--
 * 
 * uMovie2 tutor.php
 * Martin Naismith - 1304494
 *
 * Last Revision 23rd July 2014
 * layout revised
 *
 * 29th June 2014
 * Initial build.
 *
-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>uMovie Review</title>

	<meta name="viewport" content="width=960">
	
	<link rel="stylesheet" href="scripts/main.css" type="text/css" />
	
	<script type="text/javascript" src="scripts/jsValidation.js">
	</script>
	
	<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Alegreya+Sans:400,800,400italic' 
		rel='stylesheet' type='text/css'>
		<!-- Google Fonts - - -
		font-family: 'Bubblegum Sans', cursive; Normal 400 & Bold 700
		font-family: 'Alegreya Sans', sans-serif; Normal 400
		-->
</head>

<body text="#000000" 
	style="background:#CDBCEB; 
		height:1000px;" >
	
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
			$pageindex = "tutor";
			include 'header1.php'; ?>
		</div>
		
		<div id="sidebar">
			<?php include 'sidebar1.php'; ?>
		</div>
		
		<div id="content">
			<?php include 'contenttutor.php' ?>
		</div>
	</div>
</body>
</html>