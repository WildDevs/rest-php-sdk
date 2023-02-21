<?php

namespace WildDevs;

use InvalidArgumentException;
use WildDevs\Errors\Error;
use WildDevs\Errors\HttpException;
use WildDevs\Models\Response;
use WildDevs\Helpers\CurlHelper;

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
        $timeout > 0 ? $this->setTimeout($timeout) : $this->setTimeout(30);
    }

    public function request($method = "GET", $endpoint = "", $data = null, $headers = []) {
        $options = null;

        if ($method != "GET") {
            $options = array(
                CURLOPT_CUSTOMREQUEST => $method
            );     
        }

        $result = CurlHelper::factory()->setUrl($this->getBaseURL().$endpoint)->setHeaders($headers)->setPostFields($data)->setOptions($options)->exec();
        $response = new Response($result);

        return $response;
    }

    public function get($endpoint, $headers = []) {
        return $this->request("GET", $endpoint, null, $headers);
    }

    public function post($endpoint, $data, $headers = []) {
        return $this->request("POST", $endpoint, $data, $headers);
    }

    public function put($endpoint, $data, $headers = []) {
        return $this->request("PUT", $endpoint, $data, $headers);
    }

    public function delete($endpoint, $headers = []) {
        return $this->request("DELETE", $endpoint, null, $headers);
    }
}
