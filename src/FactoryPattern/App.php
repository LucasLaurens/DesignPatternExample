<?php

declare(strict_types=1);

namespace App\FactoryPattern;

require_once __DIR__ . "../../../vendor/autoload.php";

use App\FactoryPattern\Customer\Address;
use App\FactoryPattern\Customer\Customer;
use App\FactoryPattern\Factory\CustomerFactory;
use App\FactoryPattern\Factory\CustomerFactoryInterface;
use DateTime;

class App
{
    public function run()
    {
        $customerFactory = new CustomerFactory();
        $customer = $customerFactory->create(
            "Jean",
            "Dupont",
            "jean@dupont.fr",
            "13 boulevard Rochechouart",
            "Paris"
        );

        
        foreach ($customer as $key => $value) {
            if ($value instanceof Address) {
                foreach ($value as $key => $value) {
                    echo "$key = $value\n";
                }
                continue;
            }

            if(CustomerFactoryInterface::LAST_CONNEXION === $key) {
                $value = $value->format('Y-m-d H:i:s');
            }

            echo "$key = $value\n";
        }
    }
}

(new App())->run();
