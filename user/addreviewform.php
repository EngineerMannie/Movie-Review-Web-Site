<!--
 * 
 * uMovie addreviewform.php
 * Martin Naismith - 1304494
 * Last Revision 30th July 2014
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
		
		<form id="form_30" action="../dbconn/savereview.php" method="post" 
			target="_self" enctype="application/x-www-form-urlencoded" 
			style="margin:0;
			position:absolute;
			left:0px;
			top:0px;
			width:740px;
			height:725px;">
		    	
    		<div style="position:absolute; left:280px; top:12px;" class="myBody-P">
            	<span class="myBody-C-C3">Submit Your Review</span>
            </div>
            
            <label for="filmname" style="position:absolute; right:620px; top:60px;" 
	    		class="myBody-C-C1">Film Name</label>
	    	<textarea name="filmname" style="position:absolute; left:135px; top:55px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		placeholder="Film Name....max 50 characters...." 
	    		maxlength="50" required></textarea>
	    	
	    	<label for="cbxcategory" style="position:absolute; right:175px; top:60px;" 
	    		class="myBody-C-C1">Category</label>
	    	<select class="myBody-C-C2" name="cbxcategory" size="1" 
	    		style="position:absolute; left:580px; top:62px; height:23px" required>
				<option value="">category</option>
				<option value="U">U</option>
				<option value="PG">PG</option>
				<option value="12">12</option>
				<option value="12A">12A</option>
				<option value="15">15</option>
				<option value="18">18</option>
				<option value="R18">R18</option>
				<option value="tbc">tbc</option>
			</select>	
	    	
            <label for="genre" style="position:absolute; right:620px; top:110px;" 
	    		class="myBody-C-C1">Genre</label>
	    	<textarea name="genre" style="position:absolute; left:135px; top:105px;" 
	    		class="myBody-C-C2" rows="1" cols="72" 
	    		placeholder="Genre....max 100 characters...." 
	    		maxlength="100" required></textarea>
            
            <label for="director" style="position:absolute; right:620px; top:160px;" 
	    		class="myBody-C-C1">Director</label>
	    	<textarea name="director" style="position:absolute; left:135px; top:155px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		placeholder="Director....max 50 characters...." 
	    		maxlength="50" required></textarea>
	    		
	    	<label for="releasedate" style="position:absolute; right:175px; top:160px;" 
	    		class="myBody-C-C1">Release Date</label>
	    	<input type="text" id="datepicker" name="releasedate" 
	    	style="position:absolute; left:580px; top:162px; width:80px; height:22px;">
            
            <label for="starring" style="position:absolute; right:620px; top:210px;" 
	    		class="myBody-C-C1">Starring</label>
	    	<textarea name="starring" style="position:absolute; left:135px; top:205px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		placeholder="Starring....max 100 characters...." 
	    		maxlength="100" required></textarea>
	    		
	    	<label for="runtime" style="position:absolute; right:175px; top:210px;" 
	    		class="myBody-C-C1">Running Time</label>
	    	<input type="number" name="runtime" min="5" max="500" placeholder="mins"
	    	style="position:absolute; left:580px; top:208px; width:80px; height:23px;">	
            
            <label for="review" style="position:absolute; left:37px; top:265px;" 
	    		class="myBody-C-C1">Your Review</label>
          	<textarea name="review" style="position:absolute; left:35px; top:300px;" 
	    		class="myBody-C-C2" rows="12" cols="88" 
	    		placeholder="Review...max 5000 characters...." 
	    		maxlength="5000" required></textarea>
	    		
	    	<label for="urate" style="position:absolute; right:175px; top:255px;" 
	    		class="myBody-C-C1">Your uRate</label>	
	    	<select class="myBody-C-C2" name="cbxurate" size="1" 
	    		style="position:absolute; left:580px; top:257px; height:22px" required>
				<option value="">rating</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>		
		    
		    <label for="image1" style="position:absolute; right:620px; top:590px;" 
	    		class="myBody-C-C1">Image 1</label>
	    	<textarea name="image1" style="position:absolute; left:135px; top:585px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		placeholder="Image Link....max 120 characters....Required Portrait 4x3 format" 
	    		maxlength="120" required></textarea>
		   
		    <label for="image2" style="position:absolute; right:620px; top:640px;" 
	    		class="myBody-C-C1">Image 2</label>
	    	<textarea name="image2" style="position:absolute; left:135px; top:635px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		placeholder="Image Link....max 120 characters....Optional Landscape 9x5 format" 
	    		maxlength="120"></textarea>
		   
		   
			<input type="submit" 
				style="position:absolute; 
				left:500px; 
				top:620px; 
				width:187px;
				height:35px;"
				class="myBody-C-C1" 
				name="submit" 
				value="Submit Your Review">
		</form>
	</div>
</div>