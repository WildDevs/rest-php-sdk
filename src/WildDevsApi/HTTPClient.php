<?php

namespace WildDevsApi;

use InvalidArgumentException;
use WildDevsApi\Errors\Error;
use WildDevsApi\Models\Response;

/**
 * HTTPClient is an abstract client implementation for http
 */
class HttpClient
{
    private $_baseURL;
    private $_timeout = 30;

    public function __construct($baseURL, $timeout = 30) {
        $this->_baseURL = $baseURL;
        if ($timeout > 0) $this->_timeout = $timeout;
    }

    public function request($method = "GET", $url = "", $data = null, $headers = []) {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->_timeout);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->_timeout);

        switch ($method) {
            case 'GET':
                curl_setopt($curl, CURLOPT_HTTPGET, true);
                break;
            case 'PUT':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            case 'DELETE':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                curl_setopt($curl, CURLOPT_HTTPGET, true);
        }

        $response = curl_exec($curl);
        if ($response === false) throw new Errors\HttpException(curl_error($curl));
        
        curl_close($curl);

        $resp = json_decode($response);
        if (!$resp) throw new Error("Invalid response: " . $response);

        // marshal received response to base Response object
        $parsedResponse = new Response();
        $parsedResponse->fromJSON($resp);

        $errors = Error::parseErrors($parsedResponse);
        if ($errors) {
            throw $errors;
        }

        return $parsedResponse;
    }

    public function get($url, $headers = []) {
        return $this->request("GET", $url, null, $headers);
    }

    public function post($url, $data, $headers = []) {
        return $this->request("POST", $url, $data, $headers);
    }

    public function put($url, $data, $headers = []) {
        return $this->request("PUT", $url, $data, $headers);
    }

    public function delete($url, $headers = []) {
        return $this->request("DELETE", $url, null, $headers);
    }
}
