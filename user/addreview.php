<?php 
/*
* uMovie addreview.php
* Martin Naismith - 1304494
* Last Revision 30th July 2014
* Initial build.
* 
*/

session_start();

// if session is set continue else alert user to login
if(!isset($_SESSION['auth']) || !isset($_SESSION['user']) ||
	!isset($_SESSION['fname']) || !isset($_SESSION['lname']) ||
		!isset($_SESSION['type'])){
	
	?>
	  <script type="text/javascript">
	    alert("Login or Register before you can leave a comment!");
	    history.back();
	  </script>
	<?php

} else {

?>

<!DOCTYPE HTML>
<meta charset="utf-8">

<head>
	<title>uMovie Review 1304494</title>
	<meta name="viewport" content="width=960">
	<script type="text/javascript" src="../scripts/jsValidation.js">
	</script>


<link rel="stylesheet" href="../scripts/main.css" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Alegreya+Sans:400,800,400italic' 
	rel='stylesheet' type='text/css' >
	
	<!-- Google Fonts -->
		<!-- 
		font-family: 'Bubblegum Sans', cursive;
		font-family: 'Alegreya Sans', sans-serif;
		-->
		
<!-- links and code for jquery date picker -->	
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	
<!-- <link rel="stylesheet" href="http:/resources/demos/style.css"> -->

<script>
  	$(function() {
    	$( "#datepicker" ).datepicker({ dateFormat: "dd/mm/yy" });
	});
</script>	
	
</head>

<body text="#000000" 
	style="background:#CDBCEB;
		height:1000px;"
	onload="setFocusR()">
	
	<div 
		style="background-color:transparent;
		margin-left:auto;
		margin-right:auto;
		position:relative;
		width:960px;
		height:1000px;" >
		
		<div id="bg">
  			<img src="../images/bg.png" alt="">
		</div>
		
		<div id="header">
			<?php 
			$pageindex = "";
			include 'header2.php';
			?>
		</div>
		
		<div id="login">
			<?php 
			include 'logout2.php';
			?>
		</div>
		
		<div id="sidebar">
			<?php 
			include 'sidebar2a.php'; 
			?>
		</div>
		
		<div id="content">
			<div
			style="position:absolute;
			left:5px;
			top:5px;
			width:740px;
			height:90px;
			overflow:hidden;">
				<p class="myBody-P">
					<span class="myBody-C-C0">How to Add Your Review</span>
				</p>
				<p class="myBody-P">
					<span class="myBody-C-C2">
						TODO: INSTRUCTIONS :- usmod tempor incididunt
						ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
						ullamco laboris nisi ut aliquip ex ea commodo.
					</span>
				</p>
			</div>
			<?php include 'addreviewform.php' ?>
		</div>

	</div>

</body>
</html>
<?php
}
?>