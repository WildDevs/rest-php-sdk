<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Conversion
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

  public function unit($payload = []) {
    return $this->getApi()->getHttpClient()->post('/unit', $payload, $this->getApi()->getHeaders());
  }

  public function currency($payload = []) {
    return $this->getApi()->getHttpClient()->post('/currency', $payload, $this->getApi()->getHeaders());
  }
}