# Web 2 SMS Client

PHP library for sending SMS using [web2sms237 API](https://web2sms237.com "https://web2sms237.com").

## Requirement

You need **php version >=5.5** to use this library

## Installation

```bash
composer require patrickmaken/web2sms-client
```

## Usage

Before any operation, you must initialize the client by giving it your api_user_id and api_user_secret. These values are available in your profile on the platform [https://web2sms237.com](https://web2sms237.com "https://web2sms237.com").

### Send SMS

```php
use Patrickmaken\Web2Sms\Client as W2SClient;

W2SClient::setConfig([
    'api_user_id' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
    'api_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
]);

$telephone = '+237699887766';
$text = 'Ceci est un message de test.';
$senderID = 'MyApp';

$response = W2SClient::sendSMS($telephone, $text, $senderID);
var_dump($response);
```

Output:
```bash
array(2) {
  ["id"]=>
  string(36) "e3f0bcd5-7742-433d-add2-11a00b89a477"
  ["cost"]=>
  int(12)
}
```

### Get SMS Status

```php
use Patrickmaken\Web2Sms\Client as W2SClient;

W2SClient::setConfig([
    'api_user_id' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
    'api_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
]);

$message_id = 'e3f0bcd5-7742-433d-add2-11a00b89a477';

$response = W2SClient::getMessageStatus($message_id);
var_dump($response);
```

Output:
```bash
array(2) {
  ["status"]=>
  string(4) "SENT"
  ["sent_by"]=>
  string(5) "MyApp"
}
```