# Http

一个简单易用的PHP HTTP 客户端, 基于cURL封装

## 使用composer 安装

```
composer require pfinal/http
```

## 示例

```php
<?php

require  __DIR__ .'/vendor/autoload.php';

// 如果未使用composer,使用下面的方式加载类
// require __DIR__ . '/src/ClassLoader.php';
// \PFinal\Http\ClassLoader::register();

$client = new \PFinal\Http\Client();

$response = $client->get('http://www.baidu.com');

//http状态码 例如: 200 404 等
var_dump($response->getStatusCode());


var_dump($response->getTransferInfo());

echo '<br>';

//响应内容
$body = $response->getBody();
echo nl2br(htmlspecialchars($body));

// post
// $client->post($url,array('name'=>'Ethan','password'=>'123456'));

// file upload
// $client->file($url, 'photo', './images/1.jpg');

//download
//$response = $client->get('https://www.baidu.com/img/bd_logo1.png');
//if ($response->getStatusCode() == 200) {
//  file_put_contents('./bd.png', $response->getBody());
//}