<?php

declare(strict_types=1);

namespace App\FactoryPattern\Customer;

class Customer {
    public string $firstname;
    public string $lastname;
    public string $email;
    public Address $address;
}
