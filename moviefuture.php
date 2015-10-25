<!DOCTYPE HTML>
<meta charset="utf-8">
<!--
 * uMovie moviefuture.php
 * Martin Naismith - 1304494
 * Last Revision 17th July 2014
 * format revised
 *
 * 4th July 2014
 * revised for uMovie
 *
 * 3rd July 2014
 * added variables
 *
-->

<link rel="stylesheet" href="scripts/moviebreif.css" type="text/css" />

<?php 
$pagesize = 4;
$pageindex = "home";
$order = " ORDER BY releasedate DESC ";
$limit = " LIMIT 4";
include 'dbconn/getmovies.php'; 
?>