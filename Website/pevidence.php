<html>
<head>
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
            
            <div id="input_boxes">
			<h1>Evidence</h1>
			<div id ="input_pid" class ="input_box"> <!--Police officer ID-->
				<form>
					Name: <input type="text">
				</form>
			</div>
			
			<div id = "input_type" class ="input_box"> <!--Type of crime  cid-->
			<!--<input type="file" name="datafile" size="40"> -->
				<label for="typeselect">File Type: </label>
				<select id = "inputselect">
					<option value ="image">Image</option>
					<option value ="video">Video</option>
					<option value ="audion">Audio</option>
				</select>
			</div>
			<div id ="input_pid" class ="input_box"> <!--Police officer ID-->
				<form>
					Document: <input type="file">
				</form>
			</div>
			<div id ="input_pid" class ="input_box"> <!--Police officer ID-->
				<form>
					Description: <input type="text">
				</form>
			</div>
			

		<div id= "back_button">
			<a href= "police.php">Back</a>
		</div>
		<div id="next_button"> 
			<a href="next">Submit</a>
		</div>

		</div>
		</div>
	</div>
</body>

</html>
