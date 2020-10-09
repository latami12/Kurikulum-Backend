<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('POST','https://api.pondokprogrammer.com/api/student_login',[
'form_params' =>[
    'email' => 'ppib14latami@gmail.com',
    'password' => 'latami12'
]
]);

echo $response->getStatusCode()."<br>"; // 200
echo $response->getHeaderLine('content-type')."<br>"; // 'application/json; charset=utf8'
echo $response->getBody()."<br>"; // '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=81');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});

$promise->wait();