<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('comment')
                    ->limit(60),
                Tables\Columns\TextColumn::make('reply')
                    ->limit(60),
                Tables\Columns\BooleanColumn::make('is_approved')
                    ->label('Show on Profile'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User\'s Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('Reply To Comment')
                    ->mountUsing(fn (Forms\ComponentContainer $form, Comment $record) => $form->fill([
                        'reply' => $record->reply,
                        'comment' => $record->comment,
                    ]))
                    ->action(function (Comment $record, array $data): void {
                        $record->reply = $data['reply'];
                        $record->is_approved = $data['is_approved'];
                        $record->save();
                    })
                    ->form([
                        Forms\Components\Textarea::make('comment')
                            ->disabled()
                            ->dehydrated(false),
                        Forms\Components\Textarea::make('reply')
                            ->label('Reply'),
                        Forms\Components\Toggle::make('is_approved')
                            ->label('Show on profile')
                            ->required(),
                    ]),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageComments::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
                            ->where(function($query) {
                                $query->where('commentable_id', auth()->id())
                                ->where('commentable_type', "App\Models\Comment");
                            })
                            ->orWhere(function($query) {
                                $query->where('commentable_id', auth()->user()->candidate->id)
                                ->where('commentable_type', "App\Models\Candidate");
                            });
    }
}
