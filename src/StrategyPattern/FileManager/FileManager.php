<?php

declare(strict_types=1);

namespace App\StrategyPattern\FileManager;

use App\StrategyPattern\Strategy\ExportStrategyInterface;

class FileManager
{
    private ExportStrategyInterface $strategy;

    public function setStrategy(ExportStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function export()
    {
        return $this->strategy->formatData();
    }
}
