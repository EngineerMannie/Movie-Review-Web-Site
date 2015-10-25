<!---
 * 
 * uMovie logout.php
 * Martin Naismith - 1304494
 * Last Revision 
 * 2nd Aug 2014
 * revised code
 *
 * 28th July 2014
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


<form id="form_logout" name="userinfo_2" action="adminhome.cfm?logout" 
		style="margin:0; position:absolute; left:5px; top:5px; width:190px; height:110px;">
		
	<div style="position:absolute; left:35px; top:8px; width:165px; height:20px; overflow:hidden;">
		<p class="myNormal-P"><label for="edit_1">
		<span class="myNormal-C">Login as :
			<cfif session.type EQ 'admin'>
				<cfoutput>
					<cflock timeout="true" scope="session" type="Readonly">
		    			<cfoutput> #Session.firstname# </cfoutput>
					</cflock>
				</cfoutput>
			</cfif>
		</span></label></p>
	</div>
	<div style="position:absolute; left:35px; top:41px; width:170px; height:20px;">
		<p class="myNormal-P"><label for="edit_2">
			<span class="myNormal-C">Your Rights :
				<cfif session.type EQ 'admin'>
					<cfoutput>
						Admin
					</cfoutput>
				</cfif>
				<cfif session.type EQ 'user'>
					<script>
						<!--- kill the session --->
						alert("User not permitted here!!!\n You're goig Home!!!");
						self.location="../homepage.php";
					</script>
				</cfif>
			</span></label>
		</p>
	</div>
	<input type="submit" name="logout" value="Log Out" 
		style="position:absolute; left:30px; top:76px; width:130px; height:25px;">
</form>