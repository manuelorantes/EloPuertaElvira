<?php

namespace App\Exceptions;

use Exception;

class AlreadyIsInTheClubExpection extends Exception
{
    protected $message = 'The player added is already in the club';
}