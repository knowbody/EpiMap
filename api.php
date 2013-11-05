<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript'>

var newArray=new Array();
//$.ajax({
//type : "GET",
//dataType : "jsonp",
//url : "https://search.twitter.com/search.json?q=flu&rpp=40&include_entities=true&result_type=mixed",
//success: function(obj){
//$.each(obj.results, function(i, tweet) {

//var url = "http://geoapi.tomnod.com/geolocate/" + tweet.id_str;
//console.log(url);

//newArray.push(url);


//})
//}
//}
//);




</script>


<?php
$newArray = array("http://geoapi.tomnod.com/geolocate/320705222546694144","http://geoapi.tomnod.com/geolocate/320572039893237761","http://geoapi.tomnod.com/geolocate/320786193124057088"
//, "http://geoapi.tomnod.com/geolocate/320785312815128577"
//, "http://geoapi.tomnod.com/geolocate/320785320167735296"
//, "http://geoapi.tomnod.com/geolocate/320785325603553280"
//, "http://geoapi.tomnod.com/geolocate/320785333795053569"
//, "http://geoapi.tomnod.com/geolocate/320785336236134400"
//, "http://geoapi.tomnod.com/geolocate/320785338949828609"
, "http://geoapi.tomnod.com/geolocate/320785340266860545"
, "http://geoapi.tomnod.com/geolocate/320785351130103808"
//, "http://geoapi.tomnod.com/geolocate/320785358268796928"


//, "http://geoapi.tomnod.com/geolocate/320785416703860737"
//, "http://geoapi.tomnod.com/geolocate/320785566629253120"
//, "http://geoapi.tomnod.com/geolocate/320785586292150273"
//, "http://geoapi.tomnod.com/geolocate/320785653669433344"
//, "http://geoapi.tomnod.com/geolocate/320785694102544384"
//, "http://geoapi.tomnod.com/geolocate/320785724947431427"
//, "http://geoapi.tomnod.com/geolocate/320785744144781312"
//, "http://geoapi.tomnod.com/geolocate/320785838940233728"
//, "http://geoapi.tomnod.com/geolocate/320785870015823872"
//, "http://geoapi.tomnod.com/geolocate/320786009778425856"
//, "http://geoapi.tomnod.com/geolocate/320786117706268672"
//, "http://geoapi.tomnod.com/geolocate/320786146277855232"
, "http://geoapi.tomnod.com/geolocate/320786230767935488"

);





$counter  =  count($newArray);

$contents=array();

for ($i=0;$i<$counter;$i++){

$url= $newArray[$i];
$contents[$i]=file_get_contents($url); 

}


//$url="http://geoapi.tomnod.com/geolocate/320705222546694144";


//$contents= file_get_contents($url); 
//echo $contents;


?>

<script>

window.onload=function(){



var content = <?php echo json_encode($contents); ?>;


	getLatAndLag(content);


}

function getLatAndLag(match_content){
/*
alert((match_content));
	var lat_result = match_content.match(/lat["']:([^"',]+)/g) ;
	alert(lat_result);
	
	var lng_result= match_content.match(/lng["']:([^"',]+)/g) ;
	alert(lng_result);*/
	var dataArray = new Array();//保存匹配到的数据
	var temp_flag = 0;

	var myregexp = /lat["']:([^"',]+),["']/g;
var match = myregexp.exec(match_content);
while (match != null) {
	for (var i = 1; i < match.length; i++) {
		// matched text: match[i]
		//alert(match[i]);
		dataArray[temp_flag]=match[i];
		temp_flag++;
	}
	match = myregexp.exec(match_content);
}

	var myregexp = /lng["']:([^"',]+)\},["']/g;
var match = myregexp.exec(match_content);
while (match != null) {
	for (var i = 1; i < match.length; i++) {
		// matched text: match[i]
		//alert(match[i]);
		dataArray[temp_flag]=match[i];
		temp_flag++;
	}
	match = myregexp.exec(match_content);
}

alert(dataArray);

}


</script>



</body>
</html>