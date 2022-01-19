<?php

declare(strict_types=1);

namespace App\Contract;

use App\Models\UserInterface;

interface UserFactory
{
    public function create(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
    ): UserInterface;
}
