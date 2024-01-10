<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use App\FactoryPattern\Models\UserInterface;

final class UserAdminFactory implements FactoryInterface
{
    public static function create(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
    ): UserInterface {
        $user = (new UserFactory())->create(
            $firstName,
            $lastName,
            $email,
            $password,
        );

        $user->setEmail("admin-{$email}");

        return $user;
    }
}
