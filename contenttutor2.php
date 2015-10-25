<?php
/*
 * uMovie2 conternttutor2.php
 * Martin Naismith - 1304494
 * Last Revision 30th July 2014
 * Initial build area 740 w by 835 h
 *  
 */

include 'tutorframe.php';
?>
<div id="content">
	<div
		style="position:absolute;
		left:5px;
		top:5px;
		width:740px;
		height:835px;
		background: transparent url('images/tutarea.png') no-repeat top left;
		overflow:hidden;">
		
		<p class="myBody-P">
			<span class="myBody-C-C0">Notes on How This Site Works - Tutor Page 2</span>
		</p>
		
		<p class="myNormal-P" style="position:absolute; left:20px; width:710px;">
			<span class="myBody-C-C2">
				The database was constructed on an Apache local server using the phpMyAdmin interface. 
				The four tables all have a unique primary key and are joined through link tables which
				refer to the 'umovie_review' and 'umovie_user' tables as foreign keys to their primary key.
				The resulting build was uploaded to the mayer server and the dbconnect file amended to 
				the required connection data.
			</span>
		</p>
		
		<div>
			<img src="images/database.png" border="0" width="577" height="422"
							alt="" style="position:absolute; left:90px; top:180px;">
		</div>
		
		<p class="myNormal-P" style="position:absolute; top:650px; left:20px; width:710px;">
			<span class="myBody-C-C2">
				The following usernames and passwords have been loaded to the database for easy access only for use 
				during development phase of the website.<br><br>
				
			</span>
		</p>
		<p class="myBody-P" style="position:absolute; top:695px; left:20px; width:710px;">
			<span class="myBody-C-C2">
				Admin Login . . . Username = <b>admin</b> . . . Password = <b>admin</b><br>
				User Login . . . . Username = <b>user</b> . . . . Password = <b>user</b>
			</span>
		</p>
		
		<div>
			<button type="button" 
				style="position:absolute; left:300px; top:770px; width:150px; height:28px;"
				onclick="window.location.href='admin/adminhome.cfm'">
				Admin&nbsp;Home&nbsp;Page
			</button>
		</div>
		
		<div>
			<button type="button" 
				style="position:absolute; left:50px; top:770px; width:120px; height:28px;"
				onclick="window.location.href='contenttutor1.php'">
				&lt;&lt;&nbsp;Prev&nbsp;Page
			</button>
		</div>
	</div>
</div>
</div>
</body>
</html>