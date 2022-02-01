<?php

declare(strict_types=1);

namespace App\ObserverPattern\Observable;

use App\ObserverPattern\Observer\ObserverInterface;

interface ObservableInterface
{
    public function getState(): int;
    public function subscribe(ObserverInterface $observer);
    public function unsubscribe(ObserverInterface $observer);
    public function notify();
}
