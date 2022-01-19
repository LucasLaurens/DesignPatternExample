<?php

declare(strict_types=1);

namespace App\DecoratorPattern\Decorator;

use Override;
use Exception;
use App\Contract\UserFactory;
use App\Models\UserInterface;
use App\FactoryPattern\Factory\ConcreteUserFactory;

/**
 * The UserFactory interface is used as decorator
 * because we need to override the factory behavior
 */
final readonly class UserFactoryDecorator implements UserFactory
{
    /**
     * The internal component representing the class to be outperformed
     * By default we apply the basis user factory
     */
    public function __construct(private UserFactory $userFactory = new ConcreteUserFactory())
    {
    }

    #[Override]
    public function create(
        string $firstName = 'John',
        string $lastName = 'Doe',
        string $email = 'john.doe@hotmail.fr',
        string $password = 'Aze123?!',
    ): UserInterface {
        $user = $this->userFactory->create(
            $firstName,
            $lastName,
            $email,
            $password
        );
        $email = preg_replace(
            '/[^@]*@/',
            '****@',
            $user->getEmail()
        );

        if (null === $email) {
            throw new Exception('The email cannot be null');
        }

        $user->setEmail($email);
        return $user;
    }
}
