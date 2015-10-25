<!DOCTYPE HTML>
<meta charset="utf-8">
<!--
 * umovie movielistcontent.php 
 *
 * Martin Naismith - 1304494
 * Last Revision 16th July 2014
 * revised for uMovies
 *
 * 3rd July 2014
 * Initial build.
 *
-->

<link rel="stylesheet" href="scripts/moviebreif.css" type="text/css" />

<?php 
$pagesize = 5;
$pageindex = "movielatest";
$tendaysago = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-10, date("Y")));
$where = " WHERE releasedate > '$tendaysago' ";
$order = " ORDER BY releasedate DESC ";
include 'dbconn/getmovies.php';
?>