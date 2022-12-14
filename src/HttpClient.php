<?php

namespace WildDevs;

use InvalidArgumentException;
use WildDevs\Errors\Error;
use WildDevs\Errors\HttpException;
use WildDevs\Models\Response;

class HttpClient
{
    private $_baseURL;
    private $_timeout = 30;

    public function getBaseURL() {
        return $this->_baseURL;
    }

    public function setBaseURL($baseURL) {
        $this->_baseURL = $baseURL;
    }

    public function getTimeout() {
        return $this->_timeout;
    }

    public function setTimeout($timeout) {
        $this->_timeout = $timeout;
    }

    public function __construct($baseURL, $timeout = 30) {
        $this->setBaseURL($baseURL);
        if ($timeout > 0) $this->setTimeout($timeout);
    }

    public function request($method = "GET", $url = "", $data = null, $headers = []) {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_URL, $this->getBaseURL().$url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->_timeout);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->_timeout);

        switch ($method) {
            case 'GET':
                curl_setopt($curl, CURLOPT_HTTPGET, true);
                break;
            case 'PUT':
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            case 'DELETE':
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                curl_setopt($curl, CURLOPT_HTTPGET, true);
        }

        $response = curl_exec($curl);
        if ($response === false){
          throw new HttpException(curl_error($curl).", Response: " . $response);
        }
        
        curl_close($curl);

        $resp = json_decode($response);
        if (!$resp) throw new Error("Invalid response: " . $response);

        $parsedResponse = new Response();
        $parsedResponse->fromJSON($resp);

        $errors = Error::parseErrors($parsedResponse);
        if ($errors) throw $errors;

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
