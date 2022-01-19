<?php

declare(strict_types=1);

namespace App\Models;

use Override;
final class User implements UserInterface
{
    public string $firstName;

    public string $lastName;

    public string $email;

    public string $password;

    #[Override]
    public function getEmail(): string
    {
        return $this->email;
    }

    #[Override]
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    #[Override]
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    #[Override]
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    #[Override]
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
