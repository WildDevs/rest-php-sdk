<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Mockup
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

  public function address($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/address?'.$params, $this->getApi()->getHeaders());
  }

  public function company($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/company?'.$params, $this->getApi()->getHeaders());
  }

  public function finance($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/finance?'.$params, $this->getApi()->getHeaders());
  }

  public function git($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/git?'.$params, $this->getApi()->getHeaders());
  }

  public function internet($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/internet?'.$params, $this->getApi()->getHeaders());
  }

  public function product($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/product?'.$params, $this->getApi()->getHeaders());
  }

  public function user($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/user?'.$params, $this->getApi()->getHeaders());
  }

  public function vehicle($query = []) {
    $params = \http_build_query($query);
    return $this->getApi()->getHttpClient()->get('/vehicle?'.$params, $this->getApi()->getHeaders());
  }
}