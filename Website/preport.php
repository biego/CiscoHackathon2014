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
			<h1>Report</h1>
			<div id ="input_pid" class ="input_box"> <!--Police officer ID-->
				<form>
					Police Officer ID: <input type="text">
				</form>
			</div>

			<div id = "input_type" class ="input_box"> <!--Type of crime  cid-->
				<label for="crimeselect">Crime Type: </label>
				<select id = "crimeselect">
					<option value ="vandalism">Vandalism</option>
					<option value ="drunk and disorderly">Drunk and Disorderly</option>
					<option value ="robbery and theft">Robbery and Theft</option>
					<option value ="metal theft">Metal Theft</option>
				</select>
			</div>

			<div id ="input_date" class ="input_box"> <!--Date of crime-->
				<form>
					Date: <input type="text">
				</form>
			</div>

			<div id ="input_location" class ="input_box"> <!--Location-->
				<form>
					Location: <input type="text">
				</form>
			</div>

			<div id ="input_description" class ="input_box"> <!--Description of crime-->
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
	<script type="text/javascript" src="theme/javascript/javascript.js"></script>
</body>

</html>