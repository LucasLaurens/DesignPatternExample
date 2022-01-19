<?php

declare(strict_types=1);

namespace App\FactoryPattern\Factory;

use App\FactoryPattern\Customer\Address;
use App\FactoryPattern\Customer\Customer;

class CustomerFactory
{
    public function create(string $firstname, string $lastname, string $email, string $street, string $city): Customer
    {
        $customer = new Customer();
        $customer->firstname = $firstname;
        $customer->lastname = $lastname;
        $customer->email = $email;

        $address = new Address();
        $address->street = $street;
        $address->city = $city;

        $customer->address = $address;
        $customer->lastConnexion = new \DateTime();

        return $customer;
    }

}
