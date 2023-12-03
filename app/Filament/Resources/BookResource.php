<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Author;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Components\Actions\Modal\Actions\Action;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make("name")->label("Book Name")->required()->length(10),
                Forms\Components\TextInput::make("sku"),
                Forms\Components\TextInput::make("pages")->numeric(),
                Forms\Components\TextInput::make("price")->numeric(),
                Forms\Components\Select::make("author_id")
                ->label("Author")
                ->options(Author::all()->sortBy('name')->pluck('name', 'id'))->required(),
                Forms\Components\Actions\Action::make('Check')
                ->action(function () {
                    // action goes here
                })
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('author.name')->label('Author Name'),
                Tables\Columns\TextColumn::make('name')->label('Book Name'),
                Tables\Columns\TextColumn::make('sku'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBooks::route('/'),
        ];
    }   
}
