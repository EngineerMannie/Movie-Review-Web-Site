<!---
 *
 * uMovie getcomments.cfm
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

<cfquery name="getcomments" datasource="#session.dsn#">
	SELECT c.comment_id, r.filmname, c.user_id, c.date, c.comment, c.urate, up.status
	FROM umovie_comment c
	JOIN umovie_review r
		ON r.review_id = c.review_id
	JOIN umovie_user u
		ON c.user_id = u.user_id
	JOIN umovie_upload up
		ON r.review_id = up.review_id
	WHERE u.type IN ( 'admin', 'user' ) 
		AND c.status = 'pending'
		AND up.status = 'active'
	ORDER BY r.review_id, c.comment_id
</cfquery>

<table id="table_1" cellspacing="0" width="700px" cellpadding="0" border="1">
    <col style="width:11%;"></col>
    <col style="width:15%;"></col>
	<col style="width:7%;"></col>
    <col style="width:13%;"></col>
    <col style="width:47%;"></col>
    <col style="width:8%;"></col>
	<tr class="myBody-C-C1" style="height:45px; 
			vertical-align:middle; padding:1px 4px 1px 4px; background-color:#EBE6F2;">
		<th>Comment ID</th>
		<th>Film Name</th>
		<th>User ID</th>
		<th>Date</th>
		<th>Comment</th>
		<th>uRate</th>
	</tr>
	<cfoutput query="getcomments">
		<tr>
			<td align="center">
				#comment_id#
			</td>
			<td>
				#filmname#
			</td>
			<td align="center">
				#user_id#
			</td>
			<td align="center">
				#DateFormat(date, "dd/mm/yyyy")#
			</td>
			<td>
				#comment#
			</td>
			<td align="center">
				#urate#
			</td>
		</tr>
	</cfoutput>
</table>
		
		