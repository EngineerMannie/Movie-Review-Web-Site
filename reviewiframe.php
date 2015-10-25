<?php
include 'dbconn/getdetail.php';
?>
<head>

	<link rel="stylesheet" href="scripts/reviewdetail.css" type="text/css" />
	
	<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans|Alegreya+Sans:400,800,400italic' 
		rel='stylesheet' type='text/css'>
		<!-- Google Fonts - - -
		font-family: 'Bubblegum Sans', cursive; Normal 400 & Bold 700
		font-family: 'Alegreya Sans', sans-serif; Normal 400
		-->
	
</head>
<body>
	<div id="img1">
		<img src = <?php echo $image1; ?> border="0" width="144" height="192">
	</div>
	
	<div id="img2">
		<img src = <?php echo $image2; ?> border="0" width="346" height="192">
	</div>
	
	<div id="category" style="position:absolute; width:150px; height:40px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Category&nbsp;:&nbsp;<?php echo $category; ?></b>
		</span></p>
	</div>
	
	<div id="urate" style="position:absolute; width:150px; height:40px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>uMovie&nbsp;uRate&nbsp;:&nbsp;<?php echo $urate; ?></b>
		</span></p>
	</div>
	
	<div id="runtime" style="position:absolute; width:150px; height:40px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Run&nbsp;Time&nbsp;:&nbsp;<?php echo $runtime; ?>&nbsp;mins</b>
		</span></p>
	</div>
	
	<div id="filmname" style="position:absolute; width:450px; height:40px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C1">
			Film&nbsp;Title&nbsp;:&nbsp;<?php echo $filmname; ?>
		</span></p>
	</div>
	
	<div id="releasedate" style="position:absolute; width:240px; height:35px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Release&nbsp;Date&nbsp;:&nbsp;<?php echo date('D, jS M Y',strtotime($releasedate)); ?></b>
		</span></p>
	</div>
	
	<div id="genre" style="position:absolute; width:640px; height:35px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Film&nbsp;Genre&nbsp;:&nbsp;</b><?php echo $genre; ?>
		</span></p>
	</div>
	
	<div id="director" style="position:absolute; width:640px; height:35px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Director&nbsp;:&nbsp;</b><?php echo $director; ?>
		</span></p>
	</div>
	
	<div id="starring" style="position:absolute; width:640px; height:35px; overflow:hidden;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Starring&nbsp;:&nbsp;</b><?php echo $starring; ?>
		</span></p>
	</div>
	
	<div id="review" style="position:absolute; width:680px;">
		<p class="myNormal-P"><span class="myBody-C-C2">
			<b>Review by : </b><?php echo $firstname.' '.$lastname ?>
			<br><br>
				<?php echo $review; ?>
			<br><br>
		</span></p>
		<hr>
		<?php include 'dbconn/getcomments.php' ?>
		<br>
	</div>
</body>