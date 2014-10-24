<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TrainWatch!</title>
<link rel="stylesheet" href="css/reset.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>

<body>
	<div id = "outer"> <!-- every DIV from now own should have class="inner"-->
		<div class= "inner"> <!-- every item (img, text, etc) should have its individual encaseing div. Guarantees resizing. -->
			<div id="title" class="inner"> 
            	<img src="img/LOGO Train watch.png" class="innercontent"/>  <!-- every ITEM should have class="innercontent"-->
            </div>
            
            <!-- Insert data here. -->
			<div id="trainInfoContainer"></div>
<script type="text/javascript" src="javascript/request_data.js"></script>
<script type="text/javascript" src="javascript/liveTrains.js"></script>

<script type="text/javascript">
	requestData("javascript/data/trainInfo.html",callBack);
</script>
        </div>
    </div>
</body>
</html>
