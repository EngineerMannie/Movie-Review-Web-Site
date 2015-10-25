<!--
 * 
 * uMovie logout.php
 * Martin Naismith - 1304494
 *
 * Last Revision 28th July 2014
 * Initial build.
 *
-->

<form id="form_logout" name="userinfo_2" action="logoutuser.php" 
		style="margin:0; position:absolute; left:5px; top:5px; width:190px; height:110px;">
		
	<div style="position:absolute; left:35px; top:8px; width:165px; height:20px; overflow:hidden;">
		<p class="myNormal-P"><label for="edit_1">
		<span class="myNormal-C">Login as : <?php echo $_SESSION['fname']; ?></span></label></p>
	</div>
	<div style="position:absolute; left:35px; top:41px; width:170px; height:20px;">
		<p class="myNormal-P"><label for="edit_2">
		<span class="myNormal-C">Your Rights : <?php 
			if ( $_SESSION['type'] == 'admin') echo 'Admin'; 
			if ( $_SESSION['type'] == 'user') echo 'User'; 
		?></span></label></p>
	</div>
	<input type="submit" name="logout" value="Log Out" 
		style="position:absolute; left:30px; top:76px; width:130px; height:25px;">
</form>