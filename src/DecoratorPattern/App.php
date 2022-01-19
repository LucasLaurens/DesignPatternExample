<?php

declare(strict_types=1);

namespace App\DecoratorPattern;

use App\DecoratorPattern\Pizza\AbstractPizza;
use App\DecoratorPattern\Pizza\Reine;
use App\DecoratorPattern\PizzaDecorator\ChorizoDecorator;
use App\DecoratorPattern\PizzaDecorator\JambonDecorator;

require_once __DIR__ . "../../../vendor/autoload.php";

class App
{
    public function __invoke()
    {
        $pizza = new Reine();
        $this->printInfos($pizza);

        $pizza = new JambonDecorator($pizza);
        $this->printInfos($pizza);

        $pizza = new JambonDecorator($pizza);
        $this->printInfos($pizza);

        $pizza = new ChorizoDecorator($pizza);
        $this->printInfos($pizza);
    }

    private function printInfos(AbstractPizza $pizza)
    {
        echo $pizza->getDescription() . PHP_EOL;
        echo $pizza->totalCost() . " €" . PHP_EOL;
    }
}

(new App())();
