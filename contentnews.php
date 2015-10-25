<?php
/*
 * uMovie2 conterntnews.php
 * Martin Naismith - 1304494
 *
 * Last Revision 23rd July 2014
 * Initial build
 * 
 */
?>

<form>
	<select onchange="showRSS(this.value)">
	<option value="">Select an RSS-feed:</option>
	<option value="hollywood">Hollywood Reporter</option>
	<option value="empire">Empire News</option>
	<option value="cinemablend">Cinema Blend</option>
	</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>