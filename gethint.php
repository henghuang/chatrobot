<?php

function geturl($Date){ 
$ch = curl_init(); 
$timeout = 5; 
curl_setopt ($ch, CURLOPT_URL, "$Date"); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)"); 
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
$contents = curl_exec($ch); 
curl_close($ch); 
return $contents; 
} 

//get the q parameter from URL
$q=$_GET["q"];

$post_data= 'lc=ch&msg='.$q;
$url = "http://www.simsimi.com/func/req?".$post_data;
//echo $url;

$str = geturl($url);   
//output the response
$str=explode(":",$str);
$response=explode(",",$str[1]);
echo $response[0];
?>
