<!DOCTYPE HTML>
<meta charset="utf-8">
<!--
 * 
 * uMovie loginerror.php
 * Martin Naismith - 1304494
 * Last Revision 23rd July 2014
 * Layout revised
 *
 * 4th July 2014
 * revised for uMovie
 *
 * 23rd March 2014
 * Initial build.
 *
-->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Registration Error</title>

	<meta name="viewport" content="width=960">
	
	<style type="text/css">
	
		#thisheader{
		position:absolute; left:105px; top:10px; width:750px; height:120px;
		}
		
		#thiscontent{
		position:absolute; left:105px; top:140px; width:750px; height:850px;
		}
		
	</style>
	
	<link rel="stylesheet" href="../scripts/main.css" type="text/css" />
	
</head>

<body text="#000000" 
	style="background:#CDBCEB; 
	height:1000px;">
	
	<?php
	$id = $_GET['id'];
	?>
	
	<div style="background-color:transparent;
		margin-left:auto;
		margin-right:auto;
		position:relative;
		width:960px;
		height:1000px;">
		
		<div id="bg">
  			<img src="../images/bg.png" alt="">
		</div>
		
		<div id="thisheader">
			<?php $pageindex = "none";
			include '../header1.php'; ?>
		</div>
		
		
		<div id="thiscontent">
			<?php include 'registererror2.php' ?>
		</div>
	</div>
</body>
</html>