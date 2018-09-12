<?php


$access_token = '0BdiKSNDd98BzsuUdV7mV9AcQ7Qx/EaVL44cC7CDrzyPLvXMmzdzJGkiMRxB+kqlubv7gddfKMXdC63Z05qiQktpxFFr2T66Q3elNyy/YJE8tmcx5921zm0NDwTrQHAeufTYC7SQr66LPZAaGlFSMAdB04t89/1O/w1cDnyilFU=';

$userId = 'U2cd26d49ace18bd6cfce4e53160808cb';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

