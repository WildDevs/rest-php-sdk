<?php
namespace WildDevs\Helpers;

class CurlHelper
{
    public $user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.76 Safari/537.36';
    public $timeout = 30;
    protected $ch;
    protected $url;
    protected $get_data = [];
    protected $post_data = [];
    protected $post_raw;
    protected $cookies = [];
    protected $headers = [];
    protected $xpath = [];
    protected $files = [];

    const MIME_X_WWW_FORM   = 'application/x-www-form-urlencoded';
    const MIME_FORM_DATA    = 'multipart/form-data';
    const MIME_JSON         = 'application/json';

    public static function factory($url=null)
    {
        return new self($url);
    }

    public function __construct($url=null)
    {
        $this->ch = curl_init();
        $this->url = $url;
    }

    public function config($config)
    {
        $alias = [
            'url' => 'setUrl',
            'userAgent' => 'setUserAgent',
            'user-agent' => 'setUserAgent',
            'timeout' => 'setTimeout',
            'postRaw' => 'setPostRaw',
            'post-raw' => 'setPostRaw',
            'postParams' => 'setPostParams',
            'postFields' => 'setPostParams',
            'post-params' => 'setPostParams',
            'post-fields' => 'setPostParams',
            'post' => 'setPostParams',
            'getParams' => 'setGetParams',
            'getFields' => 'setGetParams',
            'get-params' => 'setGetParams',
            'get-fields' => 'setGetParams',
            'get' => 'setGetParams',
            'headers' => 'setHeaders',
            'cookies' => 'setCookies',
            'cookieFile' => 'setCookieFile',
            'cookie-file' => 'setCookieFile',
            'proxy' => 'useProxy',
            'options' => 'setOptions',
            'file' => 'putFile',
            'fileRaw' => 'putFileRaw',
            'file-raw' => 'putFileRaw',
        ];

        $config = array_intersect_key($config, array_fill_keys(array_merge(array_keys($alias), array_values($alias), [
            'follow', 'xpath',
        ]), 1));

        foreach ($config as $method => $value) {
            if (isset($alias[$method])) {
                $method = $alias[$method];
            }
            if (!(in_array($method, ['useProxy', 'putFile', 'putFileRaw']) && is_array($value))) {
                $value = [$value];
            }
            call_user_func_array([$this, $method], $value);
        }
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function follow($follow=true)
    {
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, $follow);
        return $this;
    }

    public function setUserAgent($ua)
    {
        $this->user_agent = $ua;
        return $this;
    }

    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function debug($debug=true)
    {
        curl_setopt($this->ch, CURLOPT_VERBOSE, $debug && true);
        if (is_string($debug)) {
            curl_setopt($this->ch, CURLOPT_STDERR, $debug);
        }
        return $this;
    }

    public function setPostRaw($raw)
    {
        $this->post_raw = $raw;
        return $this;
    }

    public function setPostParams($data)
    {
        if($data){
            $this->post_data = array_merge($this->post_data, $data);
        }
        return $this;
    }

    public function setPostFields($data)
    {
        return $this->setPostParams($data);
    }

    public function setGetParams($data)
    {
        $this->get_data = array_merge($this->get_data, $data);
        return $this;
    }

    public function setGetFields($data)
    {
        return $this->setGetParams($data);
    }

    public function setHeaders($data)
    {
        foreach ($data as $key => $val) {
            $this->headers[self::fixStringCase($key)] = $val;
        }
        return $this;
    }

    public function setCookies($data)
    {
        $this->cookies = array_merge($this->cookies, $data);
        return $this;
    }

    public function putFile($fieldname, $filename, $basename=null, $mime_type=null)
    {
        $this->files[] = [
            'type' => 'file',
            'fieldname' => $fieldname,
            'file' => $filename,
            'basename' => $basename,
            'mime_type' => $mime_type,
        ];

        return $this;
    }

    public function putFileRaw($fieldname, $file_contents, $basename, $mime_type)
    {
        $this->files[] = [
            'type' => 'raw',
            'fieldname' => $fieldname,
            'file' => $file_contents,
            'basename' => $basename,
            'mime_type' => $mime_type,
        ];

        return $this;
    }

