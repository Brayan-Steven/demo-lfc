<?php

namespace App\Filament\Resources\CoachResource\Pages;

use App\Filament\Resources\CoachResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateCoach extends CreateRecord
{
    protected static string $resource = CoachResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Registrado Usuario')
            ->body('Se creo el usuario correctamente');
    }
}
