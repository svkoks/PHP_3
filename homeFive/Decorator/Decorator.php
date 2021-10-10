<?php

use IMessage;

abstract class Decorator implements IMessage
{
    protected $message = null;

    public function __construct(IMessage $message)
    {
        $this->message = $message;
    }
}