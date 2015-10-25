<!---
 *
 * uMovie getreview.cfm
 * Martin Naismith - 1304494
 * Last Revision 7th Aug 2014
 * Initial Build
 * 
 --->
<cftry>
	<cfif session.type NEQ 'admin'>
		<cflocation url="adminhome.cfm">
	</cfif>
	<cfcatch>
		<cflocation url="adminhome.cfm">
	</cfcatch>
</cftry>
<cfquery name="getreview" datasource="#session.dsn#">
	SELECT r.*, up.upload_id, up.date, up.status, ur.firstname, ur.lastname, ur.type
	FROM umovie_review r
	JOIN umovie_upload up
		ON r.review_id = up.review_id
	JOIN umovie_user ur
		ON up.user_id = ur.user_id
	WHERE ur.type IN ('admin', 'user') 
		AND up.status = 'pending' 
		AND r.review_#session.item#
</cfquery>

<div 
	style="position:absolute;
	left:0px;
	top:0px;
	width:740px;
	height:700px;">
	
	<div 
		style="position:absolute;
		left:0px;
		top:30px;
		width:740px;
		height:725px;
		background: transparent url('../images/addareas.png') no-repeat top left;">
		
		<form id="form_review" action="updatereview.cfm" method="post" 
			target="_self" enctype="application/x-www-form-urlencoded" 
			style="margin:0;
			position:absolute;
			left:0px;
			top:0px;
			width:740px;
			height:725px;">
		    <cfoutput QUERY = "getreview">
			
			<div style="position:absolute; top:5px; left:100px;" class="myBody-P" >
            	<span class="myBody-C-C2">Review made by - <b>#firstname# #lastname# </b>
            		- On <b>#DateFormat(date ,"dd/mm/yyyy")# </b>
            		- Current status is - <b>#type#</b> 
            	</span>
            </div>
            
            <label for="filmname" style="position:absolute; right:620px; top:40px;" 
	    		class="myBody-C-C1">Film Name</label>
	    	<textarea name="filmname" style="position:absolute; left:135px; top:35px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		maxlength="50" required>#filmname#</textarea>
	    	
	    	<label for="cbxcategory" style="position:absolute; right:175px; top:40px;" 
	    		class="myBody-C-C1">Category</label>
	    	<select class="myBody-C-C2" name="cbxcategory" size="1" 
	    		style="position:absolute; left:580px; top:42px; height:23px" required>
				<option value="#category#">#category#</option>
				<option value="U">U</option>
				<option value="PG">PG</option>
				<option value="12">12</option>
				<option value="12A">12A</option>
				<option value="15">15</option>
				<option value="18">18</option>
				<option value="R18">R18</option>
				<option value="tbc">tbc</option>
			</select>	
	    	
            <label for="genre" style="position:absolute; right:620px; top:90px;" 
	    		class="myBody-C-C1">Genre</label>
	    	<textarea name="genre" style="position:absolute; left:135px; top:85px;" 
	    		class="myBody-C-C2" rows="1" cols="72" 
	    		maxlength="100" required>#genre#</textarea>
            
            <label for="director" style="position:absolute; right:620px; top:140px;" 
	    		class="myBody-C-C1">Director</label>
	    	<textarea name="director" style="position:absolute; left:135px; top:135px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		maxlength="50" required>#director#</textarea>
	    		
	    	<label for="releasedate" style="position:absolute; right:175px; top:140px;" 
	    		class="myBody-C-C1">Release Date</label>
	    	<textarea name="releasedate" type="date" style="position:absolute; left:580px; top:135px;" 
	    		class="myBody-C-C2" rows="1" cols="10" maxlength="10" 
	    		required>#DateFormat(releasedate, "dd/mm/yyyy")#</textarea>
            
            <label for="starring" style="position:absolute; right:620px; top:190px;" 
	    		class="myBody-C-C1">Starring</label>
	    	<textarea name="starring" style="position:absolute; left:135px; top:185px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		maxlength="100" required>#starring#</textarea>
	    		
	    	<label for="runtime" style="position:absolute; right:175px; top:192px;" 
	    		class="myBody-C-C1">Running Time</label>
	    	<textarea type="number" name="runtime" style="position:absolute; left:580px; top:192px;"
				class="myBody-C-C2" rows="1" cols="10" maxlength="3" 
				required>#runtime#</textarea>
            
            <label for="review" style="position:absolute; left:37px; top:245px;" 
	    		class="myBody-C-C1">The Review</label>
          	<textarea name="review" style="position:absolute; left:35px; top:280px;" 
	    		class="myBody-C-C2" rows="9" cols="88" 
	    		maxlength="5000" required>#review#</textarea>
	    		
	    	<label for="urate" style="position:absolute; right:175px; top:245px;" 
	    		class="myBody-C-C1">Review uRate</label>	
	    	<select class="myBody-C-C2" name="cbxurate" size="1" 
	    		style="position:absolute; left:580px; top:248px; height:22px" disabled>
				<option value="#urate#">#urate#</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>		
		    
		    <label for="image1" style="position:absolute; right:620px; top:500px;" 
	    		class="myBody-C-C1">Image 1</label>
	    	<textarea name="image1" style="position:absolute; left:135px; top:495px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		maxlength="50" required>#image1#</textarea>
		   
		    <label for="image2" style="position:absolute; right:620px; top:550px;" 
	    		class="myBody-C-C1">Image 2</label>
	    	<textarea name="image2" style="position:absolute; left:135px; top:545px;" 
	    		class="myBody-C-C2" rows="1" cols="35" 
	    		maxlength="50">#image2#</textarea>
		   
		   <div>
		    	<label for="cbxstatus" style="position:absolute; left:60px; top:600px;" 
		    		class="myBody-C-C1">Review Status . . .</label>
		    	<select class="myBody-C-C1" name="cbxstatus" id="cbxstatus" size="1" 
		    		style="position:absolute; left:225px; top:597px;" required>
			    	<option value ="#status#">#status#</option>
			    	<option value ="pending">pending</option>
			    	<option value ="active">active</option>
			    	<option value ="removed">removed</option>
				</select>
		    </div>
		    
		    <a href="admintools.cfm"
				style="position:absolute; left:555px; top:550px;">
  				<input type="button" class="myBody-C-C1" value="Cancel" /></a>
		    
			<input type="submit" 
				style="position:absolute; left:500px; top:590px; width:187px; height:35px;"
				class="myBody-C-C1" 
				name="submit" 
				value="Update Review">
			</cfoutput>
		    <cfhttp method="Post" url="/updatereview.cfm">
			    <cfhttpparam type="Formfield" value="filmname" name="filmname">
			    <cfhttpparam type="Formfield" value="cbxcategory" name="cbxcategory">
			    <cfhttpparam type="Formfield" value="genre" name="genre">
			    <cfhttpparam type="Formfield" value="director" name="director">
			    <cfhttpparam type="Formfield" value="starring" name="starring">
			    <cfhttpparam type="Formfield" value="releasedate" name="releasedate">
			    <cfhttpparam type="Formfield" value="runtime" name="runtime">
			    <cfhttpparam type="Formfield" value="review" name="review">
			    <cfhttpparam type="Formfield" value="image1" name="image1">
			    <cfhttpparam type="Formfield" value="image2" name="image2">
			    <cfhttpparam type="Formfield" value="cbxstatus" name="cbxstatus">
			</cfhttp>
		</form>
	</div>
</div>