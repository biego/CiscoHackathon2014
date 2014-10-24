<html>
<head>
<?php
include_once("connection/queries2.php"); 
		if($_POST)
		{
			addReport($_POST['pid'], $_POST['date'], $_POST['cid'], $_POST['location'], $_POST['description']);
						echo "<meta http-equiv=\"refresh\" content=\"0; url='pevidence.php'/\" />";
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
                <a href= "police.html"><img src="img/LOGO Train watch.png" class="innercontent"/></a>
            </div>
            
            <div class="inner formFormat">
			<center><h1>Report</h1></center> <!--Police officer ID-->
				<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
					<label for="pid">Report ID: </label>
                    	<input name="pid" id="pid" class="form-control" type="text"><br/>
                    <label for="cid">Crime Type: </label>
                        <select name="cid" id = "cid" class="form-control">
                            <option value ="1">Vandalism</option>
                            <option value ="2">Robbery</option>
                            <option value ="3">Drug Abuse</option>
                            <option value ="4">Metal Theft</option>
                        </select><br/>
                     <label for="date">Date: </label>
                     	<input name="date" id="date" class="form-control" type="text"><br/>
                        
                     <label for="location">Location: </label>
                     	<input name="location" id="location" class="form-control" type="text"><br/>
                     
                     <label for="description">Description: </label>
                     	<textarea name="description" id="description" class="form-control"></textarea><br/>
                        
                     <a href="police.php" class="btn btn-primary" style="width: 40%; height: 5%; margin-right: 18%; ">Back </a>
                     <input type="submit" value="Submit" id="submitform" class="btn btn-danger" style="width: 40%; height: 5%;">
				</form>
		</div>
		</div>
	</div>
	<script type="text/javascript" src="theme/javascript/javascript.js"></script>
</body>

</html>
