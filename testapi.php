
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
//   CURLOPT_URL => $url = 'http://localhost/apiadd.php?token=12345',
//   CURLOPT_URL => $url = 'http://localhost/api.php?token=12345',
  CURLOPT_URL => $url = 'http://localhost/apiupd.php?token=12345',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//  CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_CUSTOMREQUEST => 'PUT',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
