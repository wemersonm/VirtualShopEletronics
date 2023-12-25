<?php

namespace App\Exceptions;

use Exception;

class EmailAlreadyExistExeception extends Exception
{
    protected $message = 'Email already exsist';
    public function render()
    {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage(),
        ], 422);
    }
}
