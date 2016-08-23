# PFinal\Http

一个PHP HTTP 客户端, 基于cURL的简单封装

使用composer 安装

```
composer require pfinal/http
```

示例

```php
<?php

require  __DIR__ .'/vendor/autoload.php';

// 如果未使用composer,使用下面的方式加载类
// require __DIR__ . '/../src/ClassLoader.php';
// \PFinal\Http\ClassLoader::register();

$client = new \PFinal\Http\Client();

$response = $client->get('http://www.baidu.com');

var_dump($response->getStatusCode());

var_dump($response->getTransferInfo());

echo '<br>';

$body = $response->getBody();
echo nl2br(htmlspecialchars($body));

// post
// $client->post($url,array('name'=>'Ethan','password'=>'123456'));

// file upload
// $client->file($url, 'photo', './images/1.jpg');
