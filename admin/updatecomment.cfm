<!---
 *
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
<!DOCTYPE HTML>
<meta charset="utf-8">
<head>
	
	<cfquery name="updatecomment" datasource="#session.dsn#"> 
		UPDATE umovie_comment
		SET comment = '#Form.comment#', 
			status = '#Form.cbxstatus#'
		WHERE comment_#session.item#
	</cfquery>

</head>
<body>

<CFIF IsDefined("updatecomment.RecordCount")>
	<script>
		alert("Record DID NOT update!!");
		self.location="Javascript:history.go(-1)";
	</script>
	<cfelse>
	<script>
		alert("Record is updated");
		self.location="admintools.cfm";
	</script>
</CFIF>

</body>