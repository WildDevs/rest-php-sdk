<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\HttpClient;
use WildDevs\Models\Response;

class Auth
{
  private $_httpClient;

  private function getHttpClient(): HttpClient {
    return $this->_httpClient;
  }

  private function setHttpClient(HttpClient $httpClient): void {
    $this->_httpClient = $httpClient;
  }

  public function __construct(HttpClient $httpClient) {
    $this->setHttpClient($httpClient);
  }

  public function test(): Response {
    return $this->getHttpClient()->get('/public');
  }

  public function register(){

  }
}