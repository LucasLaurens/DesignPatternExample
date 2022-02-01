<?php

declare(strict_types=1);

namespace App\ObserverPattern\Observer;

use App\ObserverPattern\Observable\ObservableInterface;

interface ObserverInterface
{
    public function update(ObservableInterface $observable);
}
