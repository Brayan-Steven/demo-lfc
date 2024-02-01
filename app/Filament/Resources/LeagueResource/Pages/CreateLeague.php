<?php

namespace App\Filament\Resources\LeagueResource\Pages;

use App\Filament\Resources\LeagueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateLeague extends CreateRecord
{
    protected static string $resource = LeagueResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Registrado Liga')
            ->body('Se creo el liga correctamente');
    }
}
