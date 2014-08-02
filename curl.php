<?php

$handler = curl_init("http://www.google.es");  
$response = curl_exec ($handler);  
curl_close($handler);  
echo $response;  

?>