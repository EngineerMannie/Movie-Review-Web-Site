<?php

/*
* movieApp dbconnect
*
* Martin Naismith - 1304494
* Last Revision 4th July 2014
* revised for uMovie
* 
* 06/06/2014
* Initial Build
* 
* Connect to database
* chose which......
*
*/

// make a connection to the server and assign the connection to a variable
//
// abertay myphpadmin database
$myconn = mysqli_connect('lochnagar.abertay.ac.uk', 'sql1304494', '9gHwFQIX', 'sql1304494');
// or
// localhost phpMyAdmin
// $myconn = mysqli_connect("localhost", "root", "", "umovie");
//
// confirm connection
if(mysqli_connect_errno()) { printf("could not connect! ERROR: %s\n", mysqli_connect_errno());
header("Location: ../loginerror.html");
exit();
}
//
// rem out testing 
// TESTING: echo(" - connected to Database.<br />");


?>