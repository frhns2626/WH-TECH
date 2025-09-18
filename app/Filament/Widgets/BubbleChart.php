<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BubbleChart extends ChartWidget
{
    protected ?string $heading = 'Bubble Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah',
                    'data' => [
                        180,
                        180
                    ],
                    'backgroundColor' => ['#3b82f6', '#ef4444'], // biru & merah
                ],
            ],
            'labels' => ['Laki-Laki', 'Perempuan'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
