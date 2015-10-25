/*
window.onload = testerfunction;

function testerfunction(){
	alert ("JavaScript is loaded");
}
*/	


function ValidateEmail(a){
	var b=/^(.+)@(.+)$/;
	var c="(\"[^\"]*\")";
	var d=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
	var e="\[^\\s\\(\\)><@,;:\\\\\\\"\\.\\[\\]\]+";
	var f="("+e+"|"+c+")";
	var g=new RegExp("^"+f+"(\\."+f+")*$");
	var h=new RegExp("^"+e+"(\\."+e+")*$");
	var j=new RegExp("^"+e+"$");
	var k=a.match(b);
	if(k===null){
		return false
	}
	var l=k[1];
	var m=k[2];
	var i;
	for(i=0;i<l.length;i++){
		if(l.charCodeAt(i)>127){
			return false
		}
	}if(l.match(g)===null){
		return false
	}
	for(i=0;i<m.length;i++){
		if(m.charCodeAt(i)>127){
			return false
		}
	}
	var n=m.match(d);
	if(n!==null){
		for(i=1;i<=4;i++){
			if(n>255){
				return false
			}
		}
	}
	else{
		var o=m.split(".");
		var p=o.length;
		if(p<2){
			return false
		}
		for(i=0;i<p;i++){
			if(o[i].search(j)==-1){
				return false
			}
		}
	}
	return true
}

function ltrim(a,b){
	b=b||"\\s";
	return a.replace(new RegExp("^["+b+"]+","g"),"")
}

function rtrim(a,b){
	b=b||"\\s";
	return a.replace(new RegExp("["+b+"]+$","g"),"")
}

//- - - - - - For Registration Page - - - - - - -

function setFocusR(){
	document.getElementById("fname").focus;
}


function checkUserInput(){
	
	
	
	// check fname input
	
	var $Fname=document.getElementById("fname");
	var expFname=/[A-Z]{1}[a-z]{1,19}/;
	var chkFname=$Fname.value;
	if ((expFname.test(chkFname))==false)
	{
		alert("Please re-enter your First Name (Intial Caps) and Press SUBMIT.");
		document.getElementById("Fname").select();
		return false;
	};
	
	// check lname input
	
	var $Lname=document.getElementById("lname");
	var expLname=/[A-Z]{1}[a-z]{1,19}/;
	var chkLname=$Lname.value;
	if ((expLname.test(chkLname))==false)
	{
		alert("Please re-enter your Last Name (Initial Caps) and press SUBMIT.");
		document.getElementById("Lname").select();
		return false;
	};
	
	// check passwords input
	
	var $Pword1=document.getElementById("pword1");
	var chkPword1=$Pword1.value;
	var $Pword2=document.getElementById("pword2");
	var chkPword2=$Pword2.value;
	var PWmsg1="Please re-enter your PASSWORD TWICE\n(Min.8 Max.20 Chrs.) and press SUBMIT.";
	var PWmsg2="Your passwords entered do not match!\nPlease Re-enter and Press SUBMIT.";
	var PWMSG=""
	while (((chkPword1 == chkPword2)==false) || (chkPword1.length < 8))
	{
		if ((chkPword1 == chkPword2)==false)
		{
			PWMSG=PWmsg2;
		}
		else
		{
			PWMSG=PWmsg1;
		};
		alert(PWMSG);
		document.getElementById("pword1").select();
		return false;
	};
	
	// check address line 1 input
	
	var $Add1=document.getElementById("address1");
	var expAdd1=/[A-Z]{1}[a-z]{1,29}/;
	var chkAdd1=$Add1.value;
	if ((expAdd1.test(chkAdd1))==false)
	{
		alert("Please re-enter your Address (Initial Caps) and press SUBMIT.");
		document.getElementById("address1").select();
		return false;
	};
	
	// check address line 2 input
	
	var $Add2=document.getElementById("address2");
	var expAdd2=/[A-Z]{1}[a-z]{1,29}/;
	var chkAdd2=$Add2.value;
	if ((expAdd2.test(chkAdd2))==false)
	{
		alert("Please re-enter your Address (Initial Caps) and press SUBMIT.");
		document.getElementById("address2").select();
		return false;
	};
	
	// check town input
	
	var $Town=document.getElementById("town");
	var expTown=/[A-Z]{1}[a-z]{1,19}/;
	var chkTown=$Town.value;
	if ((expTown.test(chkTown))==false)
	{
		alert("Please re-enter your Town (Initial Caps) and press SUBMIT.");
		document.getElementById("town").select();
		return false;
	};
	
	// check state input
	
	var $State=document.getElementById("state");
	var expState=/[A-Z]{1}[a-z]{1,19}/;
	var chkState=$State.value;
	if ((expState.test(chkState))==false)
	{
		alert("Please re-enter your State / County (Initial Caps) and press SUBMIT.");
		document.getElementById("state").select();
		return false;
	};
	
	// check country input
	
	var $Country=document.getElementById("country");
	var expCountry=/[A-Z]{1}[a-z]{1,19}/;
	var chkCountry=$Country.value;
	if ((expCounty.test(chkCountry))==false)
		{
		alert("Please re-enter your Country (Initial Caps) and press SUBMIT.");
		document.getElementById("country").select();
		return false;
	};
	
	// check postcode input
	
	var $Pcode=document.getElementById("postcode");
	var expPcode=/[A-Z]{1,2}[0-9]{1,2}\s[0-9]{1,2}[A-Z]{1,2}/;
	var chkPcode=$Pcode.value;
	if ((expPcode.test(chkPcode))==false)
		{
		alert("Please re-enter your POST CODE (AB12 34CD) and press SUBMIT.");
		document.getElementById("postcode").select();
		return false;
	};
	return true;
}




//- - - - - -  End of Registration Page - - - - - - 