<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "autoload.php";

$api = new WildDevs\API();
$api->setApiKey('WD-4DNVFMQWIIUPQIV3FTLHY75IGBTI', 'RBPTyke1-8Y8SpuhlPP-eoUuSnPBjyP9CG-Xr0gdhkHJ+WifsIYISWs/2');

// $response = $api->random()->string();
// echo "<pre>";
// print_r($response->getContent());
// echo "</pre>";

// $response = $api->random()->number(['min' => 5, 'max' => 7, 'batch' => 5]);
// echo "<pre>";
// print_r($response->getContent());
// echo "</pre>";

// $response = $api->utility()->hash(['text' => 'Hello World']);
// echo "<pre>";
// print_r($response->getContent());
// echo "</pre>";

// $response = $api->validate()->ip(['ip' => '111.111.111.111']);
// echo "<pre>";
// print_r($response->getContent());
// echo "</pre>";

// $response = $api->games()->epicgames("free");
// echo "<pre>";
// print_r($response->getContent());
// echo "</pre>";

$response = $api->mockup()->user(["finance" => true]);
echo "<pre>";
print_r($response->getData());
echo "</pre>";