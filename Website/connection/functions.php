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
		echo "Date :"$report['date']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['describtion']."<br/>"; 
		echo "<br/>";
		echo "</div>";
	}
}

function showPoliceReports($pid)
{
	$res = getPoliceReport($pid);
	foreach ($res as $report)
	{
		echo "Case #".$report['pid']."<br/>";
		echo "Date :"$report['date']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['describtion']."<br/>"; 
		echo "<br/>";
	}
}

function showPoliceReportsLoc($location)
{
	$res = getPoliceReportLoc($location);
	foreach ($res as $report)
	{
		echo "Case #".$report['pid']."<br/>";
		echo "Date :"$report['date']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['describtion']."<br/>"; 
		echo "<br/>";
	}
}


function showCrimeType($cid)
{
	$res = getCrimeType($cid);
	foreach ($res as $report)
	{
		echo "Crime Type :".$report['cid']."<br/>";
		echo "Crime Name :"$report['name']."<br/>";
		echo "Urgency :".$report['cid']."<br/>";
		echo "<br/>";
	}
}


function showEvidence($pid)
{
	$res = getEvidence($pid);
	foreach ($res as $report)
	{
		echo "Evidence # :"$report['eid']."<br/>";
		echo "Case #".getPoliceReport($report['pid'])."<br/>";
		echo "Name : ".$report['name']."<br/>";
		echo "Source : ".$report['source']."<br/>";
		echo "Type : ".$report['type']."<br/>"; 
		echo "<br/>";
	}
}


function showAllAppInput()
{
	$res = getAllAppInput();
	foreach ($res as $report)
	{
		echo "Input #".$report['appid']."<br/>";
		echo "Case #".getPoliceReport($report['pid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['description']."<br/>"; 
		echo "User :".$report['userid']."<br/>";
		echo "<br/>".;
	}
}


function showAppInput($appid)
{
	$res = getAppInput($appid);
	foreach ($res as $report)
	{
		echo "Input #".$report['appid']."<br/>";
		echo "Case #".getPoliceReport($report['pid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['description']."<br/>"; 
		echo "User :".$report['userid']."<br/>";
		echo "<br/>".;
	}
}


function showAppInputLoc($location)
{
	$res = getAppInputLoc($location);
	foreach ($res as $report)
	{
		echo "Input #".$report['appid']."<br/>";
		echo "Case #".getPoliceReport($report['pid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Description: ".$report['description']."<br/>"; 
		echo "User :".$report['userid']."<br/>";
		echo "<br/>".;
	}
}

function showAllEmergencies()
{
	$res = getAllEmergencies();
	foreach ($res as $report)
	{
		echo "Emergency #".$report['eid']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Emergency Time: ".$report['time']."<br/>"; 
		echo "Reported From :".$report['phone_nr']."<br/>";
		echo "<br/>".;
	}
}

function showEmergencies($eid)
{
	$res = getEmergencies($eid);
	foreach ($res as $report)
	{
		echo "Emergency #".$report['eid']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Emergency Time: ".$report['time']."<br/>"; 
		echo "Reported From :".$report['phone_nr']."<br/>";
		echo "<br/>".;
	}
}

function showEmergenciesLoc($location)
{
	$res = getEmergenciesLoc($location);
	foreach ($res as $report)
	{
		echo "Emergency #".$report['eid']."<br/>";
		echo "Crime Type: ".getCrimeType($report['cid'])."<br/>";
		echo "Location: ".$report['location']."<br/>";
		echo "Emergency Time: ".$report['time']."<br/>"; 
		echo "Reported From :".$report['phone_nr']."<br/>";
		echo "<br/>".;
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