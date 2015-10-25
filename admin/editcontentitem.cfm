<!---
 * 
 * uMovie contentcomment.cfm
 * Martin Naismith - 1304494
 * Last Revision 5th Aug 2014
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
			<span class="myBody-C-C0">uFilm - Comment NOT moderated</span>
			<cfelseif session.mytoken EQ 'reviews'>
				<span class="myBody-C-C0">uFilm - Review NOT moderated</span>
		</cfif>
	</p>
	<p class="myBody-P"><cfif session.mytoken EQ 'comments'>
			<span class="myBody-C-C1">
				COMMENT - To return to the 'Admin Menu' page, Click the 'Admin Home' tab above. <br>
				TODO : contraints on input of comment_id ie. to the actual list through sql qeury.
			</span>
			<cfelseif session.mytoken EQ 'reviews'>
				<span class="myBody-C-C1">
					REVIEW - To return to the 'Admin Menu' page, Click the 'Admin Home' tab above. <br>
					TODO : contraints the input of review_id ie. to the actual list through sql query.
				</span>
		</cfif>
		<hr>
	</p>
	<cfif session.mytoken EQ 'comments'>
			
		<cfelseif session.mytoken EQ 'reviews'>
				
	</cfif>
</div>
<div 
	style="position:absolute;
	left:5px;
	top:140px;
	width:740px;
	height:700px;
	background-color:white;
	overflow:hidden;	">
		
	<p class="myBody-P">
		<cfif session.mytoken EQ 'comments'>
			<span class="myBody-C-C0">uFilm Comment - Review & Edit</span>
			<cfelseif session.mytoken EQ 'reviews'>
				<span class="myBody-C-C0">uFilm Review - Review & Edit</span>
		</cfif>
	</p>

	<cfif session.mytoken EQ 'comments'>
		<cfinclude template="getcomment.cfm">
		<cfelseif session.mytoken EQ 'reviews'>
			<cfinclude template="getreview.cfm">
	</cfif>	

</div>