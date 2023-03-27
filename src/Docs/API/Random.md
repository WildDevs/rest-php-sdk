# WildDevs\Endpoints\Random

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**string**](Random.md#string) | **POST** /string | 
[**number**](Random.md#number) | **POST** /number | 

# **string**
> WildDevs\Models\Response string($payload = [])

Generate random strings for passwords, product keys, vouchers or uuids as identifiers.
  
Allowed methods: string, bytes, base32, base62, uuidv4, uuidv5

Options for method **string**:

| Key              | Description                                                       |
| ---------------- | ------------------------------------------------------------------|
| min              | The minimum length of the string (ignored if length is given)     |
| max              | The maximum length of the API key (ignored if length is given)    |
| length           | The length of the string                                          |
| pool             | The characters used for the string generation                     |
| batch            | The number of strings to generate                                 |
| prefix           | A prefix for the string, a period (.) will be added automatically |

Options for method **bytes**:

| Key              | Description                                                       |
| ---------------- | ------------------------------------------------------------------|
| min              | The minimum length of the string (ignored if length is given)     |
| max              | The maximum length of the API key (ignored if length is given)    |
| length           | The length of the string                                          |
| batch            | The number of strings to generate                                 |
| prefix           | A prefix for the string, a period (.) will be added automatically |

Options for method **base32**:

| Key              | Description                                                       |
| ---------------- | ------------------------------------------------------------------|
| dashes           | Adds dashes (-) to the string                                     |
| batch            | The number of strings to generate                                 |
| prefix           | A prefix for the string, a period (.) will be added automatically |

Options for method **base62**:

| Key              | Description                                                       |
| ---------------- | ------------------------------------------------------------------|
| batch            | The number of strings to generate                                 |
| prefix           | A prefix for the string, a period (.) will be added automatically |

Options for method **uuidv4**:

| Key              | Description                                                       |
| ---------------- | ------------------------------------------------------------------|
| dashes           | Adds dashes (-) to the string                                     |
| batch            | The number of strings to generate                                 |
| prefix           | A prefix for the string, a period (.) will be added automatically |

Options for method **uuidv5**:

| Key              | Description                                                       |
| ---------------- | ------------------------------------------------------------------|
| name             | A unique name to use for the generation                           |
| namespace        | The UUID to use for the generation (ignored if batch is given)    |
| dashes           | Adds dashes (-) to the string                                     |
| batch            | The number of strings to generate                                 |
| prefix           | A prefix for the string, a period (.) will be added automatically |

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "method" => "bytes",
        "length" => 12,
        "batch" => 10,
    ];

    try {
        $response = $api->random()->string($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->random()->string: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with various fields, see above | [optional]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)

# **number**
> WildDevs\Models\Response number($payload = [])

Generate random numbers.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "min" => 1,
        "max" => 42,
        "batch" => 5 // optional
    ];

    try {
        $response = $api->random()->string($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->random()->string: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `min`, `max`, `batch` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../README.md)