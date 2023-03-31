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

  public function dictionary($payload = []) {
    return $this->getApi()->getHttpClient()->post('/dictionary', $payload, $this->getApi()->getHeaders());
  }

  public function synonyms($payload = []) {
    return $this->getApi()->getHttpClient()->post('/synonyms', $payload, $this->getApi()->getHeaders());
  }
}