<?php

namespace WildDevsApi\Models;

/**
 * API response template
 */
class Response extends Base
{
    /**
     * http status code
     * @var int
     */
    public $status = 200;

    /**
     * response code
     * @var string
     */
    public $code = "";

    /**
     * response data
     * @var mixed
     */
    public $data = null;

    /**
     * response note
     * @var mixed
     */
    public $note = null;
    
    /**
     * response message
     * @var mixed
     */
    public $message = null;
}
