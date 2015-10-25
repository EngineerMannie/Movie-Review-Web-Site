<!---
 *
 * Martin Naismith - 1304494
 * Last Revision 7th Aug 2014
 * Initial Build
 * 
 --->
<!DOCTYPE HTML>
<meta charset="utf-8">
<head>
<cftry>
	<cfif session.type NEQ 'admin'>
		<cflocation url="adminhome.cfm">
	</cfif>
	<cfcatch>
		<cflocation url="adminhome.cfm">
	</cfcatch>
</cftry>
	<!---> function copied from http://speeves.erikin.com/2009/06/coldfusion-replace-html-ized-characters.html<--->
	<cffunction name="HtmlUnEditFormat" access="public" returntype="string" 
				output="no" displayname="HtmlUnEditFormat" hint="Undo escaped characters">
      <cfargument name="str" type="string" required="Yes" />
      <cfscript>
         var lEntities = "&##xE7;,&##xF4;,&##xE2;,&Icirc;,&Ccedil;,&Egrave;,&Oacute;,&Ecirc;,
         	&OElig,&Acirc;,&laquo;,&raquo;,&Agrave;,&Eacute;,&le;,&yacute;,&chi;,&sum;,&prime;,
         	&yuml;,&sim;,&beta;,&lceil;,&ntilde;,&szlig;,&bdquo;,&acute;,&middot;,&ndash;,&sigmaf;,
         	&reg;,&dagger;,&oplus;,&otilde;,&eta;,&rceil;,&oacute;,&shy;,&gt;,&phi;,&ang;,&rlm;,
         	&alpha;,&cap;,&darr;,&upsilon;,&image;,&sup3;,&rho;,&eacute;,&sup1;,&lt;,&cent;,&cedil;,
         	&pi;,&sup;,&divide;,&fnof;,&iquest;,&ecirc;,&ensp;,&empty;,&forall;,&emsp;,&gamma;,
         	&iexcl;,&oslash;,&not;,&agrave;,&eth;,&alefsym;,&ordm;,&psi;,&otimes;,&delta;,&ouml;,
         	&deg;,&cong;,&ordf;,&lsaquo;,&clubs;,&acirc;,&ograve;,&iuml;,&diams;,&aelig;,&and;,
         	&loz;,&egrave;,&frac34;,&amp;,&nsub;,&nu;,&ldquo;,&isin;,&ccedil;,&circ;,&copy;,&aacute;,
         	&sect;,&mdash;,&euml;,&kappa;,&notin;,&lfloor;,&ge;,&igrave;,&harr;,&lowast;,&ocirc;,
         	&infin;,&brvbar;,&int;,&macr;,&frac12;,&curren;,&asymp;,&lambda;,&frasl;,&lsquo;,&hellip;,
         	&oelig;,&pound;,&hearts;,&minus;,&atilde;,&epsilon;,&nabla;,&exist;,&auml;,&mu;,&frac14;,
         	&nbsp;,&equiv;,&bull;,&larr;,&laquo;,&oline;,&or;,&euro;,&micro;,&ne;,&cup;,&aring;,
         	&iota;,&iacute;,&perp;,&para;,&rarr;,&raquo;,&ucirc;,&omicron;,&sbquo;,&thetasym;,&ni;,
         	&part;,&rdquo;,&weierp;,&permil;,&sup2;,&sigma;,&sdot;,&scaron;,&yen;,&xi;,&plusmn;,&real;,
         	&thorn;,&rang;,&ugrave;,&radic;,&zwj;,&there4;,&uarr;,&times;,&thinsp;,&theta;,&rfloor;,
         	&sub;,&supe;,&uuml;,&rsquo;,&zeta;,&trade;,&icirc;,&piv;,&zwnj;,&lang;,&tilde;,&uacute;,
         	&uml;,&prop;,&upsih;,&omega;,&crarr;,&tau;,&sube;,&rsaquo;,&prod;,&quot;,&lrm;,&spades;";
         var lEntitiesChars = "ç,ô,â,Î,Ç,È,Ó,Ê,Œ,Â,«,»,À,É,?,ý,?,?,?,Ÿ,?,?,?,ñ,ß,„,´,·,–,?,®,‡,?,õ,?,
         	?,ó,­,>,?,?,?,?,?,?,?,?,³,?,é,¹,<,¢,¸,?,?,÷,ƒ,¿,ê,?,?,?,?,?,¡,ø,¬,à,ð,?,º,?,?,?,ö,°,?,ª,‹,
         	?,â,ò,ï,?,æ,?,?,è,¾,&,?,?,“,?,ç,ˆ,©,á,§,—,ë,?,?,?,?,ì,?,?,ô,?,¦,?,¯,½,¤,?,?,?,‘,…,œ,£,?,?,
         	ã,?,?,?,ä,?,¼, ,?,•,?,«,?,?,€,µ,?,?,å,?,í,?,¶,?,»,û,?,‚,?,?,?,”,?,‰,²,?,?,š,¥,?,±,?,þ,?,ù,
         	?,?,?,?,×,?,?,?,?,?,ü,’,?,™,î,?,?,?,˜,ú,¨,?,?,?,?,?,?,›,?,"",?,?";
      </cfscript>
      <cfreturn ReplaceList(arguments.str, lEntities, lEntitiesChars) />
   	</cffunction>

	<cfset htmlstringreview = HtmlUnEditFormat(#form.review#)>
	<cfset inputreleasedate = #CreateOdbcDateTime(Form.releasedate)#>
	
	<!--->TESTING<cfset sql = "SET filmname = '#Form.filmname#',
			genre = '#Form.genre#',
			category = '#Form.cbxcategory#', 
			starring = '#Form.starring#',
			director = '#Form.director#',
			releasedate = #inputreleasedate#,
			runtime = '#form.runtime#',
			review = '#htmlstringreview#',
			image1 = '#Form.image1#',
			image2 = '#Form.image2#'
		WHERE review_#session.item#">
		
	<cfset sql = "Update umovie_upload
		SET status = '#Form.cbxstatus#'
		WHERE review_#session.item#"><--->
		
	<cfquery name="updatereview" datasource="#session.dsn#"> 
		UPDATE umovie_review
		SET filmname = '#Form.filmname#',
			genre = '#Form.genre#',
			category = '#Form.cbxcategory#', 
			starring = '#Form.starring#',
			director = '#Form.director#',
			releasedate = #inputreleasedate#,
			runtime = '#form.runtime#',
			review = '#htmlstringreview#',
			image1 = '#Form.image1#',
			image2 = '#Form.image2#'
		WHERE review_#session.item#
	</cfquery>
	
	<cfquery name="updateupload" datasource="#session.dsn#">	
		Update umovie_upload
		SET status = '#Form.cbxstatus#'
		WHERE review_#session.item#
	</cfquery>

</head>
<body>
	
<!--->	TESTING
	<cfoutput>
		sql = #sql#<br>
		filmname #form.filmname#<br>
		category #form.cbxcategory#<br>
		genre #form.genre#<br>
		director #form.director#<br>
		releasedate #inputreleasedate#<br>
		starring #form.starring#<br>
		runtime #form.runtime#<br>
		review #htmlstringreview#<br>
		image1 #form.image1#<br>
		image2 #form.image2#<br>
		status #form.cbxstatus#<br>
		item #session.item#
	</cfoutput>
<--->
<CFIF IsDefined("updatereview.RecordCount")>
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