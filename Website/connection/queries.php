<?php
include_once("connection/db.php"); 

date_default_timezone_set ("Europe/London");
$curr_date = date("Y-m-d H:i:s");


function getAllPoliceReports()
{
	$sql = "SELECT * FROM police_report";
	$res = dbQuery($sql);
	return $res;
}

function getPoliceReport($pid)
{
	$sql = "SELECT * FROM police_report WHERE pid = '$pid'";
	$res = dbQuery($sql);
	return $res;
}

function getPoliceReportLoc($location)
{
	$sql = "SELECT * FROM police_report WHERE location = '$location'";
	$res = dbQuery($sql);
	return $res;
}


function getCrimeType($cid)
{
	$sql = "SELECT * FROM Crime_type WHERE cid = '$cid'";
	$res = dbQuery($sql);
	
	return $res;
}


function getEvidence($pid)
{
	$sql = "SELECT * FROM evidence WHERE pid = '$pid'";
	$res = dbQuery($sql);
	return $res;
}


function getAllAppInput()
{	
	$sql = "SELECT * FROM App_input";
	$res = dbQuery($sql);
	return $res;
}

function getAppInput($appid)
{
	$sql = "SELECT * FROM App_input WHERE appid = '$appid'";
	$res = dbQuery($sql);
	return $res;
}

function getAppInputLoc($location)
{
	$sql = "SELECT * FROM App_input WHERE location = '$location'";
		$res = dbQuery($sql);
	return $res;
}

function getAllEmergencies()
{	
	$sql = "SELECT * FROM Emergencies";
	$res = dbQuery($sql);
	return $res;
}

function getEmergencies($eid)
{
	$sql = "SELECT * FROM Emergencies WHERE eid = '$eid'";
	$res = dbQuery($sql);
	return $res;
}

function getEmergenciesLoc($location)
{
	$sql = "SELECT * FROM Emergencies WHERE location = '$location'";
		$res = dbQuery($sql);
	return $res;
}


function selectAllPosts()
{
	$sql = "SELECT * FROM post ORDER BY post_date DESC, post_id DESC";
	$res = dbQuery($sql);
	
	while($row = mysqli_fetch_array($res))
	{
		
		echo "<tr>";
        echo "<td class=\"tableid\">".$row['post_id']."</td>";
        echo "<td class=\"tablename\"><a href=\"editPost.php?id=".$row['post_id']."\">".$row['post_name']."</a></td>";
		echo "<td class=\"tabledate\">".$row['post_date']."</td>";
        echo "</tr>";
		echo "<tr>";
        echo "<td colspan=\"3\" class=\"tablecontent\">".$row['post_content']."</td>";
        echo "</tr>";
		
	}
	return -1;
}

function addPost($post_name, $post_desc, $post_img, $post_content, $status, $tag)
{
	// escape variables for security
	$post_nameE = $post_name;
	$post_descE = $post_desc;
	$post_dateE = date("Y-m-d H:i:s");
	$post_contentE = $post_content;
	$statusE = $status;
	$tagE = $tag;
	
	$sql="INSERT INTO post (post_id, post_name, post_desc, post_date, post_img, post_content, status, tags)
	VALUES (DEFAULT, '$post_nameE', '$post_desc', '$post_dateE', '$post_content', '$post_contentE', '$statusE', '$tagE' )";
	$res = dbQuery($sql);
	
	if ($res)
		echo "1 record added";
	else
		die('Error: ' . mysqli_error($res));
	
}

function editPost($post_id, $post_name, $post_desc, $post_img, $post_content, $status, $tag)
{
	// escape variables for security
	$post_idE = EscapeString($post_id);
	$post_nameE = EscapeString($post_name);
	$post_descE = EscapeString($post_desc);
	$post_contentE = EscapeString($post_content);
	$statusE = EscapeString($status);
	$tagE = EscapeString($tag);
	
	$sql="UPDATE post SET post_name = '$post_nameE', post_desc = '$post_descE', post_content = '$post_contentE', status = '$statusE', tags = '$tagE', post_img='$post_img' WHERE post_id = '$post_idE'";
	$res = dbQuery($sql);
	
	if ($res)
		echo "1 record edited";
	else
		die('Error: ' . mysqli_error($res));
}

function deletePost($post_id)
{
	// escape variables for security
	$post_idE = EscapeString($post_id);
	$post_nameE = EscapeString($post_name);
	$post_descE = EscapeString($post_desc);
	$post_dateE = date("Y-m-d H:i:s");
	$post_contentE = EscapeString($post_content);
	$statusE = EscapeString($status);
	$tagE = EscapeString($tag);
	
	$sql="UPDATE post SET status = 'removed' WHERE post_id = '$post_idE'";
	$res = dbQuery($sql);
	
	if ($res)
		echo "1 record removed";
	else
		die('Error: ' . mysqli_error($res));
}

?>