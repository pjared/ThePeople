<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CampaignVideoResource\Pages\ManageCampaignVideos;
use App\Models\CampaignVideo;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class CampaignVideoResource extends Resource
{
    protected static ?string $model = CampaignVideo::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Edit Your Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                TextInput::make('link')
                    ->required()
                    ->url()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('link'),
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
            'index' => ManageCampaignVideos::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
