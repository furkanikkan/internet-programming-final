<?php
$weatherApi = file_get_contents("http://api.weatherapi.com/v1/current.json?key=ce71800cf15a4907817204818230301&q=Istanbul&aqi=no");
$jsonDecoded = json_decode($weatherApi); 
 
 
?>