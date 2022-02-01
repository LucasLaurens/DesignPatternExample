<?php

declare(strict_types=1);

namespace App\ObserverPattern\Observer;

use App\ObserverPattern\Observable\ObservableInterface;

class Observer2 implements ObserverInterface
{
    public function update(ObservableInterface $observable)
    {
        $state = $observable->getState();

        echo "Observer2 see Observable state at $state" . PHP_EOL;
    }
}
