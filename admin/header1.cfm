
<!---
 * 
 * uMovie header1.cfm
 * Martin Naismith - 1304494
 * Last Revision 31st July 2014
 * Initial build.
 *
--->

<div style="background-color:#cacaca; width:750px; height:65px;">
		<p class="myBody-P"><span class="myBody-C">uMovie Review - so U don't waste time!</span></p>
	<div style="background-color:#cacaca; position:absolute; left:0px; top:65px; width:750px; height:50px;">
		
		<a href="../homepage.php" id="nav_1_B1" class="Button2" 
			style="display:block; position:absolute; left:9px; top:5px; width:135px; height:43px;">
				<span>Home</span></a>
		
		<a href="../movielist.php" id="nav_1_B2" class="Button2" 
			style="display:block; position:absolute; left:158px; top:5px; width:135px; height:43px;">
				<span>Movie&nbsp;List</span></a>
		
		<a href="../movielatest.php" id="nav_1_B3" class="Button2" 
			style="display:block; position:absolute; left:307px; top:5px; width:135px; height:43px;">
				<span>Latest</span></a>
		<cftry>
			<cfif session.type EQ 'admin'>
			<a href="admintools.cfm" id="nav_1_B4" class="Button2" 
				style="display:block; position:absolute; left:456px; top:5px; width:135px; height:43px;">
				<span>Admin&nbsp;Tools</span></a>
			<cfelse>
				<a href="adminhome.cfm" id="nav_1_B4" class="Button1" 
					style="display:block; position:absolute; left:456px; top:5px; width:135px; height:43px;">
					<span>Admin&nbsp;Home</span></a>
			</cfif>
		<cfcatch>
			<a href="adminhome.cfm" id="nav_1_B4" class="Button1" 
				style="display:block; position:absolute; left:456px; top:5px; width:135px; height:43px;">
				<span>Admin&nbsp;Home</span></a>
		</cfcatch>
		</cftry>		
		
		
		<a href="../contenttutor1.php" id="nav_1_B5" class="Button2" 
			style="display:block; position:absolute; left:605px; top:5px; width:135px; height:43px;">
				<span>Tutor</span></a>
	</div>
</div>