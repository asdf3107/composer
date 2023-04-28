<?php



require 'vendor/autoload.php';



$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://ya.ru');


var_dump ($response->getBody()); exit();