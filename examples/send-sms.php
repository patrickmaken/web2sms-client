<?php

include '../vendor/autoload.php';

use Patrickmaken\Web2Sms\Client as W2SClient;

W2SClient::setConfig([
    'api_user_id' => '352204bd-b229-4c25-9f02-aa05fe9d7d0c',
    'api_key' => '0a7d93dd41bcb4c695b5db4204f9d71a',
]);

$telephone = '+237699887766';
$text = 'Ceci est un message de test.';
$senderID = 'MyApp';

$response = W2SClient::sendSMS($telephone, $text, $senderID);
var_dump($response);