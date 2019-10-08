 <?php
  

function send_LINE($msg){
 $access_token = 'b3/+WEjX81cnWIUiw+czfqAcQAwKPGMJfn+eI8QueUiqoUMaAVEwt26rYvySnnnoejgrVXhf+U4NTfJHA+hj7x1kxGytAmevvxzJBrF+t5iCqWWQn6fUSWWuwXmIW4is/Qu2py4xLe/KHa98noRjMgdB04t89/1O/w1cDnyilFU=';
Issue; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '3f1ff554c7430563431ae020fff9966e'
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
