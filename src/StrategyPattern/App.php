<?php

declare(strict_types=1);

namespace App\StrategyPattern;

use App\StrategyPattern\Strategy\CreditCardConcreteStrategy;
use App\StrategyPattern\Strategy\PaypalConcreteStrategy;

require_once __DIR__ . "../../../vendor/autoload.php";

class App
{
    public function run()
    {
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
