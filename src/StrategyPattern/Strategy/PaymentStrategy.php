<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;

interface PaymentStrategy
{
    public function pay(): void;
}
