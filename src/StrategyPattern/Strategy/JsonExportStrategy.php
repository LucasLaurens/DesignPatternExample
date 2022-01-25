<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;;

class JsonExportStrategy implements ExportStrategyInterface
{
    public function formatData()
    {
        return 'Export a Json file';
    }
}
