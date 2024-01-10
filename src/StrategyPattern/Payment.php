<?php

declare(strict_types=1);

namespace App\StrategyPattern;

use App\StrategyPattern\Strategy\PaymentStrategy;

final class Payment
{
    private PaymentStrategy $strategy;

    public function setStrategy(PaymentStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function process()
    {
        return $this->strategy->pay();
    }
}
