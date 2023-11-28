<?php

namespace App\Filament\Resources\TrophyResource\Pages;

use App\Filament\Resources\TrophyResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTrophies extends ManageRecords
{
    protected static string $resource = TrophyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
