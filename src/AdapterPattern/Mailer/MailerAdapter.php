<?php

declare(strict_types=1);

namespace App\AdapterPattern\Mailer;

use App\AdapterPattern\Messenger\MessengerInterface;

class MailerAdapter implements MessengerInterface
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer) {
        $this->mailer = $mailer;
    }

    public function sendMessage(string $message)
    {
        $this->mailer->sendEmailMessage($message);
    }
}
