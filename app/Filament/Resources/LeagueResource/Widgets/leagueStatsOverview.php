<?php

namespace App\Filament\Resources\LeagueResource\Widgets;

use App\Models\League;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class leagueStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Total Ligas', League::all()->count()),
            // Stat::make('Bounce rate', '21%'),
            // Stat::make('Average time on page', '3:12'),
        ];
    }
}
