<?php

namespace WildDevs;

use Exception;
use WildDevs\Models\Response;
use WildDevs\Endpoints\{ Random, NetTools, Utility, Validate, Games, Conversion, Mockup, UrlShortener };

/**
 * Wild Devs Api
 */
class API {
  const SDK_VERSION = "1.1.0";
  const API_VERSION = "1.0.1";
  const DEFAULT_TIMEOUT = 30;
  const ENDPOINT = "https://api.wild-devs.net/v1";
  
  private $_httpClient;
  private $_apiKey;
  private $_headers;
  private $_random;
  private $_netTools;
  private $_utils;
  private $_validate;
  private $_conversion;
  private $_mockup;
  private $_games;
  private $_urlshortener;

  public function getHttpClient() {
    return $this->_httpClient;
  }

  private function setHttpClient(HttpClient $httpClient) {
    $this->_httpClient = $httpClient;
  }

  private function getApiKey() {
    return $this->_apiKey;
  }

  public function setApiKey(string $key, string $secret) {
    $this->_apiKey = \base64_encode($key.":".$secret);

    foreach($this->getHeaders() as $k => $v) {
      if (preg_match("/x-api-key/i", $v)) {
        unset($this->_headers[$k]);
        break;
      }
    }

    $this->setHeaders(array_merge($this->getHeaders(), ["x-api-key" => $this->getApiKey()]));
  }

  public function getHeaders(): array {
    return $this->_headers;
  }

  private function setHeaders(array $headers) {
    $this->_headers = $headers;
  }
  
  public function random(): Random {
    return $this->_random;
  }

  private function setRandom(Random $random) {
    $this->_random = $random;
  }

  public function netTools(): NetTools {
    return $this->_netTools;
  }

  private function setNetTools(NetTools $netTools) {
    $this->_netTools = $netTools;
  }

  public function utility(): Utility {
    return $this->_utility;
  }

  private function setUtility(Utility $utility) {
    $this->_utility = $utility;
  }

  public function validate(): Validate {
    return $this->_validate;
  }

  private function setValidate(Validate $validate) {
    $this->_validate = $validate;
  }

  public function convert(): Conversion {
    return $this->_conversion;
  }

  private function setConversion(Conversion $conversion) {
    $this->_conversion = $conversion;
  }

  public function mockup(): Mockup {
    return $this->_mockup;
  }

  private function setMockup(Mockup $mockup) {
    $this->_mockup = $mockup;
  }

  public function games(): Games {
    return $this->_games;
  }

  private function setGames(Games $games) {
    $this->_games = $games;
  }

  public function urlShortener(): UrlShortener {
    return $this->_urlShortener;
  }

  private function setUrlShortener(UrlShortener $urlShortener) {
    $this->_urlShortener = $urlShortener;
  }

  public function __construct() {
    $this->setHeaders([
      'User-Agent' => 'Wild Devs API v' . self::SDK_VERSION . ' PHP SDK',
      'Accept' => 'application/json', 
      'Content-Type' => 'application/json'
    ]);
    
    $this->setHttpClient(new HttpClient(self::ENDPOINT, self::DEFAULT_TIMEOUT));
    $this->setRandom(new Random($this));
    $this->setNetTools(new NetTools($this));
    $this->setUtility(new Utility($this));
    $this->setValidate(new Validate($this));
    $this->setConversion(new Conversion($this));
    $this->setUrlShortener(new UrlShortener($this));
    $this->setMockup(new Mockup($this));
    $this->setGames(new Games($this));
  }
}
