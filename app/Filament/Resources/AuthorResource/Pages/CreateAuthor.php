<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard\Step;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAuthor extends CreateRecord
{
    // use CreateRecord\Concerns\HasWizard;
    protected static string $resource = AuthorResource::class;
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Author Created';
    }
    // protected function getSteps(): array
    // {
    //     return [
    //         Step::make('Name')
    //             ->description('Give the category a clear and unique name')
    //             ->schema([
    //                 TextInput::make('name')
    //                     ->required()
    //                     ->reactive()
    //                     ->afterStateUpdated(fn ($state, callable $set) => $set('slug', str_slug($state))),
    //                 TextInput::make('slug')
    //                     ->disabled()
    //                     ->required(),
    //                     // ->unique(Category::class, 'slug', fn ($record) => $record),
    //             ]),
    //         Step::make('Description')
    //             ->description('Add some extra details')
    //             ->schema([
    //                 MarkdownEditor::make('description')
    //                     ->columnSpan('full'),
    //             ]),
    //         Step::make('Visibility')
    //             ->description('Control who can view it')
    //             ->schema([
    //                 Toggle::make('is_visible')
    //                     ->label('Visible to customers.')
    //                     ->default(true),
    //             ]),
    //     ];
    // }
}
