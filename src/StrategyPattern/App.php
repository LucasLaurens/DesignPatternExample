<?php

declare(strict_types=1);

namespace App\StrategyPattern;

use App\StrategyPattern\FileManager\FileManager;
use App\StrategyPattern\Strategy\CsvExportStrategy;
use App\StrategyPattern\Strategy\JsonExportStrategy;
use App\StrategyPattern\Strategy\TextExportStrategy;
use App\StrategyPattern\Strategy\XMLExportStrategy;

require_once __DIR__ . "../../../vendor/autoload.php";

class App
{
    public function run()
    {
        $fileManager = new FileManager();

        $fileManager->setStrategy(new XMLExportStrategy);
        echo $fileManager->export() . PHP_EOL;

        $fileManager->setStrategy(new TextExportStrategy);
        echo $fileManager->export() . PHP_EOL;

        $fileManager->setStrategy(new CsvExportStrategy);
        echo $fileManager->export() . PHP_EOL;

        $fileManager->setStrategy(new JsonExportStrategy);
        echo $fileManager->export() . PHP_EOL;
    }
}

$app = new App();

$app->run();
