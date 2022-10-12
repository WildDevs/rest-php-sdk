<?php

namespace WildDevsApi\Endpoints;

use Exception;
use WildDevsApi\HttpClient;
use WildDevsApi\Models\Response;

class Auth
{
  private $_httpClient;

  private function getHttpClient(): HttpClient {
    return $this->_httpClient;
  }

  private function setHttpClient(HttpClient $httpClient) {
    $this->_httpClient = $httpClient;
    return $this;
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