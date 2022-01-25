<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;;

class XMLExportStrategy implements ExportStrategyInterface
{
    public function formatData()
    {
        return 'Export a XML file';
    }
}
