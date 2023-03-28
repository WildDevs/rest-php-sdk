<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Random
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

  public function joke() {
    return $this->getApi()->getHttpClient()->get('/joke', $payload, $this->getApi()->getHeaders());
  }

  public function string($payload = []) {
    return $this->getApi()->getHttpClient()->post('/string', $payload, $this->getApi()->getHeaders());
  }

  public function number($payload = []) {
    return $this->getApi()->getHttpClient()->post('/number', $payload, $this->getApi()->getHeaders());
  }
}