<?php

use Decorator;

class Email extends Decorator
{
    public function sendMessage()
    {
        $this->message->sendMessage();
    }
}