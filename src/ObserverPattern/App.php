<?php

declare(strict_types=1);

namespace App\ObserverPattern;

use App\ObserverPattern\Observable\Observable;
use App\ObserverPattern\Observer\Observer1;
use App\ObserverPattern\Observer\Observer2;

require_once __DIR__ . "../../../vendor/autoload.php";

class App
{
    public function run()
    {
        $observable = new Observable();
        $ob1 = new Observer1();
        $ob2 = new Observer2();

        $observable->setState(1);

        echo '----' . PHP_EOL;

        $observable->subscribe($ob1);
        $observable->setState(2);

        echo '----' . PHP_EOL;

        $observable->subscribe($ob2);
        $observable->setState(3);

        echo '----' . PHP_EOL;

        $observable->unsubscribe($ob1);
        $observable->setState(4);
    }
}

$app = new App();
$app->run();
