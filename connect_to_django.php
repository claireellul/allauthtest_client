<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// make a request from the django api
// and send it out as an echo to the client

echo("test");

/* this version works
$url = "http://www.google.com/";        
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HEADER, TRUE); 
curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 
$head = curl_exec($ch); 
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
curl_close($ch); 
var_dump($head);
*/

$url="http://developer.cege.ucl.ac.uk:31827/rest/2/";
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HEADER, FALSE);  // remove the header
$result = curl_exec($ch); 
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
curl_close($ch); 
echo($result);
#var_dump($result);

# echo htmlentities($response); will give the raw html of the site that is being curled!


#$r = new HttpRequest('http://www.ucl.ac.uk', HttpRequest::METH_POST);
#$r->setOptions(array('cookies' => array('lang' => 'de')));
#$r->addPostFields(array('user' => 'mike', 'pass' => 's3c|r3t'));
#try {
#    echo $r->send()->getBody();
#} catch (HttpException $ex) {
#    echo $ex;
#}
?>