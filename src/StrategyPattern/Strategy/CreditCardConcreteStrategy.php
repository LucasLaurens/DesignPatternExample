<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;

final class CreditCardConcreteStrategy implements PaymentStrategy
{
    public function pay(): void
    {
        echo 'I pay with my Visa card.' . PHP_EOL;
    }
}
