var gettingMessage = 0;

var timer;
var timeoutBeforeRedirectToCompatableVersionInSec = 20;

function getHTTPObject(){
	if (window.ActiveXObject) 
	return new ActiveXObject("Microsoft.XMLHTTP");
	else if (window.XMLHttpRequest) 
	return new XMLHttpRequest();
	else {
		redirectToCompatableVersion();
	return null;
	}
}

function redirectToCompatableVersion()
{
	t = setTimeout("window.location='fortuneold.php'", 1000)
}

function getNewFortune(){
	// Sets wait image
	document.getElementById('fortuneBody').innerHTML = "<img src='busy.gif' />"
	timer = setTimeout("redirectToCompatableVersion()", timeoutBeforeRedirectToCompatableVersionInSec*1000);
	httpObject = getHTTPObject();
	if (httpObject != null) {
		httpObject.open("GET", "getfortuneonly.php", true);
		httpObject.send(null);
		httpObject.onreadystatechange = setOutput;
	}
}

function setOutput(){
	// On fished loading, set div
	if(httpObject.readyState == 4){
		clearTimeout(timer);
		document.getElementById('fortuneBody').innerHTML = httpObject.responseText;
	}
}
