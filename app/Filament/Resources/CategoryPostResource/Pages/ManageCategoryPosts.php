<?php

namespace App\Filament\Resources\CategoryPostResource\Pages;

use App\Filament\Resources\CategoryPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Notifications\Notification;


class ManageCategoryPosts extends ManageRecords
{
    protected static string $resource = CategoryPostResource::class;

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
            ->title('Registrado Categoria de publicación')
            ->body('Se creo el categoria de publicación correctamente');
    }
}
