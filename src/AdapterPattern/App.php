<?php

declare(strict_types=1);

namespace App\AdapterPattern;

use App\AdapterPattern\Mailer\Mailer;
use App\AdapterPattern\Mailer\MailerAdapter;
use App\AdapterPattern\Messenger\Messenger;
use App\AdapterPattern\Messenger\MessengerInterface;

require_once __DIR__ . "../../../vendor/autoload.php";

class App
{
    private MessengerInterface $messenger;

    public function setMessenger(MessengerInterface $messenger)
    {
        $this->messenger = $messenger;
    }

    public function run(string $message)
    {
        $this->messenger->sendMessage($message);
    }
}

$app = new App();
$app->setMessenger(new Messenger());
$app->run("sends a message");

$app->setMessenger(new MailerAdapter(new Mailer()));
$app->run("sends an email");
