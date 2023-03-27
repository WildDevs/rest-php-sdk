# Response

## Methods
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **any** | Returns the data according to the requested endpoint. It can be any type, please read the official api docs for the specific endpoint. |
**getContent($raw)** | **array**, **string** | Returns the whole api response as **array** with `status`, `code`, `message` and `data` (if `code` is `200`). In case of an error, further information such as `note` is output. Please read the official api docs for the specific endpoint. If `raw` is set to `true` the content will be returned as **json string** | 
**getHeaders($raw)** | **array**, **string** | Returns the api response headers, including x-ratelimit fields and further information. If `raw` is set to `true` the content will be returned as **string** | 

[[Back to README]](../../README.md)