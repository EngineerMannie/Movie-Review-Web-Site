<!---
 *
 * Martin Naismith - 1304494
 * Last Revision 2nd Aug 2014
 * Initial Build
 * 
 --->
<!--- Get all records from the database that match this users credentials --->

<!---> DATABASE LINK umovie2cf or sql1304494 <--->
<cfquery name="getuser" datasource="sql1304494">
	SELECT  user_id, username, password, firstname, lastname, type, email
	FROM    umovie_user
	WHERE username = '#uname_in#'
	AND  password = '#pword_in#'
	AND type = 'admin'
</cfquery>

<cfif getuser.RecordCount EQ 1>
	<!--- user is logged in, change session.allowin value --->
	<cfset session.allowin = "True" />
	<cfset session.auth = session.sessionid>
	<cfset session.user_id = getuser.user_id />
	<cfset session.firstname = getuser.firstname />
	<cfset session.lastname = getuser.lastname />
	<cfset session.type = getuser.type />
	<cfset session.email = getuser>
	<cfset session.dsn = "sql1304494">
	<!---> umovie2cf or sql1304494 <--->

	<!--- welcome and redirect --->
	<script>
		// alert("Welcome Administrator\n You have been successfully logged in!");
		self.location="admintools.cfm";
	</script>
	< cfelse>
	<!--- log error, back to the login page --->
	<script>
		alert("You could not be verified\n Please try again!!!");
		self.location="Javascript:history.go(-1)";
	</script>
</cfif>