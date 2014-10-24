<?php  
 
$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "root";  //"root";
// Place the password for the MySQL database here 
$db_pass = "";  //"";
// Place the name for the MySQL database here 
$db_name = "ciscohackathon2014"; 
 

// Run the actual connection here  
$mysqli = new mysqli($db_host, $db_username, $db_pass, $db_name);
//$db_conn = mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
//mysql_select_db("$db_name") or die ("no database");     
 if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}


function dbQuery($query) 
{ 
	global $mysqli;
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__); 
    return $result; 
} 

function dbNumRows($result) 
{ 

    return $result->num_rows; 
} 

function dbFetchAssoc($result) 
{ 
    return $result->fetch_assoc(); 
} 

function EscapeString($s) {
	global $mysqli;
	return $mysqli->real_escape_string($s);	
}

?>