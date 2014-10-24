<?php
include_once("connection/db.php"); 

date_default_timezone_set ("Europe/London");
$curr_date = date("Y-m-d H:i:s");

function addReport($pid, $date, $cid, $location, $description)
{
	// escape variables for security
	$pidE = mysql_escape_string ($pid);
	$dateE = mysql_escape_string ($date);
	$cidE = mysql_escape_string ($cid);
	$locationE = mysql_escape_string ($location);
	$description = mysql_escape_string ($description);
	
	$sql="INSERT INTO police_report (pid, date, cid, location, describtion)
	VALUES ('$pidE', '$dateE', '$cidE', '$locationE', '$description')";
	$res = dbQuery($sql);
	
	if ($res)
		echo "1 record added";
	else
		die('Error: ' . mysqli_error($res));
}

function addEvidence($eid, $name, $source, $type, $pid)
{
	// escape variables for security
	$eidE = mysql_escape_string ($eid);
	$nameE = mysql_escape_string ($name);
	$sourceE = mysql_escape_string ($source);
	$typeE = mysql_escape_string ($type);
	$pid = mysql_escape_string ($pid);
	
	$sql="INSERT INTO evidence (eid, name, source, type, pid)
	VALUES ('$eid', '$name', '$source', '$type', '$pid')";
	$res = dbQuery($sql);
	
	if ($res)
		echo "1 record added";
	else
		die('Error: ' . mysqli_error($res));
}

?>