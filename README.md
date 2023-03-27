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
[*Conversion*](src/Docs/API/Conversion.md) | [**unit**](src/Docs/API/Conversion.md#unit) | **POST** /unit | 
[*Conversion*](src/Docs/API/Conversion.md) | [**currency**](src/Docs/API/Conversion.md#currency) | **POST** /currency | 
[*Games*](src/Docs/API/Games.md) | [**epicgames**](src/Docs/API/Games.md#epicgames) | **GET** /epicgames/free | 
[*Mockup*](src/Docs/API/Mockup.md) | [**address**](src/Docs/API/Mockup.md#address) | **GET** /address | 
[*Mockup*](src/Docs/API/Mockup.md) | [**company**](src/Docs/API/Mockup.md#company) | **GET** /company | 
[*Mockup*](src/Docs/API/Mockup.md) | [**finance**](src/Docs/API/Mockup.md#finance) | **GET** /finance | 
[*Mockup*](src/Docs/API/Mockup.md) | [**git**](src/Docs/API/Mockup.md#git) | **GET** /git | 
[*Mockup*](src/Docs/API/Mockup.md) | [**internet**](src/Docs/API/Mockup.md#internet) | **GET** /internet | 
[*Mockup*](src/Docs/API/Mockup.md) | [**product**](src/Docs/API/Mockup.md#product) | **GET** /product | 
[*Mockup*](src/Docs/API/Mockup.md) | [**user**](src/Docs/API/Mockup.md#user) | **GET** /user | 
[*Mockup*](src/Docs/API/Mockup.md) | [**vehicle**](src/Docs/API/Mockup.md#vehicle) | **GET** /vehicle | 
[*Random*](src/Docs/API/Random.md) | [**string**](src/Docs/API/Random.md#string) | **GET** /string | 
[*Random*](src/Docs/API/Random.md) | [**number**](src/Docs/API/Random.md#number) | **GET** /number | 
[*UrlShortener*](src/Docs/API/UrlShortener.md) | [**getAll**](src/Docs/API/UrlShortener.md#getAll) | **GET** /urlshorteners | 
[*UrlShortener*](src/Docs/API/UrlShortener.md) | [**create**](src/Docs/API/UrlShortener.md#create) | **POST** /urlshortener | 
[*UrlShortener*](src/Docs/API/UrlShortener.md) | [**delete**](src/Docs/API/UrlShortener.md#delete) | **DELETE** /urlshortener/{id} | 
[*Utility*](src/Docs/API/Utility.md) | [**compile**](src/Docs/API/Utility.md#compile) | **POST** /compile | 
[*Utility*](src/Docs/API/Utility.md) | [**decode**](src/Docs/API/Utility.md#decode) | **POST** /decode | 
[*Utility*](src/Docs/API/Utility.md) | [**encode**](src/Docs/API/Utility.md#encode) | **POST** /encode | 
[*Utility*](src/Docs/API/Utility.md) | [**geoip**](src/Docs/API/Utility.md#geoip) | **GET** /geoip/{ip} | 
[*Utility*](src/Docs/API/Utility.md) | [**hash**](src/Docs/API/Utility.md#hash) | **POST** /hash | 
[*Utility*](src/Docs/API/Utility.md) | [**qrcode**](src/Docs/API/Utility.md#qrcode) | **POST** /qrcode |
[*Validation*](src/Docs/API/Validation.md) | [**bic**](src/Docs/API/Validation.md#bic) | **POST** /bic | 
[*Validation*](src/Docs/API/Validation.md) | [**btc**](src/Docs/API/Validation.md#btc) | **POST** /btc | 
[*Validation*](src/Docs/API/Validation.md) | [**creditcard**](src/Docs/API/Validation.md#creditcard) | **POST** /creditcard | 
[*Validation*](src/Docs/API/Validation.md) | [**ean**](src/Docs/API/Validation.md#ean) | **POST** /ean | 
[*Validation*](src/Docs/API/Validation.md) | [**email**](src/Docs/API/Validation.md#email) | **POST** /email | 
[*Validation*](src/Docs/API/Validation.md) | [**eth**](src/Docs/API/Validation.md#eth) | **POST** /eth | 
[*Validation*](src/Docs/API/Validation.md) | [**fqdn**](src/Docs/API/Validation.md#fqdn) | **POST** /fqdn | 
[*Validation*](src/Docs/API/Validation.md) | [**iban**](src/Docs/API/Validation.md#iban) | **POST** /iban | 
[*Validation*](src/Docs/API/Validation.md) | [**identitycard**](src/Docs/API/Validation.md#identitycard) | **POST** /identitycard | 
[*Validation*](src/Docs/API/Validation.md) | [**imei**](src/Docs/API/Validation.md#imei) | **POST** /imei | 
[*Validation*](src/Docs/API/Validation.md) | [**ip**](src/Docs/API/Validation.md#ip) | **POST** /ip | 
[*Validation*](src/Docs/API/Validation.md) | [**isbn**](src/Docs/API/Validation.md#isbn) | **POST** /isbn | 
[*Validation*](src/Docs/API/Validation.md) | [**isin**](src/Docs/API/Validation.md#isin) | **POST** /isin | 
[*Validation*](src/Docs/API/Validation.md) | [**issn**](src/Docs/API/Validation.md#issn) | **POST** /issn | 
[*Validation*](src/Docs/API/Validation.md) | [**licenseplate**](src/Docs/API/Validation.md#licenseplate) | **POST** /licenseplate | 
[*Validation*](src/Docs/API/Validation.md) | [**mac**](src/Docs/API/Validation.md#mac) | **POST** /mac | 
[*Validation*](src/Docs/API/Validation.md) | [**magnet**](src/Docs/API/Validation.md#magnet) | **POST** /magnet | 
[*Validation*](src/Docs/API/Validation.md) | [**mimetype**](src/Docs/API/Validation.md#mimetype) | **POST** /mimetype | 
[*Validation*](src/Docs/API/Validation.md) | [**password**](src/Docs/API/Validation.md#password) | **POST** /password | 
[*Validation*](src/Docs/API/Validation.md) | [**postalcode**](src/Docs/API/Validation.md#postalcode) | **POST** /postalcode | 
[*Validation*](src/Docs/API/Validation.md) | [**semver**](src/Docs/API/Validation.md#semver) | **POST** /semver | 
[*Validation*](src/Docs/API/Validation.md) | [**tax**](src/Docs/API/Validation.md#tax) | **POST** /tax | 
[*Validation*](src/Docs/API/Validation.md) | [**uuid**](src/Docs/API/Validation.md#uuid) | **POST** /uuid | 

## Documentation For Models

 - [Response](src/Docs/Models/Response.md)
  
## Documentation For Authorization

## x-api-key

- **Type**: x-api-key
- **Authorization**: in header