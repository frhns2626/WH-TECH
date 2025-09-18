<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class DonutChart extends ChartWidget
{
    protected ?string $heading = 'Jumlah Dosen Berdasarkan Jenis Kelamin';

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
