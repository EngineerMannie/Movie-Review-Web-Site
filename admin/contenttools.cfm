<!---
 * 
 * uMovie contenttools2.cfm
 * Martin Naismith - 1304494
 * Last Revision 4th Aug 2014
 * revised for uMovies
 *
 * 3rd July 2014
 * revised session checks
 * 
 * 29th June 2014
 * setup menu selections and report
 * 
 * 27th June 2014
 * Revise Layout 26th & 27th
 *
 * Initial build. 23 March 2014
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
	height:835px;
	background: transparent url('../images/tutarea.png') no-repeat top left;
	overflow:hidden;">
	
	<p class="myBody-P">
		<span class="myBody-C-C0">Administration Controls</span>
	</p>
	<p class="myBody-P">
		<span class="myBody-C-C1">
			MARTIN NAISMITH - Student ID 1304494 - CE0932A : Server Side Development
		</span>
	</p>
</div>
<div 
	style="position:absolute;
	left:5px;
	top:5px;
	width:740px;
	height:150px;">

	<div 
		style="position:absolute;
		left:50px;
		top:110px;
		width:630px;
		height:300px;
		background: transparent url('../images/regareas.png') no-repeat top left;">
	    <div 
	    	style="position:absolute;
	    	left:200px;
	    	top:12px;
	    	width:205px;
	    	height:23px;
	    	white-space:nowrap;">
    		<div class="Artistic-Body-P">
            	<span class="myBody-C-C1">Main Menu Selection</span>
            </div>
	    </div>
	</div>
	<div 
		style="position:absolute;
		left:50px;
		top:410px;
		width:630px;
		height:290px;
		background: transparent url('../images/regareas.png') no-repeat top left;">
		<div 
			style="position:absolute;
			left:215px;
			top:8px;
			width:201px;
			height:23px;
			white-space:nowrap;">
		    <div class="Artistic-Body-P">
		        <span class="myBody-C-C1">Reports Available</span>
		    </div>
		</div>
	</div>
	<div enctype="application/x-www-form-urlencoded" 
		style="margin:0;
		position:absolute;
		left:80px;
		top:160px;
		width:610px;
		height:525px;">
		
<!--- Review Stuff --->
		
		<div style="position:absolute;
			left:10px; top:10px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="newuploads">
					<span class="myBody-C-C2">Review / Edit new user comments</span>
				</label>
			</p>
		</div>
		<input type="button" name="newuploads" value="Search new comments"
				style="position:absolute; left:300px; top:10px; width:180px; height:25px;"
				onclick="window.location.href='searchlistframe.cfm?comments'">
			
		<div style="position:absolute;
			left:10px; top:50px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="allapps">
					<span class="myBody-C-C2">Review / Edit new uMovie reviews</span>
				</label>
			</p>
		</div>	
		<input type="button" name="allapps" value="Search new reviews"
			style="position:absolute; left:300px; top:50px; width:180px; height:25px;"
				onclick="window.location.href='searchlistframe.cfm?reviews'">
			
		<div style="position:absolute;
			left:10px; top:90px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="users">
					<span class="myBody-C-C2">Edit status active uMovie reviews</span>
				</label>
			</p>
		</div>	
		<input type="button" name="users" value="Search active reviews"
			style="position:absolute; left:300px; top:90px; width:180px; height:25px;"
				onclick="window.location.href=''">
			
		<div style="position:absolute;
			left:10px; top:130px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="developers">
					<span class="myBody-C-C2">Review / Edit users list</span>
				</label>
			</p>
		</div>	
		<input type="button" name="developers" value="Search users"
			style="position:absolute; left:300px; top:130px; width:180px; height:25px;"
				onclick="window.location.href=''">
			
		<div style="position:absolute;
			left:10px; top:170px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="admins">
					<span class="myBody-C-C2">Review / Edit administrators list</span>
				</label>
			</p>
		</div>	
		<input type="button" name="admins" value="Search administrators"
			style="position:absolute; left:300px; top:170px; width:180px; height:25px;"
				onclick="window.location.href=''">	
			
<!--- Reports Stuff --->
			
		<div style="position:absolute;
			left:10px; top:310px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="downloads">
					<span class="myBody-C-C2">View all uMovie reviews</span>
				</label>
			</p>
		</div>
		<input type="button" name="downloads" value="Search uMovie reviews"
				style="position:absolute; left:300px; top:310px; width:180px; height:25px;"
				onclick="window.location.href=''">
			
		<div style="position:absolute;
			left:10px; top:350px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="dates">
					<span class="myBody-C-C2">View review older than two months</span>
				</label>
			</p>
		</div>	
		<input type="button" name="dates" value="Search uMovie reviews"
			style="position:absolute; left:300px; top:350px; width:180px; height:25px;"
				onclick="window.location.href=''">
			
		<div style="position:absolute;
			left:10px; top:390px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="country">
					<span class="myBody-C-C2">View reviews not commented on</span>
				</label>
			</p>
		</div>	
		<input type="button" name="country" value="Search uMovie reviews"
			style="position:absolute; left:300px; top:390px; width:180px; height:25px;"
				onclick="window.location.href=''">
			
		<div style="position:absolute;
			left:10px; top:430px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="nil">
					<span class="myBody-C-C2">View user upload stats</span>
				</label>
			</p>
		</div>	
		<input type="button" name="nil" value="Search uMovie reviews"
			style="position:absolute; left:300px; top:430px; width:180px; height:25px;"
				onclick="window.location.href=''">
		<!---	
		<div style="position:absolute;
			left:10px; top:470px; width:230px; height:20px; overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="admins">
					<span class="myBody-C-C2">View developers uploads</span>
				</label>
			</p>
		</div>	
		<input type="button" name="admins" value="Search developers"
			style="position:absolute; left:300px; top:470px; width:180px; height:25px;">
		--->
	</div>
</div>