<?php

declare(strict_types=1);

namespace App\Models;

interface UserInterface
{
    public function getEmail(): string;

    public function setFirstName(string $firstName): self;

    public function setLastName(string $lastName): self;

    public function setEmail(string $email): self;

    public function setPassword(string $password): self;
}
