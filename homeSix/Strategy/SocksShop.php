<?php

declare(strict_types=1);

namespace Strategy;

use PaymentSystem;

class SocksShop
{
    /**
     * @var PaymentSystem[]
     */
    private $paymentServices;

    /**
     * Shop constructor.
     * @param array $paymentServices
     */
    public function __construct(array $paymentServices)
    {
        $this->paymentServices = $paymentServices;
    }
} 