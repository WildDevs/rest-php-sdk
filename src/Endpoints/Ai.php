<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Ai
{
  private $_api;

  public function getApi(): API {
    return $this->_api;
  }

  private function setApi(API &$api): void {
    $this->_api = $api;
  }

  public function __construct(API &$api) {
    $this->setApi($api);
  }

  public function chat($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/subscriber/chat', $payload, $this->getApi()->getHeaders());
  }

  public function image($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/subscriber/number', $payload, $this->getApi()->getHeaders());
  }
}