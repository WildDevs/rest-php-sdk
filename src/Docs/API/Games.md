# WildDevs\Endpoints\Games

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**epicgames**](Games.md#epicgames) | **GET** /epicgames/free | 

# **epicgames**
> WildDevs\Models\Response epicgames()

`Subscriber` Only Endpoint. API-Key is needed.

Returns the current and next weeks free games.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    try {
        $response = $api->games()->epicgames();
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->games()->epicgames(): ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)