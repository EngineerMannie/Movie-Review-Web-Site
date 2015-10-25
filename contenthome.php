<?php 
/* 
 * Martin Naismith - 1304494
 * Last Revision 28th July 2014
 * Adding Session Info
 * 
 * 4th July 2014
 * revised for uMovie
 *
 * 23rd March 2014
 * Initial build.
 */

// session_start();
?>
<div 
	style="position:absolute;
	left:5px;
	top:5px;
	width:740px;
	height:150px;
	overflow:hidden;">
	
	<p class="myBody-P">
		<span class="myBody-C-C0">How This Site Works</span>
	</p>
	<p class="myBody-P">
		<span class="myBody-C-C1">
			MARTIN NAISMITH - Student ID 1304494 - CE0932A: Server Side Development<br><br>
			uMovies provides the cimema goer with reviews and  comments about the latest movies 
			doing the rounds. Don't waste precious time and money on duffers!!
		</span>
	</p>
</div>
<div 
	style="position:absolute;
	left:5px;
	top:180px;
	width:740px;
	height:660px;
	background-color:white;">
	<!-- Insert the Featured Apps Here -->
	<p class="myBody-P">
		<span class="myBody-C-C0">Look-out For These Releases</span>
	</p>
	<div
		style="position:absolute;
		left:0px;
		top:40px;
		width:740px;
		height:620px;">
		<?php include 'moviefuture.php' ?>
	</div>
</div>