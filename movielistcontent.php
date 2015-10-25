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
$where = isset($where) ? $where : "";

$pagesize = 5;
$pageindex = "movielist";
include 'dbconn/getmovies.php'; 
?>