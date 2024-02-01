<?php

namespace App\Filament\Resources\CupResource\Pages;

use App\Filament\Resources\CupResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Notifications\Notification;


class ManageCups extends ManageRecords
{
    protected static string $resource = CupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Registrado Copa')
            ->body('Se creo el copa correctamente');
    }
}
