<?php
$access_token = '0iOxPtS6sadBbya87fY9gjqKbryUsww3exDlCcs3/JslnYee++cYoUcGxYZXNDRXydEORk50Tr45E84cAaW0C1vD8svFx/SeHYRAy0QZESsGpSylSAxkcmBQh1TSuouO9+vFXygtsR8nTCJ/xqvcVQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;