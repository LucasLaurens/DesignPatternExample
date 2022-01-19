<?php

declare(strict_types=1);

namespace App\DecoratorPattern\Pizza;

class Reine extends AbstractPizza
{
    public function __construct()
    {
        $this->description = "Reine";
    }

    public function totalCost()
    {
        return 10;
    }
}
