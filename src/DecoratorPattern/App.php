<?php

declare(strict_types=1);

namespace App\DecoratorPattern;

use App\FactoryPattern\Factory\UserFactory;
use App\DecoratorPattern\Decorator\UserDecorator;

require_once __DIR__ . "../../../vendor/autoload.php";

class App
{
    public function run()
    {
        $user = (new UserFactory())->create(
            'John',
            'Doe',
            'john.doe@mailinator.com',
            'aze12?!',
        );

        $anonymousUser = new UserDecorator($user);
        echo "The user {$anonymousUser->getEmail()} is anonymous !";
    }
}

(new App())->run();
