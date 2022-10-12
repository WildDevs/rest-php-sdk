<?php

namespace WildDevsApi;

use Exception;
use WildDevsApi\HttpClient;
use WildDevsApi\Models\Response;
use WildDevsApi\Endpoints\Auth;

/**
 * Wild Devs Api
 */
class API {
  const SDK_VERSION = "1.0";
  const DEFAULT_TIMEOUT = 30;
  const ENDPOINT = "https://api.wild-devs.net/v1";

  private $_httpClient;
  private $_apiKey;

  private $_auth;

  public function getHttpClient(): HttpClient {
    return $this->_httpClient;
  }

  public function setHttpClient(HttpClient $httpClient) {
    $this->_httpClient = $httpClient;
    return $this;
  }

  public function getApiKey(): string {
    return $this->_apiKey;
  }

  public function setApiKey(string $apiKey) {
    $this->_apiKey = $apiKey;
    return $this;
  }

  public function Auth(): Auth {
    return $this->_auth;
  }

  private function setAuth(Auth $auth) {
    return $this->_auth;
  }

  public function getHeaders(): array {
    $headers = [
      'User-Agent: Wild Devs API v' . self::SDK_VERSION . ' PHP SDK',
      'Accept: application/json', 
      'Content-Type: application/json'
    ];

    if($this->getApiKey()) $headers[] = "x-api-key: " . $this->getApiKey();
    
    return $headers;
  }

  public function __construct() {
    $this->setHttpClient(new HttpClient(self::ENDPOINT, self::DEFAULT_TIMEOUT));
    $this->setAuth(new Auth());
  }

  public function welcome(): Response {
    return $this->getHttpClient()->get("/");
  }
}
