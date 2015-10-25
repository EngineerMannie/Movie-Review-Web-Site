<?php

$pagelinks = "";

// if this page is not the first page generate PREVIOUS link
if ($currpage > 1){
	$pagelinks .= ' <a href="getlatestpage.php?' .
			'&page=' . ($currpage - 1) .	'">&nbsp;PREV</a>';
} else {
	// if previous link required
	$pagelinks .= ' ';
}

// loop through page nums and make links
for ($i = 1; $i <= $numpages; $i++){
	if($currpage == $i){
		$pagelinks .= ' ' . $i; 
	} else {
		
		$pagelinks .= ' <a href="getlatestpage.php?' .
			'&page=' . $i .	'">&nbsp; ' . $i . ' &nbsp;</a>';
	}
}
	
// if $currpage not the last page generate next link
if($currpage < $numpages){
	$pagelinks .= ' <a href="getlatestpage.php?' .
			'&page=' . ($currpage + 1) .	'">&nbsp;NEXT</a>';
} else {
	// if next link required
	$pagelinks .= ' ';
}

// display the links
echo $pagelinks;

?>