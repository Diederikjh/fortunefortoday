<html>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7974791-1");
pageTracker._trackPageview();
} catch(err) {}
</script>

<head>
<style type="text/css">
div 
{
width:700px;
}
</style>
</head>
<title>Fortune for today</title>
<body style="font-family:Arial">
<p>
<h1>Fortune for today</h1>
</p>
<p>
	<h3>
	<div id="fortuneBody">
		<?php
		$client = new SoapClient("http://www.doughughes.net/WebServices/fortune/fortune.cfc?wsdl");
		print $client->getFortune() ?>
	</div>
	</h3>
</p>
<br>
<p style="font-size:10px">
Refresh for a new fortune.  Powerd by <a href="http://www.alagad.com"  target=_blank>Alagad</a> and <a href="http://en.wikipedia.org/wiki/Fortune_(Unix)" target=_blank>fortune</a>
(Hooray Linux!)
</p>
<p style="font-size:10px">
You are viewing this page in compatability mode. Click <a href="index.php">here</a> to try original page again.  Please use a newer <a href ="http://www.mozilla.com/en-US/firefox/firefox.html">broswer</a> to fix this problem.
</p>
</body>
</html>

