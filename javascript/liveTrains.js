

function trainTimes(s_stationId,c_date,n_trainNumbers,n_minutesBeforeCrime, s_goingToStId, s_hasBeenToId){
	if(typeof(n_trainNumbers) === 'undefined') n_trainNumbers = 5;
	if(typeof(n_minutesBeforeCrime) === 'undefined') n_minutesBeforeCrime = 10;
	if(typeof(s_goingToStId) === 'undefined') {
		s_goingToStId = "";
	}else{
		s_goingToStId = "&calling_at=" + s_goingToStId;
	}
	if(typeof(s_hasBeenToId) === 'undefined'){
		s_hasBeenToId = "";
	}else{
		s_hasBeenToId = "&called_at=" + s_hasBeenToId;
	}
	// c_date = new Date(c_date.getTime() + 60000 * n_minutesBeforeCrime);
	var s_time = c_date.toTimeString().substring(0,5);
	var s_date = c_date.toISOString().substring(0,10);
	var url = constructUrl(s_stationId,s_date,s_time,n_trainNumbers, s_goingToStId, s_hasBeenToId);
	alert(url);
}

function constructUrl(s_stationId,s_date,s_time,n_trainNumbers, s_goingToStId, s_hasBeenToId){
	var apiKey = "&api_key=" + "d9307fd91b0247c607e098d5effedc97&app_id=03bf8009";
	// var apiKey = " ";
	return "http://transportapi.com/v3/uk/train/station/" + s_stationId + "/" + s_date + "/"+ s_time + "/timetable.html?limit=" + n_trainNumbers+ s_goingToStId + s_hasBeenToId + apiKey;
};

function callBack(xHTML){
	alert(xHTML.responseText)
}