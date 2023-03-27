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
composer require wilddevs/rest-php-sdk
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
[*Conversion*](API/Conversion.md) | [**unit**](API/Conversion.md#unit) | **POST** /unit | 
[*Conversion*](API/Conversion.md) | [**currency**](API/Conversion.md#currency) | **POST** /currency | 
[*Games*](API/Games.md) | [**epicgames**](API/Games.md#epicgames) | **GET** /epicgames/free | 
[*Mockup*](API/Mockup.md) | [**address**](API/Mockup.md#address) | **GET** /address | 
[*Mockup*](API/Mockup.md) | [**company**](API/Mockup.md#company) | **GET** /company | 
[*Mockup*](API/Mockup.md) | [**finance**](API/Mockup.md#finance) | **GET** /finance | 
[*Mockup*](API/Mockup.md) | [**git**](API/Mockup.md#git) | **GET** /git | 
[*Mockup*](API/Mockup.md) | [**internet**](API/Mockup.md#internet) | **GET** /internet | 
[*Mockup*](API/Mockup.md) | [**product**](API/Mockup.md#product) | **GET** /product | 
[*Mockup*](API/Mockup.md) | [**user**](API/Mockup.md#user) | **GET** /user | 
[*Mockup*](API/Mockup.md) | [**vehicle**](API/Mockup.md#vehicle) | **GET** /vehicle | 
[*Random*](API/Random.md) | [**string**](API/Random.md#string) | **GET** /string | 
[*Random*](API/Random.md) | [**number**](API/Random.md#number) | **GET** /number | 
[*UrlShortener*](API/UrlShortener.md) | [**getAll**](API/UrlShortener.md#getAll) | **GET** /urlshorteners | 
[*UrlShortener*](API/UrlShortener.md) | [**create**](API/UrlShortener.md#create) | **POST** /urlshortener | 
[*UrlShortener*](API/UrlShortener.md) | [**delete**](API/UrlShortener.md#delete) | **DELETE** /urlshortener/{id} | 
[*Utility*](API/Utility.md) | [**compile**](API/Utility.md#compile) | **POST** /compile | 
[*Utility*](API/Utility.md) | [**decode**](API/Utility.md#decode) | **POST** /decode | 
[*Utility*](API/Utility.md) | [**encode**](API/Utility.md#encode) | **POST** /encode | 
[*Utility*](API/Utility.md) | [**geoip**](API/Utility.md#geoip) | **GET** /geoip/{ip} | 
[*Utility*](API/Utility.md) | [**hash**](API/Utility.md#hash) | **POST** /hash | 
[*Utility*](API/Utility.md) | [**qrcode**](API/Utility.md#qrcode) | **POST** /qrcode |
[*Validation*](API/Validation.md) | [**bic**](API/Validation.md#bic) | **POST** /bic | 
[*Validation*](API/Validation.md) | [**btc**](API/Validation.md#btc) | **POST** /btc | 
[*Validation*](API/Validation.md) | [**creditcard**](API/Validation.md#creditcard) | **POST** /creditcard | 
[*Validation*](API/Validation.md) | [**ean**](API/Validation.md#ean) | **POST** /ean | 
[*Validation*](API/Validation.md) | [**email**](API/Validation.md#email) | **POST** /email | 
[*Validation*](API/Validation.md) | [**eth**](API/Validation.md#eth) | **POST** /eth | 
[*Validation*](API/Validation.md) | [**fqdn**](API/Validation.md#fqdn) | **POST** /fqdn | 
[*Validation*](API/Validation.md) | [**iban**](API/Validation.md#iban) | **POST** /iban | 
[*Validation*](API/Validation.md) | [**identitycard**](API/Validation.md#identitycard) | **POST** /identitycard | 
[*Validation*](API/Validation.md) | [**imei**](API/Validation.md#imei) | **POST** /imei | 
[*Validation*](API/Validation.md) | [**ip**](API/Validation.md#ip) | **POST** /ip | 
[*Validation*](API/Validation.md) | [**isbn**](API/Validation.md#isbn) | **POST** /isbn | 
[*Validation*](API/Validation.md) | [**isin**](API/Validation.md#isin) | **POST** /isin | 
[*Validation*](API/Validation.md) | [**issn**](API/Validation.md#issn) | **POST** /issn | 
[*Validation*](API/Validation.md) | [**licenseplate**](API/Validation.md#licenseplate) | **POST** /licenseplate | 
[*Validation*](API/Validation.md) | [**mac**](API/Validation.md#mac) | **POST** /mac | 
[*Validation*](API/Validation.md) | [**magnet**](API/Validation.md#magnet) | **POST** /magnet | 
[*Validation*](API/Validation.md) | [**mimetype**](API/Validation.md#mimetype) | **POST** /mimetype | 
[*Validation*](API/Validation.md) | [**password**](API/Validation.md#password) | **POST** /password | 
[*Validation*](API/Validation.md) | [**postalcode**](API/Validation.md#postalcode) | **POST** /postalcode | 
[*Validation*](API/Validation.md) | [**semver**](API/Validation.md#semver) | **POST** /semver | 
[*Validation*](API/Validation.md) | [**tax**](API/Validation.md#tax) | **POST** /tax | 
[*Validation*](API/Validation.md) | [**uuid**](API/Validation.md#uuid) | **POST** /uuid | 
## Documentation For Models

 - [Response](Models/Response.md)
  
## Documentation For Authorization

## x-api-key

- **Type**: x-api-key
- **Authorization**: in header



