<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;

final class PaypalConcreteStrategy implements PaymentStrategy
{
    public function pay(): void
    {
        echo 'I pay with my Paypal account.' . PHP_EOL;
    }
}
