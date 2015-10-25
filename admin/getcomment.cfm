<!---
 *
 * uMovie getcomment.cfm
 * Martin Naismith - 1304494
 * Last Revision 5th Aug 2014
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
<cfquery name="getcomment" datasource="#session.dsn#">
	SELECT c.*, r.filmname, u.firstname, u.lastname, u.type
	FROM umovie_comment c
	JOIN umovie_review r
		ON r.review_id = c.review_id
	JOIN umovie_user u
		ON c.user_id = u.user_id
	WHERE u.type IN ( 'admin', 'user' ) 
		AND c.status = 'pending' 
		AND c.comment_#session.item#
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
		
		<form id="form_comment" action="updatecomment.cfm" method="post" 
			target="_self" enctype="application/x-www-form-urlencoded" 
			style="margin:0;
			position:absolute;
			left:0px;
			top:0px;
			width:740px;
			height:725px;">
			<cfoutput QUERY = "getcomment">
		    <div 
		    	style="position:absolute;
		    	left:35px;
		    	top:12px;
		    	width:205px;
		    	height:23px;
		    	white-space:nowrap;">
	    		<div class="myBody-P">
	            	<span class="myBody-C-C3">Comment id - ' #comment_id# ' : For - ' #filmname# '</span>
	            	<br>
	            	<span class="myBody-C-C2">Made by - <b>#firstname# #lastname#</b><br>
	            		On <b>#DateFormat(date ,"dd/mm/yyyy")#</b><br>
	            		Current status is - <b>#type#</b> 
	            	</span>
	            </div>
		    </div>
		    <div style="position:absolute; left:25px; top:120px;">
		    	<textarea name="comment" id="comment" class="myBody-C-C2" rows="15" cols="92" 
		    		maxlength="1000" required>#comment#</textarea>
		    </div>
		    <div>
		    	<label for="cbxrating" style="position:absolute; left:65px; top:460px;" 
		    		class="myBody-C-C1">The uRate Rating . . .</label>
		    	<select disabled class="myBody-C-C1" name="cbxrating" size="1" 
		    		style="position:absolute; left:250px; top:457px; width:95px;" required>
			    	<option value ="#urate#">#urate#</option>
				</select>
		    </div>
		    <div>
			
		    <div>
		    	<label for="cbxstatus" style="position:absolute; left:65px; top:500px;" 
		    		class="myBody-C-C1">Comment Status . . .</label>
		    	<select class="myBody-C-C1" name="cbxstatus" id="cbxstatus" size="1" 
		    		style="position:absolute; left:250px; top:497px;" required>
			    	<option value ="#status#">#status#</option>
			    	<option value ="pending">pending</option>
			    	<option value ="active">active</option>
			    	<option value ="removed">removed</option>
				</select>
		    </div>
		    <div>
			    
			<a href="admintools.cfm"
				style="position:absolute; left:520px; top:455px;">
  				<input type="button" class="myBody-C-C1" value="Cancel" /></a>
			
		    </div>
			<input type="submit" 
				style="position:absolute; left:460px; top:495px; width:187px; height:35px;"
				class="myBody-C-C1" 
				name="submit" 
				value="Update Comment">
		    </cfoutput>
		    <cfhttp method="Post" url="/updatecomment.cfm">
			    <cfhttpparam type="Formfield" value="comment" name="comment">
			    <cfhttpparam type="Formfield" value="cbxstatus" name="cbxstatus">
			</cfhttp>
		</form>
	</div>
</div>