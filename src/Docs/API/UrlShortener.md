# WildDevs\Endpoints\UrlShortener

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](UrlShortener.md#getAll) | **GET** /urlshorteners | 
[**create**](UrlShortener.md#create) | **POST** /urlshortener | 
[**delete**](UrlShortener.md#delete) | **DELETE** /urlshortener/{id} | 

# **getAll**
> WildDevs\Models\Response getAll($payload = [])

`Member` & `Subscriber` Endpoint. API-Key is needed.

Shorten urls are bound to the user who owns the api-key. This is an endpoint to retrieve all these shorten urls.
### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    try {
        $response = $api->urlShortener()->getAll();
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->urlShortener()->getAll: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **create**
> WildDevs\Models\Response create($payload = [])

`Public`, `Member` & `Subscriber` Endpoint. API-Key not necessary.

If `x-api-key` is supplied, then the short-urls are assigned to the user who owns the api-key. So you can query all short-urls and get more information, like the number of clicks. You can also remove them with the delete endpoint.

Available shortener domains are: `xfive.de` and `xtc5.de`

If `custom_id` is passed with payload, random id will not be generated and your custom id will be used, if its available.

Returns the short url.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "original_url" => "https://wild-devs.net",
        "domain" => "xfive.de",
        "custom_id" => "MyCoolString" // optional
    ];

    try {
        $response = $api->random()->create($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->random()->create: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `original_url`, `domain`, `custom_id` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **delete**
> WildDevs\Models\Response delete($id)

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $id = "3fa85f64-5717-4562-b3fc-2c963f66afa6"

    try {
        $response = $api->random()->delete($id);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->random()->delete: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**id** | **string**| Unique uuid of the shorten url | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)