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
            
            <div id="allfeed"><?php include_once("connection/functions.php"); showAllPoliceReports(); ?></div>
			
		</div>
	</div>
	<script type="text/javascript" src="theme/javascript/javascript.js"></script>
</body>

</html>