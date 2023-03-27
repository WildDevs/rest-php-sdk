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
[*Conversion*](Docs/API/Conversion.md) | [**unit**](Docs/API/Conversion.md#unit) | **POST** /unit | 
[*Conversion*](Docs/API/Conversion.md) | [**currency**](Docs/API/Conversion.md#currency) | **POST** /currency | 
[*Games*](Docs/API/Games.md) | [**epicgames**](Docs/API/Games.md#epicgames) | **GET** /epicgames/free | 
[*Mockup*](Docs/API/Mockup.md) | [**address**](Docs/API/Mockup.md#address) | **GET** /address | 
[*Mockup*](Docs/API/Mockup.md) | [**company**](Docs/API/Mockup.md#company) | **GET** /company | 
[*Mockup*](Docs/API/Mockup.md) | [**finance**](Docs/API/Mockup.md#finance) | **GET** /finance | 
[*Mockup*](Docs/API/Mockup.md) | [**git**](Docs/API/Mockup.md#git) | **GET** /git | 
[*Mockup*](Docs/API/Mockup.md) | [**internet**](Docs/API/Mockup.md#internet) | **GET** /internet | 
[*Mockup*](Docs/API/Mockup.md) | [**product**](Docs/API/Mockup.md#product) | **GET** /product | 
[*Mockup*](Docs/API/Mockup.md) | [**user**](Docs/API/Mockup.md#user) | **GET** /user | 
[*Mockup*](Docs/API/Mockup.md) | [**vehicle**](Docs/API/Mockup.md#vehicle) | **GET** /vehicle | 
[*Random*](Docs/API/Random.md) | [**string**](Docs/API/Random.md#string) | **GET** /string | 
[*Random*](Docs/API/Random.md) | [**number**](Docs/API/Random.md#number) | **GET** /number | 
[*UrlShortener*](Docs/API/UrlShortener.md) | [**getAll**](Docs/API/UrlShortener.md#getAll) | **GET** /urlshorteners | 
[*UrlShortener*](Docs/API/UrlShortener.md) | [**create**](Docs/API/UrlShortener.md#create) | **POST** /urlshortener | 
[*UrlShortener*](Docs/API/UrlShortener.md) | [**delete**](Docs/API/UrlShortener.md#delete) | **DELETE** /urlshortener/{id} | 
[*Utility*](Docs/API/Utility.md) | [**compile**](Docs/API/Utility.md#compile) | **POST** /compile | 
[*Utility*](Docs/API/Utility.md) | [**decode**](Docs/API/Utility.md#decode) | **POST** /decode | 
[*Utility*](Docs/API/Utility.md) | [**encode**](Docs/API/Utility.md#encode) | **POST** /encode | 
[*Utility*](Docs/API/Utility.md) | [**geoip**](Docs/API/Utility.md#geoip) | **GET** /geoip/{ip} | 
[*Utility*](Docs/API/Utility.md) | [**hash**](Docs/API/Utility.md#hash) | **POST** /hash | 
[*Utility*](Docs/API/Utility.md) | [**qrcode**](Docs/API/Utility.md#qrcode) | **POST** /qrcode |
[*Validation*](Docs/API/Validation.md) | [**bic**](Docs/API/Validation.md#bic) | **POST** /bic | 
[*Validation*](Docs/API/Validation.md) | [**btc**](Docs/API/Validation.md#btc) | **POST** /btc | 
[*Validation*](Docs/API/Validation.md) | [**creditcard**](Docs/API/Validation.md#creditcard) | **POST** /creditcard | 
[*Validation*](Docs/API/Validation.md) | [**ean**](Docs/API/Validation.md#ean) | **POST** /ean | 
[*Validation*](Docs/API/Validation.md) | [**email**](Docs/API/Validation.md#email) | **POST** /email | 
[*Validation*](Docs/API/Validation.md) | [**eth**](Docs/API/Validation.md#eth) | **POST** /eth | 
[*Validation*](Docs/API/Validation.md) | [**fqdn**](Docs/API/Validation.md#fqdn) | **POST** /fqdn | 
[*Validation*](Docs/API/Validation.md) | [**iban**](Docs/API/Validation.md#iban) | **POST** /iban | 
[*Validation*](Docs/API/Validation.md) | [**identitycard**](Docs/API/Validation.md#identitycard) | **POST** /identitycard | 
[*Validation*](Docs/API/Validation.md) | [**imei**](Docs/API/Validation.md#imei) | **POST** /imei | 
[*Validation*](Docs/API/Validation.md) | [**ip**](Docs/API/Validation.md#ip) | **POST** /ip | 
[*Validation*](Docs/API/Validation.md) | [**isbn**](Docs/API/Validation.md#isbn) | **POST** /isbn | 
[*Validation*](Docs/API/Validation.md) | [**isin**](Docs/API/Validation.md#isin) | **POST** /isin | 
[*Validation*](Docs/API/Validation.md) | [**issn**](Docs/API/Validation.md#issn) | **POST** /issn | 
[*Validation*](Docs/API/Validation.md) | [**licenseplate**](Docs/API/Validation.md#licenseplate) | **POST** /licenseplate | 
[*Validation*](Docs/API/Validation.md) | [**mac**](Docs/API/Validation.md#mac) | **POST** /mac | 
[*Validation*](Docs/API/Validation.md) | [**magnet**](Docs/API/Validation.md#magnet) | **POST** /magnet | 
[*Validation*](Docs/API/Validation.md) | [**mimetype**](Docs/API/Validation.md#mimetype) | **POST** /mimetype | 
[*Validation*](Docs/API/Validation.md) | [**password**](Docs/API/Validation.md#password) | **POST** /password | 
[*Validation*](Docs/API/Validation.md) | [**postalcode**](Docs/API/Validation.md#postalcode) | **POST** /postalcode | 
[*Validation*](Docs/API/Validation.md) | [**semver**](Docs/API/Validation.md#semver) | **POST** /semver | 
[*Validation*](Docs/API/Validation.md) | [**tax**](Docs/API/Validation.md#tax) | **POST** /tax | 
[*Validation*](Docs/API/Validation.md) | [**uuid**](Docs/API/Validation.md#uuid) | **POST** /uuid | 

## Documentation For Models

 - [Response](Models/Response.md)
  
## Documentation For Authorization

## x-api-key

- **Type**: x-api-key
- **Authorization**: in header