<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use Override;
use App\Models\User;
use App\Contract\UserFactory;
use App\Models\UserInterface;

final class ConcreteUserFactory implements UserFactory
{
    #[Override]
    public function create(
        string $firstName = 'John',
        string $lastName = 'Doe',
        string $email = 'john.doe@hotmail.fr',
        string $password = 'Aze123?!',
    ): UserInterface {
        $user = new User();

        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        $user->setPassword(
            password_hash(
                $password,
                PASSWORD_BCRYPT,
            )
        );

        return $user;
    }
}
