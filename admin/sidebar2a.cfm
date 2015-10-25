<!---
 * 
 * Martin Naismith - 1304494
 * Last Revision  
 * 2nd Aug 2014
 * revised code
 *
 * 29th June 2014
 * changed layout for admin functions 
 *
 * 23rd March 2014
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
<div style="position:relative;left:5px;top:5px;width:185px;height:835px;
		background: transparent url('../images/sidebar.png') no-repeat top left;">
	<div style="position:absolute;left:5px;top:16px;width:176px;height:135px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C0">Site Access</span></p>
		<p class="myBody-P"><span class="myBody-C-C1">Use the links below to create 
			new site users and edit accounts</span></p>
	</div>
	
	<div style="position:absolute;left:11px;top:191px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Create User</span></p>
	</div>
	<input type="button" style="position:absolute; left:38px; top:220px; 
		width:121px; height:25px;" name="butn_5" value="Create User">
		
	<div style="position:absolute;left:10px;top:269px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Edit User Details</span></p>
	</div>
	<input type="button" style="position:absolute; left:38px; top:300px; 
		width:121px; height:25px;" name="butn_6" value="Edit User">
		
	<div style="position:absolute;left:10px;top:347px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Create Admin</span></p>
	</div>
	<input type="button" style="position:absolute; left:38px; top:380px; 
		width:121px; height:25px;" name="butn_7" value="Create Admin">

	<div style="position:absolute;left:10px;top:430px;width:175px;height:36px;overflow:hidden;">
		<p class="myBody-P"><span class="myBody-C-C1">Edit Your Details</span></p>
	</div>
	
	<button type="button" 
		style="position:absolute; left:38px; top:460px; width:121px; height:25px;"
		onclick="window.location.href='user/editdetails.php'">
		Edit&nbsp;Details
	</button>
</div>