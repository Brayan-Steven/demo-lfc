<?php

namespace App\Filament\Resources\FormatResource\Pages;

use App\Filament\Resources\FormatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateFormat extends CreateRecord
{
    protected static string $resource = FormatResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Formato Registrado')
            ->body('Se subio correctament el documento');
    }
}
