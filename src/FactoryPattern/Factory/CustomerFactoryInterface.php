<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use App\FactoryPattern\Customer\Customer;

interface CustomerFactoryInterface
{
    const LAST_CONNEXION = 'lastConnexion';

    public function create(string $firstname, string $lastname, string $email, string $street, string $city): Customer;
}
