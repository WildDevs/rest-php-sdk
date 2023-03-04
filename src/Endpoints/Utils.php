<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Utils
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

  public function encode($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/public/utils/encode', $payload, $this->getApi()->getHeaders());
  }

  public function decode($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/public/utils/decode', $payload, $this->getApi()->getHeaders());
  }

  public function hash($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/public/utils/hash', $payload, $this->getApi()->getHeaders());
  }

  public function geoip($ip): Response {
    return $this->getApi()->getHttpClient()->get('/member/geoip/'.$ip, $payload, $this->getApi()->getHeaders());
  }

  public function qrcode($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/members/qrcode', $payload, $this->getApi()->getHeaders());
  }
}