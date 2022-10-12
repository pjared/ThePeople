<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateBackgroundResource\Pages\ManageCandidateBackgrounds;
use App\Models\CandidateBackground;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class CandidateBackgroundResource extends Resource
{
    protected static ?string $model = CandidateBackground::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $navigationLabel = 'Your Background Experience';

    public static function form(Form $form): Form
    {
        $candidate = auth()->user()->candidate;
        return $form
            ->schema([
                Hidden::make('candidate_id')
                    ->default($candidate->id),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->maxLength(65535),
                TextInput::make('year_start')
                    ->minLength(4)
                    ->maxLength(4),
                TextInput::make('year_end')
                    ->minLength(4)
                    ->maxLength(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description'),
                TextColumn::make('year_start'),
                TextColumn::make('year_end'),
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
            'index' => ManageCandidateBackgrounds::route('/'),
        ];
    }
}
