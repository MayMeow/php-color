<?php

namespace MayMeow\PHPColor\Exceptions;

use Throwable;

class NotHexException extends \Exception
{
    public function __construct($message = "String you have provided is not HEX", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}