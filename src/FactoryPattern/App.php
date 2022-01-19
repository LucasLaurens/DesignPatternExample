<?php

declare(strict_types=1);

namespace App\FactoryPattern;

require_once __DIR__ . "../../../vendor/autoload.php";

use App\Models\UserInterface;
use App\FactoryPattern\Factory\UserAdminFactory;
use App\FactoryPattern\Factory\ConcreteUserFactory;

final class App
{
    public function run(): void
    {
        /** @var UserInterface $firstUser */
        $firstUser = (new UserAdminFactory())->create();

        /** @var UserInterface $secondUser */
        $secondUser = (new ConcreteUserFactory())->create();

        foreach ([$firstUser, $secondUser] as $user) {
            echo sprintf('The user %s has been added !', $user->getEmail()) . PHP_EOL;
        }
    }
}

(new App())->run();
