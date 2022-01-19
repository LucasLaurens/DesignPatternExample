<?php

declare(strict_types=1);

namespace App\DecoratorPattern\PizzaDecorator;

use App\DecoratorPattern\Pizza\AbstractPizza;

abstract class AbstractPizzaDecorator extends AbstractPizza implements PizzaDecoratorInterface
{
    protected AbstractPizza $pizza;

    public function __construct(AbstractPizza $pizza) {
        $this->pizza = $pizza;
    }
}
