<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;

use Override;
final readonly class CreditCardConcreteStrategy implements PaymentStrategy
{
    #[Override]
    public function pay(): void
    {
        echo 'I pay with my Visa card.' . PHP_EOL;
    }
}
