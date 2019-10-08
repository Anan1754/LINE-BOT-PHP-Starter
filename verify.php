<?php
$access_token = 'b3/+WEjX81cnWIUiw+czfqAcQAwKPGMJfn+eI8QueUiqoUMaAVEwt26rYvySnnnoejgrVXhf+U4NTfJHA+hj7x1kxGytAmevvxzJBrF+t5iCqWWQn6fUSWWuwXmIW4is/Qu2py4xLe/KHa98noRjMgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
