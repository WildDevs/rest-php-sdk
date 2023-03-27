# WildDevs\Endpoints\Utility

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**compile**](Utility.md#compile) | **POST** /compile | 
[**decode**](Utility.md#decode) | **POST** /decode | 
[**encode**](Utility.md#encode) | **POST** /encode | 
[**geoip**](Utility.md#geoip) | **GET** /geoip/{ip} | 
[**hash**](Utility.md#hash) | **POST** /hash | 
[**qrcode**](Utility.md#qrcode) | **POST** /qrcode | 

# **compile**
> WildDevs\Models\Response compile($payload = [])

`Subscriber` Only Endpoint. API-Key is needed.

Supported languages are: "c", "cpp", "js", "python"

For each language are some options available:

**c**
| Key              | Description                                                   |
| ---------------- | --------------------------------------------------------------|
| std              | Sets the standard library for the compilation                 |
Available **std** values are: "c99", "c11","c17", "c18"                          

---

**cpp**
| Key              | Description                                                   |
| ---------------- | --------------------------------------------------------------|
| std              | Sets the standard library for the compilation                 |
Available **std** values are: "c++98","c++03", "c++11", "c++14", "c++17"         

---

**python**
| Key              | Description                                                   |
| ---------------- | --------------------------------------------------------------|
| version          | Sets the python version, default is: 3                        |
Available **version** values are: 2, 3                                           

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $code = <<<CODE
        #include <iostream>

        int main(void){
            std::cout << "Hello World" << std::endl;
            return 0;
        }
    CODE;

    $code = base64_encode($code); // Provide the code as base64 string to avoid character escapes.

    $payload = [
        "language": "cpp",
        "code": $code, 
        "std": "c++11",
        "version": 3 // use only when language is python
    ];

    try {
        $response = $api->utility()->compile($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->utility()->compile: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `language`, `code`, `std` and `version` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **decode**
> WildDevs\Models\Response decode($payload = [])

Decodes given text into various formats

Allowed **from** values are: `base64`, `utf8`, `utf16le`, `hex`, `ascii` and `latin1`

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "text": "I2luY2x1ZGUgPGlvc3RyZWFtPgoKaW50IG1haW4odm9pZCl7CiAgc3RkOjpjb3V0IDw8ICJIZWxsbyBXb3JsZCIgPDwgc3RkOjplbmRsOwogIHJldHVybiAwOwp9",
        "from": "base64"
    ];

    try {
        $response = $api->utility()->decode($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->utility()->decode: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `text` and `from` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **encode**
> WildDevs\Models\Response encode($payload = [])

Encodes given text into various formats

Allowed **from** values are: `base64`, `utf8`, `utf16le`, `hex`, `ascii` and `latin1`

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "text": "My string to encode",
        "from": "ascii"
    ];

    try {
        $response = $api->utility()->encode($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->utility()->encode: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `text` and `from` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **geoip**
> WildDevs\Models\Response geoip($ip)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $ip = "37.120.190.250"

    try {
        $response = $api->utility()->geoip($ip);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->utility()->geoip: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**ip** | **string**| Any IPv4 or IPv6 address | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **hash**
> WildDevs\Models\Response hash($payload = [])

Hashes given text into various formats

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "text": "My string to hash",
    ];

    try {
        $response = $api->utility()->hash($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->utility()->hash: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `text` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **qrcode**
> WildDevs\Models\Response qrcode($payload = [])

qrcodees given text into various formats

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "text": "Wild Devs Community",
        "width": 256,
        "height": 256,
        "logo": "https://wild-devs.net/img/logo/wd_logo.png",
        "logoWidth": 64,
        "logoHeight": 64,
        "logoBackgroundTransparent": true
    ];

    try {
        $response = $api->utility()->qrcode($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->utility()->qrcode: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with various fields | [required]

Futher information and description about payload fields are described on the [API Endpoint Documentation](https://api.wild-devs.net/v1/docs/#/Utility/qrcode)

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)