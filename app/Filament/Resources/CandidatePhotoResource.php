<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidatePhotoResource\Pages;
use App\Filament\Resources\CandidatePhotoResource\RelationManagers;
use App\Models\CandidatePhoto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidatePhotoResource extends Resource
{
    protected static ?string $model = CandidatePhoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                Forms\Components\FileUpload::make('attachment')
                    ->image()
                    ->imagePreviewHeight('250')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->maxSize(1024)
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->label('Order of the photo')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('attachment'),
                Tables\Columns\TextColumn::make('order'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ManageCandidatePhotos::route('/'),
        ];
    }
}
