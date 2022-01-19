<?php

declare(strict_types=1);

namespace App\StrategyPattern;

use App\StrategyPattern\Strategy\PaypalConcreteStrategy;
use App\StrategyPattern\Strategy\CreditCardConcreteStrategy;

require_once __DIR__ . "../../../vendor/autoload.php";

final class App
{
    public function run(): void
    {
        /**
         * The concrete strategy may be passed from the constructor
         */
        $payment = new Payment();

        $payment->setStrategy(
            new CreditCardConcreteStrategy()
        );
        $payment->process();

        $payment->setStrategy(
            new PaypalConcreteStrategy()
        );
        $payment->process();
    }
}

(new App())->run();
