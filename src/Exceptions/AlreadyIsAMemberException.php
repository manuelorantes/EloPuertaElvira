<?php

namespace App\Exceptions;

use Exception;

class AlreadyIsAMemberException extends Exception
{
    protected $message = 'The player added is already in the club and is a member';
}