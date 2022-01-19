<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;

use Override;
final readonly class PaypalConcreteStrategy implements PaymentStrategy
{
    #[Override]
    public function pay(): void
    {
        echo 'I pay with my Paypal account.' . PHP_EOL;
    }
}
