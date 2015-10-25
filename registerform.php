<!--
 * 
 * Martin Naismith - 1304494
 *
 * Last Revision 16th July 2014
 * Tidy up format
 * 
 * 4th July 2014 
 * revised for umovie
 *
 * 27th June 2014
 * Revise Layout 26th & 27th
 *
 * Initial build. 23 March 2014
 *
-->

<div 
	style="position:absolute;
	left:5px;
	top:5px;
	width:740px;
	height:700px;">

	<div 
		style="position:absolute;
		left:50px;
		top:110px;
		width:630px;
		height:300px;
		background: transparent url('images/regareas.png') no-repeat top left;">
	    <div 
	    	style="position:absolute;
	    	left:119px;
	    	top:12px;
	    	width:205px;
	    	height:23px;
	    	white-space:nowrap;">
    		<div class="myBody-P">
            	<span class="myBody-C-C1">Required Information</span>
            </div>
	    </div>
	</div>
	<div 
		style="position:absolute;
		left:50px;
		top:410px;
		width:630px;
		height:290px;
		background: transparent url('images/regareas.png') no-repeat top left;">
		<div 
			style="position:absolute;
			left:120px;
			top:8px;
			width:201px;
			height:23px;
			white-space:nowrap;">
		    <div class="myBody-P">
            	<span class="myBody-C-C1">Optional Information</span>
		    </div>
		</div>
	</div>
	<form id="form_28" action="dbconn/registeruser.php" method="post" 
		target="_self" enctype="application/x-www-form-urlencoded" 
		style="margin:0;
		position:absolute;
		left:80px;
		top:160px;
		width:610px;
		height:525px;">
		
<!-- Required Stuff -->
		
		<div style="position:absolute;
			left:8px;
			top:0px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="fname">
					<span class="myBody-C-C2">First Name</span>
				</label>
			</p>
		</div>
		<input type="text" id="fname" name="fname" maxlength="20" placeholder="First name" required
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:0px; 
			width:148px;">
		<div 
			style="position:absolute;
			left:8px;
			top:30px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="lname">
					<span class="myBody-C-C2">Last Name</span>
				</label>
			</p>
		</div>
		<input type="text" id="lname" name="lname" maxlength="20" placeholder="Last name" required
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:30px; 
			width:148px;">
		<div style="position:absolute;
			left:8px;
			top:60px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="type">
					<span class="myBody-C-C2">Registration Type</span>
				</label>
			</p>
		</div>
		<select name="type" size="1"
			style="position:absolute; 
			left:175px; 
			top:60px;">
			<option value = "user" selected>User</option>
		</select>
		<div 
			style="position:absolute;
			left:8px;
			top:90px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="uname">
					<span class="myBody-C-C2">Username</span>
				</label>
			</p>
		</div>
		<input type="text" id="uname" name="uname" maxlength="20" placeholder="Username" required
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:90px; 
			width:148px;">
		<!-- TODO: set random password and email to client for initial login -->
		<!-- TODO: set new column 'oldpassword' in database initially null -->
		<div 
			style="position:absolute;
			left:8px;
			top:120px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="pword1">
					<span class="myBody-C-C2">Password</span>
				</label>
			</p>
		</div>
		<input type="password" id="pword1" name="pword1" maxlength="20" placeholder="Password" required
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:120px; 
			width:148px;">
		<div 
			style="position:absolute;
			left:8px;
			top:150px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="pword2">
					<span class="myBody-C-C2">Confirm password</span>
				</label>
			</p>
		</div>
		<input type="password" id="pword2" name="pword2" maxlength="20" placeholder="Confirm" required
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:150px; 
			width:147px;">
		<div 
			style="position:absolute;
			left:8px;
			top:180px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<span class="myBody-C-C2">Year of Birth</span>
			</p>
		</div>
		<select name="year" size="1"
			style="position:absolute; 
			left:175px; 
			top:180px;">
			
			    <?php 
			    	$thisyear = date(Y);
			    	echo $thisyear;
			    	foreach ( range (1920, $thisyear - 4) as $year ) {
						if ($year == 2000) {
							echo ('<option selected value = \"' . $year . '\">' . $year . '</option>');
						} else {
							echo ('<option value = \"' . $year . '\">' . $year . '</option>');
						}
					}
			    ?>
			    
		</select>
		<div 
			style="position:absolute;
			left:8px;
			top:210px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="email">
					<span class="myBody-C-C2">eMail address</span>
				</label>
			</p>
		</div>
		<input type="email" id="email" name="email" maxlength="40" placeholder="eMail address" required
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:210px; 
			width:224px;">.
			
<!-- optional Stuff -->
			
		<div 
			style="position:absolute;
			left:8px;
			top:290px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="address1">
					<span class="myBody-C-C2">Address Line 1</span>
				</label>
			</p>
		</div>
		<input type="text" id="address1" name="address1" maxlength="30" placeholder="Address Line 1" 
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:290px; 
			width:187px;">
		<div 
			style="position:absolute;
			left:8px;
			top:320px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="address2">
					<span class="myBody-C-C2">Address Line 2</span>
				</label>
			</p>
		</div>
		<input type="text" id="address2" name="address2" maxlength="30" placeholder="Address Line 2" 
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:320px; 
			width:187px;">
		<div 
			style="position:absolute;
			left:8px;
			top:350px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="town">
					<span class="myBody-C-C2">City / Town</span>
				</label>
			</p>
		</div>
		<input type="text" id="town" name="town" maxlength="20" placeholder="City / Town" 
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:350px; 
			width:147px;">
		<div 
			style="position:absolute;
			left:8px;
			top:380px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="state">
					<span class="myBody-C-C2">State / County</span>
				</label>
			</p>
		</div>
		<input type="text" id="state" name="state" maxlength="20" placeholder="State / County" 
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:380px; 
			width:145px;">
		<div 
			style="position:absolute;
			left:8px;
			top:410px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="county">
					<span class="myBody-C-C2">Country</span>
				</label>
			</p>
		</div>
		<input type="text" id="country" name="country" maxlength="20" placeholder="Country" 
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:410px; 
			width:144px;">
		<div 
			style="position:absolute;
			left:8px;
			top:440px;
			width:159px;
			height:18px;
			overflow:hidden;">
			<p class="myBody-P-P0">
				<label for="postcode">
					<span class="myBody-C-C2">Post code</span>
				</label>
			</p>
		</div>
		<input type="text" id="postcode" name="postcode" maxlength="15" placeholder="Post code" 
			onfocus="this.select();"
			style="position:absolute; 
			left:176px; 
			top:440px; 
			width:144px;">
			
		<a href="homepage.php">
			<input type="button" 
				style="position:absolute; 
				left:30px; 
				top:475px; 
				width:140px; 
				height:30px;" 
				name="cancel" 
				value="Cancel">
		</a>
		<input type="submit" 
			style="position:absolute; 
			left:176px; 
			top:475px; 
			width:187px; 
			height:30px;" 
			name="submit" 
			value="Sumbit">
	</form>
</div>