    protected function generateUrl()
    {
        $parsed_string = '';
        $url = parse_url($this->url);

        if (!empty($url['query'])) {
            parse_str($url['query'], $get_data);
            $url['query'] = http_build_query(array_merge($get_data, $this->get_data));
        } else {
            $url['query'] = http_build_query($this->get_data);
        }

        if (isset($url['scheme'])) {
            $parsed_string .= $url['scheme'] . '://';
        }

        if (isset($url['user'])) {
            $parsed_string .= $url['user'];
            if (isset($url['pass'])) {
                $parsed_string .= ':' . $url['pass'];
            }
            $parsed_string .= '@';
        }

        if (isset($url['host'])) {
            $parsed_string .= $url['host'];
        }

        if (isset($url['port'])) {
            $parsed_string .= ':' . $url['port'];
        }

        if (!empty($url['path'])) {
            $parsed_string .= $url['path'];
        } else {
            $parsed_string .= '/';
        }

        if (!empty($url['query'])) {
            $parsed_string .= '?' . $url['query'];
        }

        if (isset($url['fragment'])) {
            $parsed_string .= '#' . $url['fragment'];
        }

        return $parsed_string;
    }

    public function setCookieFile($filename)
    {
        curl_setopt($this->ch, CURLOPT_COOKIEJAR, $filename);
        curl_setopt($this->ch, CURLOPT_COOKIEFILE, $filename);
        return $this;
    }

    public function useProxy($host, $login=null, $password=null)
    {
        curl_setopt($this->ch, CURLOPT_HTTPPROXYTUNNEL, true);
        curl_setopt($this->ch, CURLOPT_PROXY, $host);
        if (isset($login)) {
            curl_setopt($this->ch, CURLOPT_PROXYUSERPWD, "$login:$password");
        }
        return $this;
    }

    public function setOptions($options)
    {
        if($options){
            foreach ($options as $key => $value) {
                curl_setopt($this->ch, $key, $value);
            }
        }
        return $this;
    }

    public function xpath($expr)
    {
        $this->xpath = $expr;
        return $this;
    }

    public function exec()
    {
        if (isset($this->post_raw)) {
            curl_setopt($this->ch, CURLOPT_POST, 1);
            curl_setopt($this->ch, CURLOPT_POSTFIELDS, $this->post_raw);
            $this->headers['content-length'] = strlen($this->post_raw);

            if (empty($this->headers['content-type'])) {
                $this->headers['content-type'] = 'text/plain';
            }
        } elseif (!empty($this->post_data) || !empty($this->files)) {
            curl_setopt($this->ch, CURLOPT_POST, 1);

            if (!empty($this->files)) {
                $this->headers['content-type'] = self::MIME_FORM_DATA;
            } elseif (empty($this->headers['content-type'])) {
                $this->headers['content-type'] = self::MIME_X_WWW_FORM;
            }

            if ($this->headers['content-type'] === self::MIME_JSON) {
                $data = json_encode($this->post_data);
            } elseif ($this->headers['content-type'] === self::MIME_FORM_DATA) {
                $data = $this->generateBoundary();
            } else {
                $data = http_build_query($this->post_data);
            }

            curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
            $this->headers['content-length'] = strlen($data);
        }

        if (!empty($this->headers)) {
            $data = [];
            foreach ($this->headers as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $val) {
                        $data[] = "$k: $val";
                    }
                } else {
                    $data[] = "$k: $v";
                }
            }

