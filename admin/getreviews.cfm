<!---
 *
 * uMovie getreviews.cfm
 * Martin Naismith - 1304494
 * Last Revision 4th Aug 2014
 * Initial Build
 * 
 --->
<!--- Get all records from the database that match this users credentials --->
<cftry>
	<cfif session.type NEQ 'admin'>
		<cflocation url="adminhome.cfm">
	</cfif>
	<cfcatch>
		<cflocation url="adminhome.cfm">
	</cfcatch>
</cftry>
<cfquery name="getreviews" datasource="#session.dsn#">
	SELECT r.*, up.*
	FROM  umovie_review r
	JOIN umovie_upload up
	ON r.review_id = up.review_id
	JOIN umovie_user ur
	ON up.user_id = ur.user_id
	WHERE ur.type IN ('admin', 'user') AND up.status = 'pending'
	ORDER BY r.review_id
</cfquery>

<table id="table_1" cellspacing="0" width="700px" cellpadding="0" border="1">
    <col style="width:9%;"></col>
    <col style="width:24%;"></col>
    <col style="width:28%;"></col>
	<col style="width:7%;"></col>
    <col style="width:12%;"></col>
    <col style="width:12%;"></col>
    <col style="width:8%;"></col>
	<tr class="myBody-C-C1" style="height:45px; 
			vertical-align:middle; padding:1px 4px 1px 4px; background-color:#EBE6F2;">
		<th>Review ID</th>
		<th>Film Name</th>
		<th>Starring</th>
		<th>User ID</th>
		<th>Upload Date</th>
		<th>Release Date</th>
		<th>uRate</th>
	</tr>
	<cfoutput query="getreviews">
		<tr>
			<td align="center">
				#review_id#
			</td>
			<td>
				#filmname#
			</td>
			<td>
				#starring#
			</td>
			<td align="center">
				#user_id#
			</td>
			<td align="center">
				#DateFormat(date, "mm/dd/yyyy")#
			</td>
			<td align="center">
				#DateFormat(releasedate, "mm/dd/yyyy")#
			</td>
			<td align="center">
				#urate#
			</td>
		</tr>
	</cfoutput>
</table>	
