<?php
/*
*
* uMovie sideselect1.php
* Martin Naismith - 1304494
* Last Revision 22nd July 2014
* initial build
*
*/

$where = isset($where) ? $where : "";
//setcookie("where", $where, time() + 900, "/", "", 0);

// TESTING: echo 'cookie = '.$_COOKIE["where"];
// setcookie("where", "", time() - 1, "/", "", 0); // delete cookie
// TESTING: echo '<br />$where = '.$where;

if($where == ""){
	
	if($_POST["cbxcategory"] != ""){
		$category = $_POST['cbxcategory'];
		$where = "WHERE category = '$category'";
	}
	if($_POST["cbxgenre"] != ""){
		$genre = $_POST['cbxgenre'];
		if($where != ""){
			$where .= " AND genre LIKE '%$genre%'";
		} else {
			$where = "WHERE genre LIKE '%$genre%'";
		}
	}
	if($_POST["cbxdirector"] != ""){
		$director = $_POST["cbxdirector"];
		if($where != ""){
			$where .= " AND director LIKE '%$director%'";
		} else {
			$where = "WHERE director LIKE '%$director%'";
		}
	}
	if($_POST["cbxrating"] != ""){
		$rating = $_POST["cbxrating"];
		if($where != ""){
			$where .= " AND urate = $rating";
		} else {
			$where = "WHERE urate = $rating";
		}
	}
	
}
/*
if($where != ""){
	$_COOKIE['where'] = $where;
} else {
	$_COOKIE['where'] = "";
}
*/
// TESTING: echo 'cookie = '.$_COOKIE["where"];
// TESTING: echo '<br />$where = '.$where;
// setcookie("where", "", time() - 1, "/", "", 0); // delete cookie

include 'movielist.php';

?>