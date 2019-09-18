<?php 


$url = 'http://api.openweathermap.org/data/2.5/weather';

$api_key = '9536bb6314b60e2a46c4da44a501e463';
$secret = 'bcc816cfad1f662f59b28a48a65f3b0f';

$options = array(
  'q' => 'Jersey City',
  'APPID' => '4f7f068b682d7d517bedf828dbfef4d2',
  'units' => 'metric',
  'lang' => 'en',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo '<pre>';
print_r($data);


?>