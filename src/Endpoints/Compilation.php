<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Compilation
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

  public function compile($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/subscriber/compile', $payload, $this->getApi()->getHeaders());
  }
}