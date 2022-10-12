<?php

namespace WildDevs\Models;

/**
 * API response template
 */
class Response extends Base
{
    /**
     * response status 
     * @var string
     */
    public $status = null;

    /**
     * response code
     * @var int
     */
    public $code = null;

    /**
     * response message
     * @var mixed
     */
    public $message = null;

    /**
     * response note
     * @var mixed
     */
    public $note = null;

    /**
     * response data
     * @var mixed
     */
    public $data = null;
}
