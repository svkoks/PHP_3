<?php

declare(strict_types=1);

namespace Strategy\Services;

use Strategy\PaymentSystem;

class YandexMoney implements PaymentSystem
{

    public function pay($phone, $sum): void
    {
        $this->phone = $phone;
        $this->sum = $sum;
        echo "Оплата с помощью Yandex";
    }
} 