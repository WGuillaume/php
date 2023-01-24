<?php

$token =123456789;
$url = "https://deamonerp.fr/testapi;php?token=";$token
$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch CURLOPT_CUSTOMREQUEST,"GET")
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data=json_decode($response);

echo '<pre>';
var_dump($data);
echo'<pre>'


?>
