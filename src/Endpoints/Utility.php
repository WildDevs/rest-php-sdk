<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Utility
{
  private $_api;

  private function getApi(): API {
    return $this->_api;
  }

  private function setApi(API &$api): void {
    $this->_api = $api;
  }

  public function __construct(API &$api) {
    $this->setApi($api);
  }

  public function encode($payload = []) {
    return $this->getApi()->getHttpClient()->post('/encode', $payload, $this->getApi()->getHeaders());
  }

  public function decode($payload = []) {
    return $this->getApi()->getHttpClient()->post('/decode', $payload, $this->getApi()->getHeaders());
  }

  public function hash($payload = []) {
    return $this->getApi()->getHttpClient()->post('/hash', $payload, $this->getApi()->getHeaders());
  }

  public function geoip($ip) {
    return $this->getApi()->getHttpClient()->get('geoip/'.$ip, $payload, $this->getApi()->getHeaders());
  }

  public function qrcode($payload = []) {
    return $this->getApi()->getHttpClient()->post('/qrcode', $payload, $this->getApi()->getHeaders());
  }

  public function compile($payload = []) {
    return $this->getApi()->getHttpClient()->post('/compile', $payload, $this->getApi()->getHeaders());
  }
}