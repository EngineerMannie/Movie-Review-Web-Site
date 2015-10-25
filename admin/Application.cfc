<cfcomponent displayname="Application" output="false">
<!---
 * 
 * uMovie application.cfc
 * Martin Naismith - 1304494
 * Last Revision 7th Aug 2014
 * Initial build.
 *
--->

	// the application start page
	<cfset this.name = "test.cfm" />
	<cfset this.clientManagement = true />
	<cfset this.clientStorage = "cookie" />
	<cfset this.loginStorage = "session" />
	<cfset this.sessionManagement = true />
	// create a fife minute session length
	<cfset this.sessionTimeout = createTimeSpan(0, 0, 5, 0) />
	<cfset this.setClientCookies = true />
	<cfset this.setDomainCookies = false />
	<cfset this.scriptprotect = false />
	<!---> Uni database connection
	<cfset this.dsn = "sql1304494" />
	<--->
	<!---> Local database connection 
	<cfset dsn = "umovie2cf" />
	<--->
	
	<cfif structKeyExists( url, "logout" )>
		<cfset this.sessionTimeout = createTimeSpan( 0, 0, 0, 1 ) />
	</cfif>
			
	<!--- define user is logged out by default --->
	<CFPARAM NAME="session.allowin" DEFAULT="false" />

	<!--- define user id to zero by default --->
	<CFPARAM NAME="session.user_id" DEFAULT="0" />
 
	<cfif session.allowin NEQ "true">
		<cfif  ListLast(CGI.SCRIPT_NAME, "/") EQ "login.cfm">
			<cfelse>
			<!--- user is not logged in --->
			<script>
				alert("You must login to access this area!");
				// self.location="login.cfm";
			</script>
		</cfif>
	</cfif>
	
	<cffunction name="onApplicationStart" output="false" >
		<cfscript>
			// create default application stat structures and pre-request values
			application._stat = structnew();
			application._stat.started = now();
			application._stat.thisHit = now();
			application._stat.lastHit = now();
			application._stat.hits = 0;
			application._stat.sessions = 0;
		</cfscript>
	</cffunction>
	
	<cffunction name="onSessionStart" output="false" >
		<cfscript>
			// create default session stat structures and pre-request values
			session._stat.started = now();
			session._stat.thisHit = now();
			session._lastHit = now();
			session._stat.hits = 0;
			// at the start of each session, update count for application stat
			application._stat.sessions += 1;
		</cfscript>
	</cffunction>
	
	<cffunction name="onRequestStart" access="public" returntype="boolean" output="false" >
		<cfargument name="thePage" type="string" required="true" >
		
			<!--- Define the local scope. --->
	        <cfset var local = {} />
			<cfif structKeyExists( url, "logout" )>
				<cflocation url="adminhome.cfm" addtoken="false" />
			</cfif>
		
		
			<cfscript>
				var myReturn = true;
				// code to block pages starting with an underscore
				if(left(listlast(arguments.thePage,"/"),1) EQ "_"){
					myReturn = false;
				}
				// update application stat on each request
				application._stat.thisHit = now();
				application._stat.lastHit = application._stat.thisHit;
				application._stat.hits += 1;
				// update session stat on each request
				session._stat.thisHit = now();
				session._stat.lastHit = session._stat.thisHit;
				session._stat.hits += 1;
			</cfscript>
		<cfreturn myReturn />
	</cffunction>
	
	<cffunction name="onRequestEnd" returntype="void" output="false" >
		<cfargument name="thePage" type="string" required="true" >
	</cffunction>
	
	<cffunction name="onSessionEnd" returnType="void" output="false" >
		<cfargument name="SessionScope" type="struct" required="true" >
		<cfargument name="ApplicationScope" type="struct" required="false" >
		<cfscript>
			// Note: use the variable scope below to access
			// the application structure inside this method.
			arguments.ApplicationScope._stat.sessions -= 1;
		</cfscript>
	</cffunction>
	
	<cffunction name="onApplicationEnd" returnType="void" output="false" >
		<cfargument name="applicationScope" required="true" >
	</cffunction>
	
	<cffunction name="onError" returntype="void" output="true" >
		<cfargument name="exception" required="true" >
		<cfargument name="eventname" type="string" required="true" >
		<cfif arguments.eventName NEQ "" >
			<cfdump var="#arguments.exception#" label="Application core exception" >
		<cfelse>
			<cfdump var="#arguments.exception#" label="Application exception" >
		</cfif>
	</cffunction>
	
</cfcomponent>