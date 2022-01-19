<?php

declare(strict_types=1);

namespace App\DecoratorPattern;

use App\DecoratorPattern\Decorator\UserFactoryDecorator;

require_once __DIR__ . "../../../vendor/autoload.php";

final class App
{
    public function run(): void
    {
        $anonymousUser = (new UserFactoryDecorator())->create();
        $email = trim($anonymousUser->getEmail());
        echo sprintf(
            'The user %s is anonymous !',
            $email
        ) . PHP_EOL;
    }
}

(new App())->run();
