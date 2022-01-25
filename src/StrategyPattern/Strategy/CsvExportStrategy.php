<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;;

class CsvExportStrategy implements ExportStrategyInterface
{
    public function formatData()
    {
        return 'Export a csv file';
    }
}
