<?php
session_start();
include_once("queries.php"); 

function showAllPoliceReports()
{
	$res = getAllPoliceReports();
	foreach ($res as $report)
	{
		echo '<div class="feed">';
		echo "Case #".$report['pid']."<br/>";
		echo $report['date']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['describtion']."<br/>"; 
		echo "<br/>";
		echo "</div>";
	}
}

function showAllRelatedEvidence($pid)
{
	$res = getEvidence($pid);
	
	foreach ($res as $evidence)
	{
		echo "Evidence #".$evidence['eid']."<br/>";
		echo "Item: ".$evidence['name']."<br/>";
		echo "Type: ".$evidence['type']."<br/>";
		echo "Media: ".$evidence['source']."<br/>";
		echo "<br/>";
	}
}

?>