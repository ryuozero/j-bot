<?php
$access_token = 'DkTH9qphVYaX9f3rdGIGbaPHobTNaQjsh1B0hlwYLGGK1MnCaQqctpSbe1iJAiwm2ZwD8si7Ak6CMN8fkKJWjcybJ3XUCfbV+qQrAIzlFZv0x+z3ksuh7DEGgwa+Dbe/L6stKJSCBF9VkLYgBJFevwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;