<?php

declare(strict_types=1);

namespace App\AdapterPattern\Mailer;

interface MailerInterface
{
    public function sendEmailMessage(string $emailMessage);
}
