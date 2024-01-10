<?php

declare(strict_types=1);

namespace App\FactoryPattern;

require_once __DIR__ . "../../../vendor/autoload.php";

use App\FactoryPattern\Factory\UserFactory;
use App\FactoryPattern\Models\UserInterface;
use App\FactoryPattern\Factory\UserAdminFactory;

class App
{
    public function run()
    {
        /** @var UserInterface $firstUser */
        $firstUser = (new UserAdminFactory())->create(
            'John',
            'Doe',
            'john.doe@mailinator.com',
            'aze123!!'
        );

        /** @var UserInterface $secondUser */
        $secondUser = (new UserFactory())->create(
            'Alain',
            'Prudent',
            'alain.prudent@mailinator.com',
            'qwe123!!'
        );

        foreach ([$firstUser, $secondUser] as $user) {
            echo "The user {$user->getEmail()} has been added !" . PHP_EOL;
        }
    }
}

(new App())->run();
