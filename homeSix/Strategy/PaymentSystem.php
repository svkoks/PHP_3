<?php

declare(strict_types=1);

namespace Strategy;

interface PaymentSystem
{
    /**
     * @param $phone
     * @param $sum
     * @return bool
     */
    public function pay($phone, $sum): void;
}