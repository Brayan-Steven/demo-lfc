<?php

namespace App\Filament\Resources\MunicipalityResource\Pages;

use App\Filament\Resources\MunicipalityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateMunicipality extends CreateRecord
{
    protected static string $resource = MunicipalityResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Registrado Municipio')
            ->body('Se creo el municipio correctamente');
    }
}
