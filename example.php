<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "autoload.php";

$api = new WildDevs\API();
$api->setApiKey('key', 'secret');

$response = $api->random()->string();
echo "<pre>";
print_r($response->getContent());
echo "</pre>";

$response = $api->random()->number(['min' => 5, 'max' => 7, 'batch' => 5]);
echo "<pre>";
print_r($response->getContent());
echo "</pre>";

$response = $api->utils()->hash(['text' => 'Hello World']);
echo "<pre>";
print_r($response->getContent());
echo "</pre>";

$response = $api->validate()->ip(['ip' => '111.111.111.111']);
echo "<pre>";
print_r($response->getContent());
echo "</pre>";

$response = $api->games()->epicgames("free");
echo "<pre>";
print_r($response->getContent());
echo "</pre>";
