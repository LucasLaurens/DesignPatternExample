<?php

declare(strict_types=1);

namespace App\AdapterPattern\Messenger;

class Messenger implements MessengerInterface
{
    public function sendMessage(string $message)
    {
        echo $message . PHP_EOL;
    }
}
