<?php

require "vendor/autoload.php";

$access_token = 'W1U2yJf2Ho4YhQETcvtcak5q7hOm0DomyoBS4PqsjONJVThjO/d13wHO8/jILY/BAuinDyMDQnrrEAEqLTkm3WkX5oHNhQzBCJcy0rwk4UBMqyHbZHHqMcE/TJdUOz58Cb5CTSs0HX9A9+gqXQSZXgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '33d38c5d8560cae306a61fe2356542a1';

$pushID = 'U6ac3806d6519e0e1f2b4c454a7cfa08c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');

$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
