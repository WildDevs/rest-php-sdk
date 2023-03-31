# WildDevs\Endpoints\AI

All URIs are relative to *https://api.wild-devs.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dictionary**](AI.md#dictionary) | **POST** /dictionary | 
[**synonyms**](AI.md#synonyms) | **POST** /synonyms | 

# **dictionary**
> WildDevs\Models\Response dictionary($payload)

`Subscriber` Only Endpoint. API-Key is needed. This endpoint consumes AI tokens (depends on the output length).

Provide a word + language and the AI will describe the word. The output is in the same language as the word.

Supported languages:
```
Afrikaans
Albanian
Arabic
Armenian
Assamese
Azerbaijani
Basque
Belarusian
Bengali
Bosnian
Bulgarian
Burmese
Cantonese
Catalan
Cebuano
Chichewa
Chinese
Corsican
Croatian
Czech
Danish
Dutch
English
Esperanto
Estonian
Filipino
Finnish
French
Frisian
Galician
Georgian
German
Greek
Gujarati
Haitian Creole
Hausa
Hawaiian
Hebrew
Hindi
Hmong
Hungarian
Icelandic
Igbo
Indonesian
Irish
Italian
Japanese
Javanese
Kannada
Kazakh
Khmer
Kinyarwanda
Korean
Kurdish
Kyrgyz
Lao
Latin
Latvian
Lithuanian
Luxembourgish
Macedonian
Malagasy
Malay
Malayalam
Maltese
Maori
Marathi
Mongolian
Myanmar
Nepali
Norwegian
Nyanja
Odia
Pashto
Persian
Polish
Portuguese
Punjabi
Romanian
Russian
Samoan
Scots Gaelic
Serbian
Sesotho
Shona
Sindhi
Sinhala
Slovak
Slovenian
Somali
Spanish
Sundanese
Swahili
Swedish
Tajik
Tamil
Tatar
Telugu
Thai
Turkish
Turkmen
Ukrainian
Urdu
Uyghur
Uzbek
Vietnamese
Welsh
Xhosa
Yiddish
Yoruba
Zulu
```

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "word" => "Car",
        "language" => "English"
    ];

    try {
        $response = $api->ai()->dictionary($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->ai()->dictionary: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `word` and `language` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../../README.md)

# **synonyms**
> WildDevs\Models\Response synonyms($payload)

`Subscriber` Only Endpoint. API-Key is needed. This endpoint consumes AI tokens (depends on the output length).

Provide a word + language and the AI will find synonyms for the word. The output is in the same language as the word.

Supported languages:
```
Afrikaans
Albanian
Arabic
Armenian
Assamese
Azerbaijani
Basque
Belarusian
Bengali
Bosnian
Bulgarian
Burmese
Cantonese
Catalan
Cebuano
Chichewa
Chinese
Corsican
Croatian
Czech
Danish
Dutch
English
Esperanto
Estonian
Filipino
Finnish
French
Frisian
Galician
Georgian
German
Greek
Gujarati
Haitian Creole
Hausa
Hawaiian
Hebrew
Hindi
Hmong
Hungarian
Icelandic
Igbo
Indonesian
Irish
Italian
Japanese
Javanese
Kannada
Kazakh
Khmer
Kinyarwanda
Korean
Kurdish
Kyrgyz
Lao
Latin
Latvian
Lithuanian
Luxembourgish
Macedonian
Malagasy
Malay
Malayalam
Maltese
Maori
Marathi
Mongolian
Myanmar
Nepali
Norwegian
Nyanja
Odia
Pashto
Persian
Polish
Portuguese
Punjabi
Romanian
Russian
Samoan
Scots Gaelic
Serbian
Sesotho
Shona
Sindhi
Sinhala
Slovak
Slovenian
Somali
Spanish
Sundanese
Swahili
Swedish
Tajik
Tamil
Tatar
Telugu
Thai
Turkish
Turkmen
Ukrainian
Urdu
Uyghur
Uzbek
Vietnamese
Welsh
Xhosa
Yiddish
Yoruba
Zulu
```

### Example
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api = new WildDevs\API();

    // Set your API-Key and API-Secret here
    $api->setApiKey('my-api-key', 'my-api-secret');

    $payload = [
        "word" => "Car",
        "language" => "English"
    ];

    try {
        $response = $api->ai()->synonyms($payload);
        $data = $response->getData();
        print_r($data);
    } catch (Exception $e) {
        echo 'Exception when calling api->ai()->synonyms: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**payload** | **array**| An array with `word` and `language` | [required]

### Return type

[**WildDevs\Models\Response**](../Models/Response.md)

[[Back to top]](#) [[Back to README]](../../../README.md)