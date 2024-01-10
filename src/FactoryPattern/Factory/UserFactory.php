<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use App\Models\User;
use App\Models\UserInterface;

final class UserFactory implements FactoryInterface
{
    public static function create(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
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
