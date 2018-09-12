<?php



require "vendor/autoload.php";

$access_token = '0BdiKSNDd98BzsuUdV7mV9AcQ7Qx/EaVL44cC7CDrzyPLvXMmzdzJGkiMRxB+kqlubv7gddfKMXdC63Z05qiQktpxFFr2T66Q3elNyy/YJE8tmcx5921zm0NDwTrQHAeufTYC7SQr66LPZAaGlFSMAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bbeac145b9af6145d00d41f00419b909';

$pushID = 'U2cd26d49ace18bd6cfce4e53160808cb';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







