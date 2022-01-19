<?php

declare(strict_types=1);

namespace App\DecoratorPattern\Pizza;

class Margherita extends AbstractPizza
{

    public function __construct()
    {
        $this->description = "Margherita";
    }

    public function totalCost()
    {
        return 8;
    }
}
