<?php

use IMessage;
use Message;
use SMS;
use Email;

$messageSMS = new SMS(new Message);
$messageEmail = new Email(new Message);
$messageAll = new Email(new SMS(new Message));

$messageSMS->sendMessage();
$messageEmail->sendMessage();
$messageAll->sendMessage();