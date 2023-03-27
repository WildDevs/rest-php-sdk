<?php

namespace WildDevs\Endpoints;

use Exception;
use WildDevs\API;
use WildDevs\Models\Response;

class Validate
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

  public function email($payload = []) {
    print_r($payload);
    return $this->getApi()->getHttpClient()->post('/email', $payload, $this->getApi()->getHeaders());
  }

  public function btc($payload = []) {
    return $this->getApi()->getHttpClient()->post('/btc', $payload, $this->getApi()->getHeaders());
  }

  public function bic($payload = []) {
    return $this->getApi()->getHttpClient()->post('/bic', $payload, $this->getApi()->getHeaders());
  }

  public function creditcard($payload = []) {
    return $this->getApi()->getHttpClient()->post('/creditcard', $payload, $this->getApi()->getHeaders());
  }

  public function ean($payload = []) {
    return $this->getApi()->getHttpClient()->post('/ean', $payload, $this->getApi()->getHeaders());
  }

  public function fqdn($payload = []) {
    return $this->getApi()->getHttpClient()->post('/fqdn', $payload, $this->getApi()->getHeaders());
  }

  public function iban($payload = []) {
    return $this->getApi()->getHttpClient()->post('/iban', $payload, $this->getApi()->getHeaders());
  }

  public function imei($payload = []) {
    return $this->getApi()->getHttpClient()->post('/imei', $payload, $this->getApi()->getHeaders());
  }

  public function ip($payload = []) {
    return $this->getApi()->getHttpClient()->post('/ip', $payload, $this->getApi()->getHeaders());
  }

  public function identitycard($payload = []) {
    return $this->getApi()->getHttpClient()->post('/identitycard', $payload, $this->getApi()->getHeaders());
  }

  public function isbn($payload = []) {
    return $this->getApi()->getHttpClient()->post('/isbn', $payload, $this->getApi()->getHeaders());
  }

  public function isin($payload = []) {
    return $this->getApi()->getHttpClient()->post('/isin', $payload, $this->getApi()->getHeaders());
  }

  public function issn($payload = []) {
    return $this->getApi()->getHttpClient()->post('/issn', $payload, $this->getApi()->getHeaders());
  }

  public function mac($payload = []) {
    return $this->getApi()->getHttpClient()->post('/mac', $payload, $this->getApi()->getHeaders());
  }

  public function magnet($payload = []) {
    return $this->getApi()->getHttpClient()->post('/magnet', $payload, $this->getApi()->getHeaders());
  }

  public function mimetype($payload = []) {
    return $this->getApi()->getHttpClient()->post('/mimetype', $payload, $this->getApi()->getHeaders());
  }

  public function password($payload = []) {
    return $this->getApi()->getHttpClient()->post('/password', $payload, $this->getApi()->getHeaders());
  }

  public function uuid($payload = []) {
    return $this->getApi()->getHttpClient()->post('/uuid', $payload, $this->getApi()->getHeaders());
  }

  public function tax($payload = []) {
    return $this->getApi()->getHttpClient()->post('/tax', $payload, $this->getApi()->getHeaders());
  }

  public function semver($payload = []) {
    return $this->getApi()->getHttpClient()->post('/semver', $payload, $this->getApi()->getHeaders());
  }

  public function licenseplate($payload = []) {
    return $this->getApi()->getHttpClient()->post('/licenseplate', $payload, $this->getApi()->getHeaders());
  }

  public function postalcode($payload = []) {
    return $this->getApi()->getHttpClient()->post('/postalcode', $payload, $this->getApi()->getHeaders());
  }
}