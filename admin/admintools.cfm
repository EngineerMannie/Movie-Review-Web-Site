<!DOCTYPE HTML>
<meta charset="utf-8">
<!---
 * 
 * uMovie adminhomepage.cfm
 * Martin Naismith - 1304494
 * Last Revision 31st July 2014
 * Initial build.
 *
--->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>uMovie Review 1304494</title>

	<meta name="viewport" content="width=960">
	
	<link rel="stylesheet" href="../scripts/main.css" type="text/css" />
	
	<script type="text/javascript" src="../scripts/jsValidation.js">
	</script>
	
	<!--- Load Google Fonts --->
	<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Alegreya+Sans:400,800,400italic' 
		rel='stylesheet' type='text/css'>
		
		
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
  			<img src="../images/bg.png" alt="">
		</div>
		
		<div id="login">
			<!--- TODO: if session is started and if 
			session type = admin display logout --->
			<cfinclude template="logout.cfm">
		</div>
		
		<div id="header">
			<cfinclude template="header1.cfm">
		</div>
		
		<div id="sidebar">
			<cfinclude template="sidebar2a.cfm">
		</div>
		
		<div id="content">
			<cfinclude template="contenttools.cfm">
		</div>
	</div>
</body>
</html>