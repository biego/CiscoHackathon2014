<html>
<head>
<?php include_once("connection/queries2.php");
if($_POST)
{
	echo addEvidence($_POST['eid'], $_POST['ename'], $_POST['esource'], $_POST['etype'], $_POST['pid']);
	
	if($_POST['submitform'] == 'Another')
		echo "<meta http-equiv=\"refresh\" content=\"0; url='cevidence.php'/\" />";
	else
		echo "<meta http-equiv=\"refresh\" content=\"0; url='police.php'/\" />";
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="theme/javascript/javascript.js"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<title>TrainWatch!</title>
</head>	

<body>
	<div id = "outer">
		<div class= "inner">
			<div id="title" class="inner">
                <a href= "police.php"><img src="img/LOGO Train watch.png" class="innercontent"/></a>
            </div>
            
            <div class="inner formFormat">
			<h1>Evidence</h1>
				<form style="line-height: 3em;" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                	<label for="eid">Evidence ID: </label>
                    	<input name="eid" id="ename" class="form-control" type="text"><br/>
                        
					<label for="pid">Case ID: </label>
                    	<input name="pid" id="ename" class="form-control" type="text"><br/>
                    
                    
                    <label for="ename">Name: </label>
                    	<input name="ename" id="ename" class="form-control" type="text"><br/>
                    
                    
                    
                    <label for="etype">File Type: </label>
                        <select id = "etype" name="etype" class="form-control">
                            <option value ="image">Image</option>
                            <option value ="video">Video</option>
                            <option value ="audio">Audio</option>
                        </select><br/>
                    
                    <label for="esource">Document: </label>
                    	<input name="esource" id="esource" class="form-control" type="file"><br/>
                        
                    <label for="edesc">Description:</label>
                    	<input name="edesc" id="edesc" class="form-control" type="text"><br/>
                    
                    
                        
                    <input style="width: 27%;margin-right: 5%;" type="submit" value="Submit More Evidence" class="btn btn-warning" id="submitform"><a href="preport.php" class="btn btn-primary" style="width: 27%; margin-right: 7%; ">Back </a><input style="width: 27%; margin-right: 7%;" type="submit" value="Submit" class="btn btn-danger" id="submitform">
				</form>
			</div>
		</div>
	</div>
</body>

</html>
