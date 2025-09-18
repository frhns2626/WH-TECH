<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Dosen', '271'),
            Stat::make('Dosen', '271'),
            Stat::make('Pegawai Aktif', '182'),
        ];
    }
}
