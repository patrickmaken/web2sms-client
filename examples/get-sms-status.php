<?php

include '../vendor/autoload.php';

use Patrickmaken\Web2Sms\Client as W2SClient;

W2SClient::setConfig([
    'api_user_id' => '352204bd-b229-4c25-9f02-aa05fe9d7d0c',
    'api_key' => '0a7d93dd41bcb4c695b5db4204f9d71a',
]);

$message_id = 'e3f0bcd5-7742-433d-add2-11a00b89a477';

$response = W2SClient::getMessageStatus($message_id);
var_dump($response);