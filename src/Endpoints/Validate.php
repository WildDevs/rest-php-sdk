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

  public function email($payload = []): Response {
    print_r($payload);
    return $this->getApi()->getHttpClient()->post('/member/validate/email', $payload, $this->getApi()->getHeaders());
  }

  public function btc($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/btc', $payload, $this->getApi()->getHeaders());
  }

  public function bic($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/bic', $payload, $this->getApi()->getHeaders());
  }

  public function creditcard($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/creditcard', $payload, $this->getApi()->getHeaders());
  }

  public function ean($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/ean', $payload, $this->getApi()->getHeaders());
  }

  public function fqdn($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/fqdn', $payload, $this->getApi()->getHeaders());
  }

  public function iban($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/iban', $payload, $this->getApi()->getHeaders());
  }

  public function imei($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/imei', $payload, $this->getApi()->getHeaders());
  }

  public function ip($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/ip', $payload, $this->getApi()->getHeaders());
  }

  public function identitycard($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/identitycard', $payload, $this->getApi()->getHeaders());
  }

  public function isbn($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/isbn', $payload, $this->getApi()->getHeaders());
  }

  public function isin($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/isin', $payload, $this->getApi()->getHeaders());
  }

  public function issn($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/issn', $payload, $this->getApi()->getHeaders());
  }

  public function mac($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/mac', $payload, $this->getApi()->getHeaders());
  }

  public function magnet($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/magnet', $payload, $this->getApi()->getHeaders());
  }

  public function mimetype($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/mimetype', $payload, $this->getApi()->getHeaders());
  }

  public function password($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/password', $payload, $this->getApi()->getHeaders());
  }

  public function uuid($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/uuid', $payload, $this->getApi()->getHeaders());
  }

  public function tax($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/tax', $payload, $this->getApi()->getHeaders());
  }

  public function semver($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/semver', $payload, $this->getApi()->getHeaders());
  }

  public function licenseplate($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/licenseplate', $payload, $this->getApi()->getHeaders());
  }

  public function postalcode($payload = []): Response {
    return $this->getApi()->getHttpClient()->post('/member/validate/postalcode', $payload, $this->getApi()->getHeaders());
  }
}