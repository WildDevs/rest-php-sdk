<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class NetTools
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

  public function dnslookup($query) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/dnslookup?'.$params, $this->getApi()->getHeaders());
  }

  public function ipinfo($query) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/ipinfo?'.$params, $this->getApi()->getHeaders());
  }

  public function whatsmyip() {
    return $this->getApi()->getHttpClient()->get('/whatsmyip', $this->getApi()->getHeaders());
  }
}