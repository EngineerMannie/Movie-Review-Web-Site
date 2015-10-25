<!---
 * 
 * uMovie searchlistcontrol.cfm
 * Martin Naismith - 1304494
 * Last Revision 4th July 2014
 * revised for uMovie
 *
 *23rd March 2014
 * Initial build.
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
<div 
	style="position:absolute;
	left:5px;
	top:5px;
	width:740px;
	height:170px;
	overflow:hidden;">
	
	<p class="myBody-P">
		<cfif session.mytoken EQ 'comments'>
			<span class="myBody-C-C0">uFilm - Comments NOT moderated</span>
			<cfelseif session.mytoken EQ 'reviews'>
				<span class="myBody-C-C0">uFilm - Reviews NOT moderated</span>
		</cfif>
	</p>
	<p class="myBody-P"><cfif session.mytoken EQ 'comments'>
			<span class="myBody-C-C1">
				COMMENTS - To return to the 'Admin Menu' page, Click the 'Admin Home' tab above.
			</span>
			<cfelseif session.mytoken EQ 'reviews'>
				<span class="myBody-C-C1">
					REVIEWS - To return to the 'Admin Menu' page, Click the 'Admin Home' tab above.
				</span>
		</cfif>
		<hr>
	</p>
	<cfif session.mytoken EQ 'comments'>
		<cfparam name="id" type="integer" default=-1 >
			<form action="edititemframe.cfm" method="get"
				style="margin:0; position:absolute; left:5px; top:140px; width:700px; height:50px;">
				<b>Comment ID : </b><input type="number" name="id" size="6" />
				<input name="" type="submit" value="Submit" />
				Enter <b>'Comment ID'</b> & Click <b>Submit</b> to Update / Edit
			</form>
		<cfelseif session.mytoken EQ 'reviews'>
			<cfparam name="id" type="integer" default=-2 >
			<form action="edititemframe.cfm" method="get"
				style="margin:0; position:absolute; left:5px; top:140px; width:700px; height:50px;">
				<b>Review ID : </b><input type="number" name="id" size="6" />
				<input name="" type="submit" value="Submit" />
				Enter <b>'Review ID'</b> & Click <b>Submit</b> to Update / Edit
			</form>
	</cfif>
</div>
<div 
	style="position:absolute;
	left:5px;
	top:180px;
	width:740px;
	height:660px;
	background-color:white;">
		
	<p class="myBody-P">
		<cfif session.mytoken EQ 'comments'>
			<span class="myBody-C-C0">uFilm Comments List</span>
			<cfelseif session.mytoken EQ 'reviews'>
				<span class="myBody-C-C0">uFilm Reviews List</span>
		</cfif>
	</p>

	<iframe 
		<cfif session.mytoken EQ 'comments'>
			<cfoutput>src="getcomments.cfm"</cfoutput>
			<cfelseif session.mytoken EQ 'reviews'>
				<cfoutput>src="getreviews.cfm"</cfoutput>
		</cfif>	
		style="position:absolute;
		left:0px;
		top:40px;
		width:735px;
		height:615px;">
  		<p>Your browser does not support iframes.</p>
	</iframe>
	
</div>