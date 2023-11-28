<?php

namespace App\Filament\Resources\CupResource\Pages;

use App\Filament\Resources\CupResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCups extends ManageRecords
{
    protected static string $resource = CupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
