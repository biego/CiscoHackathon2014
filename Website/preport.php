<html>
<head>
<?php
include_once("connection/queries2.php"); 
		if($_POST)
		{
			addReport($_POST['pid'], $_POST['date'], $_POST['cid'], $_POST['location'], $_POST['description']);
		}
			
?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="theme/javascript/javascript.js"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<title>TrainWatch!</title>
</head>	

<body>
	<div id = "outer">
		<div class= "inner">
			<div id="title" class="inner">
                <a href= "police.html"><img src="img/LOGO Train watch.png" class="innercontent"/></a>
            </div>
            
            <div id="reportform" class="inner">
			<h1>Report</h1> <!--Police officer ID-->
				<form style="line-height: 3em;" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
					<label for="pid">Report ID: </label>
                    	<input name="pid" id="pid" type="text"><br/>
                    <label for="cid">Crime Type: </label>
                        <select name="cid" id = "cid">
                            <option value ="1">Vandalism</option>
                            <option value ="2">Robbery</option>
                            <option value ="3">Drug Abuse</option>
                            <option value ="4">Metal Theft</option>
                        </select><br/>
                     <label for="date">Date: </label>
                     	<input name="date" id="date" type="text"><br/>
                        
                     <label for="location">Location: </label>
                     	<input name="location" id="location" type="text"><br/>
                     
                     <label for="description">Description: </label>
                     	<textarea name="description" id="description"></textarea><br/>
                        
                     <input type="submit" value="Submit" id="submitform">
				</form>
		</div>
		</div>
	</div>
	<script type="text/javascript" src="theme/javascript/javascript.js"></script>
</body>

</html>
