<?php

use Decorator;

class SMS extends Decorator
{
    public function sendMessage()
    {
        $this->message->sendMessage();
    }
}
