<?php

namespace WildDevs;

use Exception;
use WildDevs\Models\Response;
use WildDevs\Endpoints\{ Random, Utils, Validate };

/**
 * Wild Devs Api
 */
class API {
  const SDK_VERSION = "1.1";
  const DEFAULT_TIMEOUT = 30;
  const ENDPOINT = "https://api.wild-devs.net/v1";
  
  private $_httpClient;
  private $_apiKey;
  private $_headers;
  private $_random;
  private $_utils;
  private $_validate;

  public function getHttpClient() {
    return $this->_httpClient;
  }

  public function setHttpClient(HttpClient $httpClient) {
    $this->_httpClient = $httpClient;
  }

  public function getApiKey() {
    return $this->_apiKey;
  }

  public function setApiKey(string $key, string $secret) {
    $this->_apiKey = \base64_encode($key.":".$secret);

    foreach($this->getHeaders() as $k => $v) {
      if (preg_match("/x-api-key/i", $v)) {
        unset($this->_headers[$k]);
        break;
      }
    }

    $this->setHeaders(array_merge($this->getHeaders(), ["x-api-key" => $this->getApiKey()]));
  }

  public function getHeaders(): array {
    return $this->_headers;
  }

  public function setHeaders(array $headers) {
    $this->_headers = $headers;
  }
  
  public function random(): Random {
    return $this->_random;
  }

  public function setRandom(Random $random) {
    $this->_random = $random;
  }

  public function utils(): Utils {
    return $this->_utils;
  }

  public function setUtils(Utils $utils) {
    $this->_utils = $utils;
  }

  public function validate(): Validate {
    return $this->_validate;
  }

  public function setValidate(Validate $validate) {
    $this->_validate = $validate;
  }

  public function __construct() {
    $this->setHeaders([
      'User-Agent' => 'Wild Devs API v' . self::SDK_VERSION . ' PHP SDK',
      'Accept' => 'application/json', 
      'Content-Type' => 'application/json'
    ]);
    
    $this->setHttpClient(new HttpClient(self::ENDPOINT, self::DEFAULT_TIMEOUT));
    $this->setRandom(new Random($this));
    $this->setUtils(new Utils($this));
    $this->setValidate(new Validate($this));
  }
}
