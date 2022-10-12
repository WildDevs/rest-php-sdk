<?php

namespace WildDevs;

use Exception;
use WildDevs\Models\Response;
use WildDevs\Endpoints\Auth;

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

  public function setHttpClient(HttpClient $httpClient): void {
    $this->_httpClient = $httpClient;
  }

  public function getApiKey(): string {
    return $this->_apiKey;
  }

  public function setApiKey(string $apiKey): void {
    $this->_apiKey = $apiKey;
  }

  public function Auth(): Auth {
    return $this->_auth;
  }

  private function setAuth(Auth $auth): void {
    $this->_auth = $auth;
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
    $this->setAuth(new Auth($this->getHttpClient()));
  }

  public function welcome(): Response {
    return $this->getHttpClient()->get("/", $this->getHeaders());
  }
}
