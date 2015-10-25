<?php 
/* 
 * Martin Naismith - 1304494
 * Last Revision 17th July 2014
 * tidy formatting and code links
 * 
 * 4th July 2014
 * revised for uMovie
 * 
 * 23rd March 2014
 * Initial build.
 * 
 */

// this is set by the calling page if it is set else set empty
$pageindex = isset($pageindex) ? $pageindex : "";
switch ($pageindex) {
	case "home":
		$btn1 = "Button1";	$btn2 = "Button2";	$btn3 = "Button2";	$btn4 = "Button2";	$btn5 = "Button2";
		break;
	case "movielist":
		$btn1 = "Button2";	$btn2 = "Button1";	$btn3 = "Button2";	$btn4 = "Button2";	$btn5 = "Button2";
		break;
	case "movielatest":
		$btn1 = "Button2";	$btn2 = "Button2";	$btn3 = "Button1";	$btn4 = "Button2";	$btn5 = "Button2";
		break;
	case "news":
		$btn1 = "Button2";	$btn2 = "Button2";	$btn3 = "Button2";	$btn4 = "Button1";	$btn5 = "Button2";
		break;
	case "tutor":
		$btn1 = "Button2";	$btn2 = "Button2";	$btn3 = "Button2";	$btn4 = "Button2";	$btn5 = "Button1";
		break;
	case "none":
		$btn1 = "Button2";	$btn2 = "Button2";	$btn3 = "Button2";	$btn4 = "Button2";	$btn5 = "Button2";
		break;
	default:
		$btn1 = "Button2";	$btn2 = "Button2";	$btn3 = "Button2";	$btn4 = "Button2";	$btn5 = "Button2";
		break;
}

?>
<div style="background-color:#cacaca; width:750px; height:65px;">
		<p class="myBody-P"><span class="myBody-C">uMovie Review - so U don't waste time!</span></p>
	<div style="background-color:#cacaca; position:absolute; left:0px; top:65px; width:750px; height:50px;">
		<a href="homepage.php" id="nav_1_B1" class="<?php echo $btn1; ?>" 
			style="display:block; position:absolute; left:9px; top:5px; width:135px; height:43px;">
				<span>Home</span></a>
		<a href="movielist.php" id="nav_1_B2" class="<?php echo $btn2; ?>" 
			style="display:block; position:absolute; left:158px; top:5px; width:135px; height:43px;">
				<span>Movie&nbsp;List</span></a>
		<a href="movielatest.php" id="nav_1_B3" class="<?php echo $btn3; ?>" 
			style="display:block; position:absolute; left:307px; top:5px; width:135px; height:43px;">
				<span>Latest</span></a>
		<a href="movienews.php" id="nav_1_B4" class="<?php echo $btn4; ?>" 
			style="display:block; position:absolute; left:456px; top:5px; width:135px; height:43px;">
				<span>Movie&nbsp;News</span></a>
		<a href="contenttutor1.php" id="nav_1_B5" class="<?php echo $btn5; ?>" 
			style="display:block; position:absolute; left:605px; top:5px; width:135px; height:43px;">
				<span>Tutor</span></a>
	</div>
</div>