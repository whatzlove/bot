<?php



require "vendor/autoload.php";

$access_token = '1WpfHfGGfcQ1fxfaEXVP4vx1IfhiUY6fZ/fXVERnTlYx3zaFklj8aECTNrU1D4iy3+MebJXlGYSuLU/93oJn4NNCN9GsSv9invPyphDycXQvzr2lHNUxWeqUBvK/MxJULr3XLGDH6BhHrjgaTinVMwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c87a65d916b043abe432e4eed6d689e2';

$pushID = 'Ua6751e3b8340b1b849c4826ad27ddcdd,Ub5b3587fd060145599c368a8b43f8ea1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







