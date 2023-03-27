<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Games
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

  public function epicgames($type = "free") {
    return $this->getApi()->getHttpClient()->get('/epicgames/'.$type, $this->getApi()->getHeaders());
  }
}