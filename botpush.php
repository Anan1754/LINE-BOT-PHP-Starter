<?php

require "vendor/autoload.php";

$access_token = 'b3/+WEjX81cnWIUiw+czfqAcQAwKPGMJfn+eI8QueUiqoUMaAVEwt26rYvySnnnoejgrVXhf+U4NTfJHA+hj7x1kxGytAmevvxzJBrF+t5iCqWWQn6fUSWWuwXmIW4is/Qu2py4xLe/KHa98noRjMgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3f1ff554c7430563431ae020fff9966e';

$pushID = 'U65808eab13c8819b3504e7212d5c67e8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');

$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
