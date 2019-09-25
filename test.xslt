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