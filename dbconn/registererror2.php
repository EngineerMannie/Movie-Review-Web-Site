<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!--
 * 
 * uMovie loginerror.html
 * Martin Naismith - 1304494
 * Last Revision 23rd July 2014
 * Layout Revised
 *
 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registration Error</title>

<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Alegreya+Sans:400,800,400italic' 
		rel='stylesheet' type='text/css'>
		<!-- Google Fonts ----
		font-family: 'Bubblegum Sans', cursive; Normal 400 & Bold 700
		font-family: 'Alegreya Sans', sans-serif; Normal 400
		-->
<style type="text/css">

	body {margin: 0px; padding: 0px;}
	.Artistic-Body-P {
	    margin:0.0px 0.0px 0.0px 0.0px; text-align:center; font-weight:400;
	}
	
	.Artistic-Body-C {
	    font-family: 'Bubblegum Sans', cursive; font-size:52.0px; line-height:1.29em;
	}
	
	.Artistic-Body-C-C0 {
	    font-family: 'Alegreya Sans', sans-serif; font-size:27.0px; line-height:1.19em;
	}
	
	.Artistic-Body-C-C1 {
	    font-family: 'Alegreya Sans', sans-serif; font-size:21.0px; line-height:1.19em;
	}

</style>

<link rel="stylesheet" href="scripts/styles.css" type="text/css">

</head>
<body text="#000000" border="3" 
	style="background:#B8A0DB; 
	text-align:center; 
	height:560px;">
	<?php 
	/*  get the value of the registration error
	1 = passwords not matching
	2 = an error connecting with database
	3 = username is not allowed try again
	*/
	switch($id){
		case 1:
			$errortext = 'The passwords did not match - Please Re-try Registration';
			break;
		case 2:
			$errortext = 'An error occured with the database - Please Re-try Later';
			break;
		case 3:
			$errortext = 'The username is not allowed - Please Re-try Registration';
			break;
		default:
			$errortext = 'An error has occured - Please Re-try Registration';
	}
	?>
	<div style="background-color:transparent;text-align:left;margin-left:auto;margin-right:auto;
	     position:relative;width:750px;height:560px;">
	
		<img src="../images/regareas.png" width="749" height="450" border="1" alt="" 
		     style="position:absolute;left:0px;top:0px;">
		
		<div style="position:absolute;left:130px;top:35px;width:400px;height:64px;">
		        <span class="Artistic-Body-C-C0">To register for eduApps<br></span>
		        <span class="Artistic-Body-C-C0">for free downloads</span>
		</div>
		<div style="position:absolute;left:130px;top:120px;width:400px;height:64px;">
		        <span class="Artistic-Body-C-C0">or Cancel</span>
		</div>
		
		<div style="position:absolute;left:50px;top:200px;width:670px;height:189px;">
		    <div class="Artistic-Body-P">
		    	<span class="Artistic-Body-C-C1">The information provided did not match our records<br/></span>
		        <span class="Artistic-Body-C-C1"><?php echo $errortext; ?><br/></span>
		        <span class="Artistic-Body-C-C0">Please register entering your personal details<br/></span>
		        <span class="Artistic-Body-C-C0"><br/></span>
		        <span class="Artistic-Body-C-C1">If you are having problems logging in<br/></span>
		        <span class="Artistic-Body-C-C1">Please call our administration office on<br/></span>
		        <span class="Artistic-Body-C-C1">08457 987654</span>
		    </div>
		</div>
		<a href="../registration.php" id="btn_11" class="Button1" 
		   style="position:absolute;left:500px;top:50px;width:135px;height:35px;"><span>Registration</span></a>
		<a href="../homepage.php" id="btn_12" class="Button1" 
		   style="position:absolute;left:500px;top:120px;width:135px;height:35px;"><span>Cancel</span></a>  
	   
	</div>
</body>
</html>