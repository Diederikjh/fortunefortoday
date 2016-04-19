<?php
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
?> 
<?php

# TODO: These two need to be refactored into classes.  
# List of webservices can then be built, and all the successfull ones can be randomly selected from
$fullerDataCookie = "";
$donnerCookie = "";

try 
{
    $clientFullerData = new SoapClient("http://www.fullerdata.com/FortuneCookie/FortuneCookie.asmx?WSDL");
    $result = $clientFullerData->GetFortuneCookie();
    $fullerDataCookie = $result->GetFortuneCookieResult;
}
catch (Exception $e)
{
    error_log($e);
}

try
{
// old one was
// http://www.doughughes.net/WebServices/fortune/fortune.cfc?wsdl
// http://www.alagad.com/WebServices/fortune/fortune.cfc?wsdl
  $donnerClient = new SoapClient("http://fortunefortoday.com/donnerwsdl.php");
  $result1 = $donnerClient ->GetCookie() ;
  $donnerCookie =  $result1->GetCookieResult;
}
catch (Exception $e1)
{  
   print($e1);
 //   error_log($e1);
}

$cookieInput = array();
if ($donnerCookie != "")
{
  $cookieInput[] = $donnerCookie ;
}

/*if ($fullerDataCookie != "")
{
  $cookieInput[] = $fullerDataCookie;
}*/

if (count($cookieInput) != 0)
{
  $randomIndex = array_rand($cookieInput);
  $randomCookie = $cookieInput[$randomIndex];
  print $randomCookie;
}
else
{
  # TODO notify me that something is wrong.
  $offlineArray =  array("   That's the difference between me and the rest of the world! Happiness isn't good enough for me! I demand euphoria! -- Calvin", 
  "   The purpose of writing is to inflate weak ideas, obscure pure reasoning, and inhibit clarity. With a little practice, writing can be an intimidating and impenetrable fog!  -- Calvin",
  "   Calvin: I'm a genius, but I'm a misunderstood genius.  Hobbes: What's misunderstood about you?  Calvin: Nobody thinks I'm a genius.  -- Calvin", 
  "   Well, it just seemed wrong to cheat on an ethics test.  -- Calvin",
  "Calvin: Can you make a living playing silly games?  His Dad: Actually, you can be among the most overpaid people on the planet.",
  " If you do the job badly enough, sometimes you don't get asked to do it again.  -- Calvin",
  " The only skills I have the patience to learn are those that have no real application in life.  -- Calvin",
  " Some people are pragmatists, taking things as they come and making the best of the choices available. Some people are idealists, standing for principle and
  refusing to compromise. And some people just act on any whim that enters their heads. I pragmatically turn my whims into principles!  -- Calvin",
  " Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.  -- Calvin",
  " It seems like once people grow up, they have no idea what's cool.             -- Calvin ");

    $randomIndex = array_rand($offlineArray);
    $randomCookie = $offlineArray[$randomIndex];
    print $randomCookie;
}

?>
