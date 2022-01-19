<?php

declare(strict_types=1);

namespace App\DecoratorPattern\Pizza;

abstract class AbstractPizza
{
    protected string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function totalCost();
}
