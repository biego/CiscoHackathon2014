<html>
<head>
<?php
if($_POST)
{//$eid, $name, $source, $type, $pid
	addEvidence($_POST['eid'], $_POST['name'], $_POST['source'], $_POST['type'], $_POST['pid']);
	
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
				<form style="line-height: 3em;" method="post" action="<?php $_SERVER['PHP_SELF'] ?>
					<label for="ename">Name: </label>
                    	<input name="ename" id="ename" type="text"><br/>
                    
                    <label for="etype">File Type: </label>
                        <select id = "etype" name="etype">
                            <option value ="image">Image</option>
                            <option value ="video">Video</option>
                            <option value ="audio">Audio</option>
                        </select><br/>
                    
                    <label for="edoc">Document: </label>
                    	<input name="edoc" id="edoc" type="file"><br/>
                        
                    <label for="edesc">Description:</label>
                    	<input name="edesc" id="edesc" type="text"><br/>
                        
                    <input type="submit" value="Another" id="submitform">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Submit" id="submitform">
				</form>
			</div>
		</div>
	</div>
</body>

</html>
