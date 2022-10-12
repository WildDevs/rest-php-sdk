<?php

namespace WildDevsApi;

use Exception;
use WildDevsApi\Models\Response;

/**
 * WildDevsApi
 */
class Client
{
    /**
     * Client version for setting in api call user agent header
     * @var string
     */
    const CLIENT_VERSION = "1.0.0";

    /**
     * Default timeout for api call
     * @var int
     */
    const DEFAULT_TIMEOUT = 30;

    /**
     * Api endpoint
     * @var string
     */
    const ENDPOINT = "https://api.wild-devs.net/v1";

    /**
     * HTTP client
     * @var HTTPClient
     */
    private $_httpClient;

    /**
     * API key
     * @var string
     */
    private $_apiKey;

    /**
     * Constructor
     * @param string $apiKey api key
     * @param HTTPClient|null $httpClient http client
     */
    public function __construct(string $apiKey, HTTPClient $httpClient = null)
    {
        $this->_httpClient = $httpClient;
        $this->_apiKey = $apiKey;

        $userAgent = sprintf("WildDevsApi %s PHP SDK", self::CLIENT_VERSION);

        if (!$httpClient) {
            $this->_httpClient = new HTTPClient(self::ENDPOINT, self::DEFAULT_TIMEOUT, array(
                sprintf("apikey: %s", $this->_apiKey),
                sprintf("User-Agent: %s", $userAgent),
            ));
        }
    }

    public function welcome(): Response
    {
        $res = $this->_httpClient->get("/");
        if (!isset($res)) throw new Exception("returned response not valid", 1);
        return $res;
    }
}
