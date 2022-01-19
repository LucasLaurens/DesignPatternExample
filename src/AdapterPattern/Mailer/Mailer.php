<?php

declare(strict_types=1);

namespace App\AdapterPattern\Mailer;

class Mailer implements MailerInterface
{
    public function sendEmailMessage(string $emailMessage)
    {
        echo $emailMessage . PHP_EOL;
    }
}
