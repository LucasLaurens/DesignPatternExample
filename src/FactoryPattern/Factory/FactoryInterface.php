<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use App\Models\UserInterface;

interface FactoryInterface
{
    public static function create(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
    ): UserInterface;
}
