<?php

declare(strict_types=1);

namespace Strategy\Services;

use Strategy\PaymentSystem;

class Qiwi implements PaymentSystem
{

    public function pay($phone, $sum): void
    {
        $this->phone = $phone;
        $this->sum = $sum;
        echo "Оплата с помощью Qiwi";
    }
} 