<?php

namespace app\core\exception;

use Exception;

class NotFoundException extends Exception
{
    protected $message = 'Page is not found';
    protected $code = 404;
}
