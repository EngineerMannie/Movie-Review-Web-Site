<html>
	<head>
		
		<title> Upload Listing </title>
		
		

		<CFQUERY NAME="UploadListing" DATASOURCE="umovie2cf" >
			SELECT *
			FROM umovie_upload		
		</CFQUERY>
	
	
	</head>
	<body>	
	
		<div align = "center">
			<b>Upload Listing</b><br>
		<table border = "1">
		<tr>
		<td>
			Upload Id
		</td>
		<td>
			User Id
		</td>
		<td>
			Review Id
		</td>
		<td>
			Date
		</td>
		<td>
			Status
		</td>
		</tr>

		<CFOUTPUT QUERY = "UploadListing"> 
			<tr>
				<td> #upload_id# </td>
				<td> #user_id# </td> 
				<td> #review_id# </td>
				<td> #date# </td>
				<td> #status# </td>
			</tr>
		</CFOUTPUT>	
		
	</body>
</html>