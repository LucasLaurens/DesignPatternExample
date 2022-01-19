<?php

declare(strict_types=1);

namespace App\AdapterPattern\Messenger;

interface MessengerInterface
{
    public function sendMessage(string $message);
}
