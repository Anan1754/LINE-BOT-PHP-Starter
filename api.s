curl -X POST \-H 'Content-Type:application/json' 
\-H 'Authorization: Bearer {b3/+WEjX81cnWIUiw+czfqAcQAwKPGMJfn+eI8QueUiqoUMaAVEwt26rYvySnnnoejgrVXhf+U4NTfJHA+hj7x1kxGytAmevvxzJBrF+t5iCqWWQn6fUSWWuwXmIW4is/Qu2py4xLe/KHa98noRjMgdB04t89/1O/w1cDnyilFU=}' 
\-d '{    "replyToken":"3f1ff554c7430563431ae020fff9966e"    
{
  "messages": [
    {
      "type": "text",
      "text": "Hello, user"
    },
    {
      "type": "text",
      "text": "May I help you?"
    }
  ]
}
' https://api.line.me/v2/bot/message/reply
