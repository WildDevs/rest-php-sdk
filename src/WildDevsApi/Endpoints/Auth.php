<?php

namespace WildDevsApi\Endpoints;

use Exception;
use WildDevsApi\HttpClient;
use WildDevsApi\Models\Response;

class Auth
{
  private $_httpClient;

  private function getHttpClient(): WildDevsApi\HttpClient {
    return $this->_httpClient;
  }

  private function setHttpClient(WildDevsApi\HttpClient $httpClient) {
    $this->_httpClient = $httpClient;
    return $this;
  }

  public function __construct(WildDevsApi\HttpClient $httpClient) {
    $this->setHttpClient($httpClient);
  }

  public function test(): Response {
    return $this->getHttpClient()->get('/public');
  }

  public function register(){

  }
}