            curl_setopt($this->ch, CURLOPT_HTTPHEADER, $data);
        }
        if (!empty($this->cookies)) {
            $data = [];
            foreach ($this->cookies as $k => $v) {
                $data[] = "$k=$v";
            }
            curl_setopt($this->ch, CURLOPT_COOKIE, implode('; ', $data));
        }

	curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($this->ch, CURLOPT_URL, $this->generateUrl());
        curl_setopt($this->ch, CURLOPT_USERAGENT, $this->user_agent);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->ch, CURLOPT_HEADER, 1);

        return $this->generateResponse();
    }

    protected function generateBoundary()
    {
        $eol = PHP_EOL;
        $boundary = '----CurlHelperBoundary' . md5(microtime());
        $this->headers['Content-Type'] = self::MIME_FORM_DATA . "; boundary=$boundary";
        $data = [];
        $each = function ($field, $value) use (&$data, &$each, $boundary, $eol) {
            if (is_array($value)) {
                if (empty($value)) {
                    $each("{$field}[]", '');
                } else {
                    foreach ($value as $key => $item) {
                        if (is_int($key)) {
                            $key = '';
                        }
                        $each("{$field}[{$key}]", $item);
                    }
                }
            } else {
                $data[] = "--$boundary$eol";
                $data[] = "Content-Disposition: form-data; name=\"$field\"$eol$eol";
                $data[] = "$value$eol";
            }
        };

        foreach ($this->post_data as $field => $value) {
            $each($field, $value);
        }

        foreach ($this->files as $file) {
            if ($file['type'] === 'file') {
                if (empty($file['basename'])) {
                    $file['basename'] = basename($file['file']);
                }

                if (empty($file['mime_type'])) {
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    $file['mime_type'] = finfo_file($finfo, $file['file']);
                    finfo_close($finfo);
                }
            }

            if (empty($file['mime_type'])) {
                $file['mime_type'] = 'application/octet-stream';
            }

            $data[] = "--$boundary$eol";
            $data[] = "Content-Disposition: form-data; name=\"{$file['fieldname']}\"; filename=\"{$file['basename']}\"$eol";
            $data[] = "Content-Type: {$file['mime_type']}$eol$eol";
            $data[] = ($file['type'] === 'file' ? file_get_contents($file['file']) : $file['file']) . $eol;
        }

        $data[] = "--$boundary--$eol$eol";
        return implode('', $data);
    }

    protected function generateResponse()
    {
        $response = curl_exec($this->ch);
        $header_size = curl_getinfo($this->ch, CURLINFO_HEADER_SIZE);
        $code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
        $header = substr($response, 0, $header_size);
        $content = substr($response, $header_size);
        curl_close($this->ch);
        $headers = [];

        foreach (explode("\n", $header) as $line) {
            $line = explode(':', $line, 2);
            if (isset($line[1])) {
                list($key, $value) = $line;
                $key = self::fixStringCase($key);
                $value = ($value = trim($value)) && !empty($value) ? $value : null;
                if (isset($headers[$key]) && $headers[$key] != $value) {
                    if (!is_array($headers[$key])) {
                        $headers[$key] = [$headers[$key]];
                    }
                    $headers[$key][] = $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }

        $cookies = [];
        if (isset($headers['Set-Cookie'])) {
            foreach (is_array($headers['Set-Cookie']) ? $headers['Set-Cookie'] : [$headers['Set-Cookie']] as $cookie) {
                $cookie = explode('=', explode(';', $cookie, 2)[0], 2);
                if (isset($cookie[1])) {
                    $cookies[$cookie[0]] = $cookie[1];
                }
            }
        }

        $type = isset($headers['Content-Type']) ? is_array($headers['Content-Type']) ?
            $headers['Content-Type'][0] : $headers['Content-Type'] : null;
        $encoding = isset($headers['Content-Encoding']) ? is_array($headers['Content-Encoding']) ?
            $headers['Content-Encoding'][0] : $headers['Content-Encoding'] : null;
        $content = strtolower($encoding) === 'gzip' ? gzdecode($content) : $content;
        $json_data = !empty($content) && in_array($content[0], ['{', '[']) ? json_decode($content, true) : false;
        ksort($headers);

        return [
            'code' => $code,
            'headers' => $headers,
            'headers_raw' => $header,
            'cookies' => $cookies,
            'content' => $json_data,
            'content_raw' => $content,
        ];
    }
    
    protected static function fixStringCase($str)
    {
        $str = explode('-', $str);
        foreach ($str as &$word) {
            $word = lcfirst($word);
        }
        return implode('-', $str);
    }
}
