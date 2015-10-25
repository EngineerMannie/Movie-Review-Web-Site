<!DOCTYPE HTML>
<!---
 * 
 * uMovie login.cfm
 * Martin Naismith - 1304494
 * Last Revision 31st July 2014
 * Initial build.
 *
--->


<script type="text/javascript">
	function validate_form_login( form )
	{
		if( (ltrim(rtrim(form.elements['uname_in'].value,' '),' ') == "") && 
				( ltrim(rtrim(form.elements['pword_in'].value,' '),' ') == "" ) ) { 
			return true;
		} else if (ltrim(rtrim(form.elements['uname_in'].value,' '),' ') == "") {
			alert("Please give your username \nOr leave both fields clear to register"); 
			form.elements['uname_in'].focus(); 
			return false; 
		}
		if( ltrim(rtrim(form.elements['pword_in'].value,' '),' ') == "" ) { 
			alert("Please give your password \nOr leave both fields clear to register"); 
			form.elements['pword_in'].focus(); 
			return false;
		}
		return true;
	}
</script>

<form id="form_login" name="userinfo_2" onsubmit="return validate_form_login(this)" 
		action="loginuser.cfm" method="POST" target="" 
		style="margin:0; position:absolute; left:5px; top:5px; width:190px; height:110px;">
		
	<div style="position:absolute; left:8px; top:8px; width:69px; height:16px; overflow:hidden;">
		<p class="myNormal-P"><label for="edit_1">
			<span class="myNormal-C">Username</span>
		</label></p>
	</div>
	<input type="text" id="uname_in" name="uname_in" maxlength="50" value="" 
		style="position:absolute; left:75px; top:8px; width:104px;">
		
	<div style="position:absolute; left:8px; top:41px; width:67px; height:16px; overflow:hidden;">
		<p class="myNormal-P"><label for="edit_2">
			<span class="myNormal-C">Password</span>
		</label></p>
	</div>
	<input type="password" id="pword_in" name="pword_in" maxlength="25" value="" 
		style="position:absolute; left:75px; top:41px; width:104px;">
		
	<input type="submit" style="position:absolute; left:8px; top:76px;
		width:124px; height:25px;" name="loginRegister" value="Log-in / Register">
		
	<input type="reset" style="position:absolute; left:139px; top:76px; 
		width:47px; height:25px;" name="Reset" value="Clear">
		
</form>