<?php

declare(strict_types=1);

namespace App\DecoratorPattern\PizzaDecorator;

use App\DecoratorPattern\Pizza\AbstractPizza;

class JambonDecorator extends AbstractPizzaDecorator
{
    public function __construct(AbstractPizza $pizza) {
        $this->pizza = $pizza;
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . " + Jambon";
    }

    public function totalCost()
    {
        return $this->pizza->totalCost() + 1.50;
    }
}
