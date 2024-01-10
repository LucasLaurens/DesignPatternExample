<?php

declare(strict_types=1);

namespace App\FactoryPattern\Models;

final class User implements UserInterface
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
