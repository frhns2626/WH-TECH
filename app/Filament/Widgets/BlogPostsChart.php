<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected ?string $heading = 'Jabatan Akademik Dosen';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah',
                    'data' => [
                        100, 
                        182,
                        140,
                        50, 
                    ],
                    'backgroundColor' => ['#FCBE62', '#5D8FE8', '#E9607F', '#7AE3A6'], // warna bar
                ],
            ],
            'labels' => ['Asisten Ahli', 'Lektor', 'Kepala Lektor', 'Guru Besar'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
