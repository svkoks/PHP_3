<?php

use IMessage;

class Message implements IMessage
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function sendMessage()
    {
        
    }
}