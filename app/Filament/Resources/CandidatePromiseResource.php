<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidatePromiseResource\Pages\ManageCandidatePromises;
use App\Models\CandidatePromise;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class CandidatePromiseResource extends Resource
{
    protected static ?string $model = CandidatePromise::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe';
    protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $navigationLabel = 'Your Promises';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                TextInput::make('promise')
                    ->required()
                    ->maxLength(255),
                Textarea::make('plan')
                    // ->required()
                    ->maxLength(65535),
                // Toggle::make('order')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('promise'),
                TextColumn::make('plan')
                    ->limit(80),
                // BooleanColumn::make('order'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageCandidatePromises::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
