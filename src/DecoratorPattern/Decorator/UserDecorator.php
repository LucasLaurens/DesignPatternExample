<?php

declare(strict_types=1);

namespace App\DecoratorPattern\Decorator;

use App\Models\UserInterface;

final class UserDecorator
{
    public function __construct(private UserInterface $user)
    {
    }

    public function getEmail(): string
    {
        return preg_replace(
            '/[^@]*@/',
            '****@',
            $this->user->getEmail()
        );
    }
}
