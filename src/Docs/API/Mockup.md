# WildDevs\Endpoints\Mockup

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**address**](Mockup.md#address) | **GET** /address | 
[**company**](Mockup.md#company) | **GET** /company | 
[**finance**](Mockup.md#finance) | **GET** /finance | 
[**git**](Mockup.md#git) | **GET** /git | 
[**internet**](Mockup.md#internet) | **GET** /internet | 
[**product**](Mockup.md#product) | **GET** /product | 
[**user**](Mockup.md#user) | **GET** /user | 
[**vehicle**](Mockup.md#vehicle) | **GET** /vehicle | 

# **address**
> WildDevs\Models\Response address($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10",
        "locale" => "de"
    ];

    try {
        $response = $api->mockup()->address($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->address: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count`, `locale` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupAddress)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **company**
> WildDevs\Models\Response company($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10"
    ];

    try {
        $response = $api->mockup()->company($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->company: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupCompany)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **finance**
> WildDevs\Models\Response finance($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10"
    ];

    try {
        $response = $api->mockup()->finance($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->finance: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupFinance)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **git**
> WildDevs\Models\Response git($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10"
    ];

    try {
        $response = $api->mockup()->git($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->git: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupGit)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **internet**
> WildDevs\Models\Response internet($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10"
    ];

    try {
        $response = $api->mockup()->internet($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->internet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupInternet)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **product**
> WildDevs\Models\Response product($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10"
    ];

    try {
        $response = $api->mockup()->product($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->product: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupProduct)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **user**
> WildDevs\Models\Response user($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10",
        "locale" => "de",
        "address" => true, // includes address mockup data
        "finance" => true // includes finance mockup data
    ];

    try {
        $response = $api->mockup()->user($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->user: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count`, `locale`, `sex`, `address` and `finance`  | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupUser)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **vehicle**
> WildDevs\Models\Response vehicle($query = [])

`Subscriber` Only Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "count" => "10"
    ];

    try {
        $response = $api->mockup()->vehicle($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->mockup()->vehicle: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `count` | [optional]

Futher information and description about query parameters are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Mockup/getMockupVehicle)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)