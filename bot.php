<?php

$access_token = 'b3/+WEjX81cnWIUiw+czfqAcQAwKPGMJfn+eI8QueUiqoUMaAVEwt26rYvySnnnoejgrVXhf+U4NTfJHA+hj7x1kxGytAmevvxzJBrF+t5iCqWWQn6fUSWWuwXmIW4is/Qu2py4xLe/KHa98noRjMgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON

$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['ESP'])) {
	
	send_LINE($events['ESP']);
		
	echo "OK";
	}
if (!is_null($events['events'])) {
	echo "line bot";
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back

			$Topic = "NodeMCU1" ;
			getMqttfromlineMsg($Topic,$text);
			   
			
		}
	}
}
$Topic = "NodeMCU1" ;
$text = "Test";
getMqttfromlineMsg($Topic,$text);
echo "OK3";
?>
