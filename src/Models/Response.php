<?php

namespace WildDevs\Models;

class Response extends Base {
    public function __construct($data) {
        if ($data) {
            parent::__construct($data);
        }
    }

    public function getContent($raw = false) {
        return !$raw ? $this->content : $this->contentRaw;
    }

    public function getHeaders($raw = false) {
        return !$raw ? $this->headers : $this->headersRaw;
    }

    public function getCookies() {
        return $this->cookies;
    }
}
