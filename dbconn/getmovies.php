<?php

/*
* uMovie getmovies.php
*
* Martin Naismith - 1304494
* Last Revision 30th July 2014
* SQL revised for status = active
* 
* 17th July 2014
* setup pagination
* 
* 16th July 2014
* revised for uMovies
* 
* 27th June 2014
* Initial Build &
* test sql for brief information
*
*/

// setup variables for pagination
$pagesize = isset($pagesize) ? $pagesize : 4; // failsafe value
$currpage = isset($currpage) ? $currpage : 1; // if not set; set to 1
$skipitems = (($currpage - 1) * $pagesize);

// connect to a database remember to set which in dbconnect file
// returns $myconn
include 'dbconnect.php';

$where = isset($where) ? $where." AND u.status = 'active' "  : " WHERE u.status = 'active' ";
$order = isset($order) ? $order : "";
$limit = " LIMIT $skipitems , $pagesize ";

// get the total num returned from query
require_once 'numrows.php';

$numpages = ceil($numrows / $pagesize); // ceiling rounds up result


$sql = "SELECT r.review_id, r.filmname, r.category, r.starring, r.releasedate, 
				r.runtime, r.review, r.urate, r.image1
		FROM umovie_review r JOIN umovie_upload u
		ON r.review_id = u.review_id
		$where
		$order
		$limit";

$result = mysqli_query($myconn, $sql);

// confirm query has run successfully
if(!$result)
{
	// close connection & logout
	header("Location: ../logoutuser.php");
	exit();
}

$count = 0;
// output the available options
while ($row = mysqli_fetch_array($result))
	{
		
	$count++;
		{
		
		echo "<div id='item".$count."'>";
		
		?>
			<div style="position:absolute; left:10px; top:10px; width: 720px; height:130px;
					background-color:white;
					border-bottom: 2px solid black; 
					border-top: 1px solid black;">
			
				<img src="<?php echo $row['image1']; ?>" border="0" width="90" height="120"
						alt="" style="position:absolute; left:5px; top:5px;">
			
				<div style="position:absolute; left:105px; top:5px; width:400px; height:25px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C1">
						<?php echo $row['filmname']; ?>
					</span></p>
				</div>
				<div style="position:absolute; left:105px; top:35px; width:475px; height:20px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C2">
						<b>Starring&nbsp;:&nbsp;</b><?php echo $row['starring']; ?>
					</span></p>
				</div>
				
				<div style="position:absolute; left:105px; top:60px; width:475px; height:60px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C2">
						<?php echo substr( $row['review'], 0, 200 )." . . . <i>more.</i>"; ?>
					</span></p>
				</div>
				
				<div style="position:absolute; left:510px; top:10px; width:215px; height:20px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C2">
						<b>Released&nbsp;:&nbsp;<?php echo date('D, jS M Y',strtotime($row['releasedate'])); ?></b>
					</span></p>
				</div>
				
				<div style="position:absolute; left:600px; top:35px; width:120px; height:20px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C2">
						Category&nbsp;:&nbsp;<?php echo $row['category']; ?>
					</span></p>
				</div>
				<div style="position:absolute; left:600px; top:55px; width:120px; height:20px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C2">
						uMovie&nbsp;uRate&nbsp;:&nbsp;<?php echo $row['urate']; ?>
					</span></p>
				</div>
				<div style="position:absolute; left:600px; top:75px; width:120px; height:20px; overflow:hidden;">
					<p class="myNormal-P"><span class="myBody-C-C2">
						Runs&nbsp;:&nbsp;<?php echo $row['runtime']; ?>&nbsp;mins
					</span></p>
				</div>
				
				<button type="button" 
					style="position:absolute; left:595px; top:100px; width:120px; height:25px;"
					onclick="window.location.href='reviewdetail.php?id=<?php echo $row['review_id']; ?>'">
					Full&nbsp;Review&nbsp;&gt;&gt;
				</button>
				
			</div>
		<?php 
		echo "</div>";
	}
	if( $count > ($pagesize - 1) ) break;
}

if ($pageindex == "movielist"){
	// insert page links if required
	if ($numpages > 1){
		if ($pagesize > 4){
			?>
				<div style="position:absolute; left:10px; top:730px; width: 720px; height:40px;" >
					<p class="myBody-P" ><span class="myNormal-C" ><b>
						<?php include_once 'pagelist.php'; ?>
					</b></span></p>
				</div>
			<?php 
		} 
	}
}

if ($pageindex == "movielatest"){
	// insert page links if required
	if ($numpages > 1){
		if ($pagesize > 4){
			?>
				<div style="position:absolute; left:10px; top:730px; width: 720px; height:40px;" >
					<p class="myBody-P" ><span class="myNormal-C" ><b>
						<?php include_once 'pagelatest.php'; ?>
					</b></span></p>
				</div>
			<?php 
		} 
	}
}

// close connection
mysqli_close($myconn);

?>