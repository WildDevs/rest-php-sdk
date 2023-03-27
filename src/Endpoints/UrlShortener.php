<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class UrlShortener
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

  public function getAll() {
    return $this->getApi()->getHttpClient()->get('/urlshorteners', $this->getApi()->getHeaders());
  }

  public function delete($id) {
    return $this->getApi()->getHttpClient()->delete('/urlshortener/' . $id, $this->getApi()->getHeaders());
  }

  public function create($payload = []) {
    return $this->getApi()->getHttpClient()->post('/urlshortener', $payload, $this->getApi()->getHeaders());
  }
}