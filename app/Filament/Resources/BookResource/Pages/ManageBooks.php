<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBooks extends ManageRecords
{
    protected static string $resource = BookResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->successNotification(
                Notification::make()
                    ->success()
                    ->title('Book Created')
                    ->body('The Book has been created successfully.'),
            ),
            Actions\Action::make('Verify')
                ->label('Verify')
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
}
