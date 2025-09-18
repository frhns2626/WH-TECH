<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use PhpParser\Node\Stmt\Label;

class JabatantendikChart extends ChartWidget
{
    protected ?string $heading = 'Jabatan Akademik Tendik';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'Tidak Ada';
    }
}
