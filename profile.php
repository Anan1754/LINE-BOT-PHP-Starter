 <?php

$access_token = 'W1U2yJf2Ho4YhQETcvtcak5q7hOm0DomyoBS4PqsjONJVThjO/d13wHO8/jILY/BAuinDyMDQnrrEAEqLTkm3WkX5oHNhQzBCJcy0rwk4UBMqyHbZHHqMcE/TJdUOz58Cb5CTSs0HX9A9+gqXQSZXgdB04t89/1O/w1cDnyilFU=';

$userId = 'U6ac3806d6519e0e1f2b4c454a7cfa08c';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
