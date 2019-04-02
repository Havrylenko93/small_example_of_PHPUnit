<?php

namespace App\Exceptions;

use Throwable;

class UnexpectableShitException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message .= ' what the f**k is this??? ';
        parent::__construct($message, $code, $previous);
    }
}