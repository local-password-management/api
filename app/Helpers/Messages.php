<?php

namespace App\Helpers;

class Messages  
{
    public $messages;

    public function __construct()
    {
        $this->messages = [
            0 => 'Default error message',
            200 => 'OK',
            400 => '404 Error Request!',
        ];
    }

    public function set($code, $message) 
    {
        return $this->messages[$code] = $message;
    }

    public function get($code)
    {
        return $this->messages[$code] ?? 0;
    }
}
