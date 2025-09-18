<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BlogPostsChart;
use App\Filament\Widgets\DonutChart;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,         
            BlogPostsChart::class,
            DonutChart::class,
        ];
    }
}
