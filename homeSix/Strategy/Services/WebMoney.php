<?php

declare(strict_types=1);

namespace Strategy\Services;

use Strategy\PaymentSystem;

class WebMoney implements PaymentSystem
{

    public function pay($phone, $sum): void
    {
        $this->phone = $phone;
        $this->sum = $sum;
        echo "Оплата с помощью WebMoney";
    }
} 