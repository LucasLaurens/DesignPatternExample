<?php

declare(strict_types=1);

namespace App\ObserverPattern\Observer;

use App\ObserverPattern\Observable\ObservableInterface;

class Observer1 implements ObserverInterface
{
    public function update(ObservableInterface $observable)
    {
        $state = $observable->getState();

        echo "Observer1 see Observable state at $state" . PHP_EOL;
    }
}
