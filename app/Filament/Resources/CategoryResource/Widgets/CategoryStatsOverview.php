<?php

namespace App\Filament\Resources\CategoryResource\Widgets;

use App\Models\category;
use App\Models\Coach;
use App\Models\League;
use App\Models\Player;
use App\Models\Season;
use App\Models\Sponsor;
use App\Models\Stadium;
use App\Models\team;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoryStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Categorias', category::all()->count()),
            Stat::make('Total Ligas', League::all()->count()),
            Stat::make('Total Temporadas', Season::all()->count()),
            Stat::make('Total Estadios', Stadium::all()->count()),
            Stat::make('Total Patrocinadores', Sponsor::all()->count()),
            Stat::make('Total Equipos', team::all()->count()),
            Stat::make('Total Usarios', User::all()->count()),
            Stat::make('Total Jugadores', Player::all()->count()),
            // Stat::make('Average time on page', '3:12'),
         ];
    }
}
