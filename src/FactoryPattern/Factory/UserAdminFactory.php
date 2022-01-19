<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use Override;
use App\Contract\UserFactory;
use App\Models\UserInterface;

final class UserAdminFactory implements UserFactory
{
    #[Override]
    public function create(
        string $firstName = 'John',
        string $lastName = 'Doe',
        string $email = 'john.doe@hotmail.fr',
        string $password = 'Aze123?!',
    ): UserInterface {
        return (new ConcreteUserFactory())->create(
            $firstName,
            $lastName,
            'admin-' . $email,
            $password,
        );
    }
}
