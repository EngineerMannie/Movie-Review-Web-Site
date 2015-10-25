<!--
 * 
 * uMovie addcommentform.php
 * Martin Naismith - 1304494
 * Last Revision 29th July 2014
 * Initial build.
 *
-->

<div 
	style="position:absolute;
	left:5px;
	top:5px;
	width:740px;
	height:700px;">
	
	<div 
		style="position:absolute;
		left:0px;
		top:110px;
		width:740px;
		height:725px;
		background: transparent url('../images/addareas.png') no-repeat top left;">
		
		<form id="form_29" action="../dbconn/savecomment.php?id=<?php echo $_GET['id']; ?>" method="post" 
			target="_self" enctype="application/x-www-form-urlencoded" 
			style="margin:0;
			position:absolute;
			left:0px;
			top:0px;
			width:740px;
			height:725px;">
		    <div 
		    	style="position:absolute;
		    	left:35px;
		    	top:12px;
		    	width:205px;
		    	height:23px;
		    	white-space:nowrap;">
	    		<div class="myBody-P">
	            	<span class="myBody-C-C3">Submit Your Comment for - 
	            		<?php include '../dbconn/getcommentinfo.php'; ?>
	            	</span>
	            </div>
		    </div>
		    <div style="position:absolute; left:35px; top:50px;">
		    	<textarea name="comment" class="myBody-C-C2" rows="15" cols="92" 
		    		placeholder="Your Comments....max 1000 characters...." 
		    		maxlength="1000" required></textarea>
		    </div>
		    <div>
		    	<label for="cbxrating" style="position:absolute; left:75px; top:390px;" 
		    		class="myBody-C-C3">Enter Your uRate...</label>
		    	<select class="myBody-C-C3" name="cbxrating" size="1" 
		    		style="position:absolute; left:250px; top:387px;" required>
					<option value="">rating</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
		    </div>
		    <div>
		    	
		    </div>
			<input type="submit" 
				style="position:absolute; 
				left:450px; 
				top:387px; 
				width:187px;
				height:35px;"
				class="myBody-C-C1" 
				name="submit" 
				value="Submit Your Comment">
		</form>
	</div>
</div>