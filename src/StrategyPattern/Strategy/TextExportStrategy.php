<?php

declare(strict_types=1);

namespace App\StrategyPattern\Strategy;;

class TextExportStrategy implements ExportStrategyInterface
{
    public function formatData()
    {
        return 'Export a Text file';
    }
}
