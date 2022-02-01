<?php

declare(strict_types=1);

namespace App\ObserverPattern\Observable;

use App\ObserverPattern\Observer\ObserverInterface;

class Observable implements ObservableInterface
{
    private int $state;
    private array $observers = [];

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state)
    {
        $this->state = $state;

        echo "Observable state = {$this->state}" . PHP_EOL;

        $this->notify();
    }

    public function subscribe(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function unsubscribe(ObserverInterface $observerToRemove)
    {
        foreach ($this->observers as $key => $observer) {
            if ($observer === $observerToRemove) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
