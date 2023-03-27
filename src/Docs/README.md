# Wild Devs API REST PHP SDK

This API is used to query the Wild Devs API. Its a complete wrapper for every endpoints, including member and subscriber endpoints. For those you need to setup an API Key.

You can [sign up](https://wild-devs.net/register) and generate own api key for free.

  - SDK Version: v1.1.0
  - API version: v1.0.1

[Official Wild Devs API Documentation](https://api.wild-devs.net/v1/docs)

## Requirements

PHP 7.0 and later

## Installation & Usage
### Composer

Require the bundle and its dependencies with [composer](http://getcomposer.org/):

```
$ composer require wilddevs/rest-php-sdk
```

### Manual Installation

Download the [files](https://github.com/WildDevs/rest-php-sdk) and include `autoload.php`:

```php
    require_once('/path/to/rest-php-sdk/autoload.php');
```

## Documentation for API Endpoints

All URIs are relative to *https://api.wild-devs.net/v1*

Class | Method | HTTP request |
------------ | ------------- | -------------
[*Conversion*](Docs/API/Conversion.md) | [**unit**](Docs/API/Conversion.md#unit) | **POST** /unit | 
[*Conversion*](Docs/API/Conversion.md) | [**currency**](Docs/API/Conversion.md#currency) | **POST** /currency | 

## Documentation For Models

 - [Response](Docs/Models/Response.md)
  
## Documentation For Authorization

## x-api-key

- **Type**: x-api-key
- **Authorization**: in header



