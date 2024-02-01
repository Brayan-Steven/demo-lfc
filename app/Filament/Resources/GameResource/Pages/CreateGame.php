<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateGame extends CreateRecord
{
    protected static string $resource = GameResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Registrado Juego')
            ->body('Se creo el juego correctamente');
    }
}
