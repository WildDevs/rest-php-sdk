# WildDevs\Endpoints\Validation

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bic**](Validation.md#bic) | **POST** /bic | 
[**btc**](Validation.md#btc) | **POST** /btc | 
[**creditcard**](Validation.md#creditcard) | **POST** /creditcard | 
[**ean**](Validation.md#ean) | **POST** /ean | 
[**email**](Validation.md#email) | **POST** /email | 
[**eth**](Validation.md#eth) | **POST** /eth | 
[**fqdn**](Validation.md#fqdn) | **POST** /fqdn | 
[**iban**](Validation.md#iban) | **POST** /iban | 
[**identitycard**](Validation.md#identitycard) | **POST** /identitycard | 
[**imei**](Validation.md#imei) | **POST** /imei | 
[**ip**](Validation.md#ip) | **POST** /ip | 
[**isbn**](Validation.md#isbn) | **POST** /isbn | 
[**isin**](Validation.md#isin) | **POST** /isin | 
[**issn**](Validation.md#issn) | **POST** /issn | 
[**licenseplate**](Validation.md#licenseplate) | **POST** /licenseplate | 
[**mac**](Validation.md#mac) | **POST** /mac | 
[**magnet**](Validation.md#magnet) | **POST** /magnet | 
[**mimetype**](Validation.md#mimetype) | **POST** /mimetype | 
[**password**](Validation.md#password) | **POST** /password | 
[**postalcode**](Validation.md#postalcode) | **POST** /postalcode | 
[**semver**](Validation.md#semver) | **POST** /semver | 
[**tax**](Validation.md#tax) | **POST** /tax | 
[**uuid**](Validation.md#uuid) | **POST** /uuid | 

# **bic**
> WildDevs\Models\Response bic($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "bic" => "bic address",
    ];

    try {
        $response = $api->validate()->bic($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->bic: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `bic` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **bic**
> WildDevs\Models\Response bic($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "bic" => "bic address",
    ];

    try {
        $response = $api->validate()->bic($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->bic: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `bic` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **btc**
> WildDevs\Models\Response btc($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "address" => "btc address",
    ];

    try {
        $response = $api->validate()->btc($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->btc: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `address` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **creditcard**
> WildDevs\Models\Response creditcard($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "number" => "creditcard number",
    ];

    try {
        $response = $api->validate()->creditcard($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->creditcard: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `number` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **ean**
> WildDevs\Models\Response ean($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

The International Article Number (also known as European Article Number or EAN) is a standard describing a barcode symbology and numbering system used in global trade to identify a specific retail product type, in a specific packaging configuration, from a specific manufacturer.

The most commonly used EAN standard is the thirteen-digit EAN-13, a superset of the original 12-digit Universal Product Code (UPC-A) standard developed in 1970 by George J. Laurer.[1] An EAN-13 number includes a 3-digit GS1 prefix (indicating country of registration or special type of product). A prefix with a first digit of "0" indicates a 12-digit UPC-A code follows. A prefix with first two digits of "45" or "49" indicates a Japanese Article Number (JAN) follows.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "ean" => "ean address",
    ];

    try {
        $response = $api->validate()->ean($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->ean: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `ean` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **email**
> WildDevs\Models\Response email($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

Valid payload options: "email", "allow_display_name", "require_display_name", "allow_utf8_local_part", "allow_ip_domain", "domain_specific_validation", "blacklisted_chars", "host_blacklist", "host_whitelist", "mx"   

If **allow_display_name** is set to true, the validator will also match Display Name <email-address>. 

If **require_display_name** is set to true, the validator will reject strings without the format Display Name <email-address>. 

If **allow_utf8_local_part** is set to false, the validator will not allow any non-English UTF8 character in email address' local part. 

If **allow_ip_domain** is set to true, the validator will allow IP addresses in the host part.

If **domain_specific_validation** is true, some additional validation will be enabled, e.g. disallowing certain syntactically valid email addresses that are rejected by Gmail. 

If **blacklisted_chars** receives a string, then the validator will reject emails that include any of the characters in the string, in the name part. 

If **host_blacklist** is set to an array of strings and the part of the email after the @ symbol matches one of the strings defined in it, the validation fails. 

If **host_whitelist** is set to an array of strings and the part of the email after the @ symbol matches none of the strings defined in it, the validation fails.

if **mx** is set to true, the validator will do a mx record check on the domain of the email.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "email" => "email address",
    ];

    try {
        $response = $api->validate()->email($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->email: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with various fields, see above | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **eth**
> WildDevs\Models\Response eth($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "address" => "eth address",
    ];

    try {
        $response = $api->validate()->eth($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->eth: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `address` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **fqdn**
> WildDevs\Models\Response fqdn($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "fqdn" => "fqdn address",
    ];

    try {
        $response = $api->validate()->fqdn($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->fqdn: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `fqdn` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **iban**
> WildDevs\Models\Response iban($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "iban" => "iban address",
    ];

    try {
        $response = $api->validate()->iban($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->iban: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `iban` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **identitycard**
> WildDevs\Models\Response identitycard($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "identity" => "identitycard number",
    ];

    try {
        $response = $api->validate()->identitycard($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->identitycard: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `identitycard` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **iban**
> WildDevs\Models\Response iban($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "iban" => "iban address",
    ];

    try {
        $response = $api->validate()->iban($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->iban: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `fqdn` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **imei**
> WildDevs\Models\Response imei($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

IMEI should be of format `###############` or `##-######-######-#`

options: **allow_hyphens** 

Defaults to first format. If **allow_hyphens** is set to true, the validator will validate the second format.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "imei" => "imei number",
        "allow_hyphens" => true
    ];

    try {
        $response = $api->validate()->imei($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->imei: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `imei` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **ip**
> WildDevs\Models\Response ip($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "ip" => "ip number"
    ];

    try {
        $response = $api->validate()->ip($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->ip: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `ip` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **isbn**
> WildDevs\Models\Response isbn($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "isbn" => "isbn number"
    ];

    try {
        $response = $api->validate()->isbn($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->isbn: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `isbn` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **isin**
> WildDevs\Models\Response isin($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "isin" => "isin number"
    ];

    try {
        $response = $api->validate()->isin($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->isin: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `isin` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **issn**
> WildDevs\Models\Response issn($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "issn" => "issn number"
    ];

    try {
        $response = $api->validate()->issn($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->issn: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `issn` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **licenseplate**
> WildDevs\Models\Response licenseplate($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

Supported locales: 
```
    cs-CZ
    de-DE
    de-LI
    en-IN
    es-AR
    hu-HU
    pt-BR
    pt-PT
    sq-AL
    sv-SE 
    any
```

If `any` is used, endpoint will check if any of the locales match.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "licenseplate" => "licenseplate number",
        "locale": "de-DE"
    ];

    try {
        $response = $api->validate()->licenseplate($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->licenseplate: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `licenseplate` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **mac**
> WildDevs\Models\Response mac($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

options: **no_separators**
    
If **no_separators** is true, the validator will allow MAC addresses without separators. Also, it allows the use of hyphens, spaces or dots e.g. `01 02 03 04 05 ab`, `01-02-03-04-05-ab` or `0102.0304.05ab`. The options also allow a EUI property to specify if it needs to be validated against EUI-48 or EUI-64. The accepted values of EUI are 48, 64.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "mac" => "mac address"
    ];

    try {
        $response = $api->validate()->mac($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->mac: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `mac` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **magnet**
> WildDevs\Models\Response magnet($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "magnet" => "magnet address"
    ];

    try {
        $response = $api->validate()->magnet($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->magnet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `magnet` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **mimetype**
> WildDevs\Models\Response mimetype($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

A media type (also known as a MIME type) is a two-part identifier for file formats and format contents transmitted on the Internet. The Internet Assigned Numbers Authority (IANA) is the official authority for the standardization and publication of these classifications. Media types were originally defined in Request for Comments RFC 2045 (MIME) 
    
Format of Internet Message Bodies (Nov 1996) in November 1996 as a part of the MIME (Multipurpose Internet Mail Extensions) specification, for denoting type of email message content and attachments; hence the original name, MIME type. Media types are also used by other internet protocols such as HTTP and document file formats such as HTML, for similar purposes.

**Common examples:**

```
application/javascript
application/json
application/ld+json
application/msword (.doc)
application/pdf
application/sql
application/vnd.api+json
application/vnd.ms-excel (.xls)
application/vnd.ms-powerpoint (.ppt)
application/vnd.oasis.opendocument.text (.odt)
application/vnd.openxmlformats-officedocument.presentationml.presentation (.pptx)
application/vnd.openxmlformats-officedocument.spreadsheetml.sheet (.xlsx)
application/vnd.openxmlformats-officedocument.wordprocessingml.document (.docx)
application/x-www-form-urlencoded
application/xml
application/zip
application/zstd (.zst)
audio/mpeg
audio/ogg
image/avif
image/jpeg (.jpg, .jpeg, .jfif, .pjpeg, .pjp)
image/png
image/svg+xml (.svg)
model/obj (.obj)
multipart/form-data
text/plain
text/css
text/csv
text/html
text/xml
```

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "mimetype" => "mimetype"
    ];

    try {
        $response = $api->validate()->mimetype($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->mimetype: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `mimetype` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **password**
> WildDevs\Models\Response password($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

Allows for custom requirements or scoring rules. If `returnScore` is true, then the function returns an integer score for the password rather than a boolean.

Options: "minLength", "minLowercase", "minUppercase", "minNumbers", "minSymbols", "returnScore", "pointsPerUnique", "pointsPerRepeat", "pointsForContainingLower", "pointsForContainingUpper", "pointsForContainingNumber", "pointsForContainingSymbol"

Default options are:

{ minLength: 8, minLowercase: 1, minUppercase: 1, minNumbers: 1, minSymbols: 1, returnScore: false, pointsPerUnique: 1, pointsPerRepeat: 0.5, pointsForContainingLower: 10, pointsForContainingUpper: 10, pointsForContainingNumber: 10, pointsForContainingSymbol: 10 }
      
### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "password" => "my-super-secret-password",
        "minLength" => 8,
        "minLowercase" => 2,
        "minUppercase" => 2,
        "minNumbers" => 1,
        "minSymbols" => 0,
        "returnScore" => true,
        "pointsPerUnique" => 1,
        "pointsPerRepeat" => 0.5,
        "pointsForContainingLower" => 10,
        "pointsForContainingUpper" => 10,
        "pointsForContainingNumber" => 10,
        "pointsForContainingSymbol" => 10
    ];

    try {
        $response = $api->validate()->password($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->password: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with various fields, see above | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **postalcode**
> WildDevs\Models\Response postalcode($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

Supported locales:
```
AD
AT
AU
AZ
BA
BE
BG
BR
BY
CA
CH
CN
CZ
DE
DK
DO
DZ
EE
ES
FI
FR
GB
GR
HR
HT
HU
ID
IE
IL
IN
IR
IS
IT
JP
KE
KR
LI
LK
LT
LU
LV
MG
MT
MX
MY
NL
NO
NP
NZ
PL
PR
PT
RO
RU
SA
SE
SG
SI
SK
TH
TN
TW
UA
US
ZA
ZM 
any 
```

If `any` is used, endpoint will check if any of the locales match.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "postalcode" => "postalcode",
        "locale" => "DE"
    ];

    try {
        $response = $api->validate()->postalcode($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->postalcode: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `postalcode` and `locale` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **semver**
> WildDevs\Models\Response semver($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "semver" => "semver"
    ];

    try {
        $response = $api->validate()->semver($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->semver: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `semver` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **tax**
> WildDevs\Models\Response tax($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

Supported locales: 
```
bg-BG
cs-CZ
de-AT
de-DE
dk-DK
el-CY
el-GR
en-CA
en-GB
en-IE
en-US
es-ES
et-EE
fi-FI
fr-BE
fr-CA
fr-FR
fr-LU
hr-HR
hu-HU
it-IT
lb-LU
lt-LT
lv-LV
mt-MT
nl-BE
nl-NL
pl-PL
pt-BR
pt-PT
ro-RO
sk-SK
sl-SI
sv-SE
```

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "tax" => "tax"
        "locale" => "de-DE"
    ];

    try {
        $response = $api->validate()->tax($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->tax: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `tax` and `locale` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)

# **uuid**
> WildDevs\Models\Response uuid($payload)

`Member` & `Subscriber` Endpoint. API-Key is needed.

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "uuid" => "uuid"
    ];

    try {
        $response = $api->validate()->uuid($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->validate()->uuid: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `uuid` field | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../README.md)