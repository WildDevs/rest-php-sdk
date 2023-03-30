# WildDevs\Endpoints\NetTools

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dnslookup**](NetTools.md#dnslookup) | **GET** /dnslookup?source={fqdn} | 
[**ipinfo**](NetTools.md#ipinfo) | **GET** /ipinfo?source={ip} | 
[**whatsmyip**](NetTools.md#whatsmyip) | **GET** /whatsmyip | 

# **dnslookup**
> WildDevs\Models\Response dnslookup($query)

`Member` and `Subscriber` Endpoint. API-Key is needed.

Provides DNS (Domain Name Service) information about the given FQDN (Full Qualified Domain Name).
IPv4 (if available) and IPv6 (if available) along with their DNS Records.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "source" => "37.120.190.250"
    ];

    try {
        $response = $api->netTools()->dnslookup($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->netTools()->dnslookup: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `source` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../../README.md)

# **ipinfo**
> WildDevs\Models\Response ipinfo($query)

`Member` and `Subscriber` Endpoint. API-Key is needed.

Provides a huge amount of IP information, from ISP to location data.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $query = [
        "source" => "37.120.190.250"
    ];

    try {
        $response = $api->netTools()->ipinfo($query);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->netTools()->ipinfo: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**query** | **array**| Following parameters are available: `source` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../../README.md)

# **whatsmyip**
> WildDevs\Models\Response whatsmyip()

IPv4 or IPv6 along with the ISP (Internet Service Provider) and country code.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    try {
        $response = $api->netTools()->whatsmyip();
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->netTools()->whatsmyip: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../../README.md)