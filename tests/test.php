<?php

// require  __DIR__ .'/../vendor/autoload.php';

require __DIR__ . '/../src/ClassLoader.php';
\PFinal\Http\ClassLoader::register();

$client = new \PFinal\Http\Client();

$response = $client->get('http://www.baidu.com');

var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

echo '<br>';

$body = $response->getBody();
echo nl2br(htmlspecialchars($body));

echo '<br>';

$response = $client->get('https://www.baidu.com/img/bd_logo1.png');
if ($response->getStatusCode() == 200) {
    file_put_contents('./bd.png', $response->getBody());
}