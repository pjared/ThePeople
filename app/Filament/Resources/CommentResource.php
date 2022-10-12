<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages\ManageComments;
use App\Models\Comment;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Manage Your Profile';
    protected static ?string $navigationLabel = 'Your Profile Comments';

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
                TextColumn::make('comment')
                    ->limit(60),
                TextColumn::make('reply')
                    ->limit(60),
                BooleanColumn::make('is_approved')
                    ->label('Show on Profile'),
                TextColumn::make('user.name')
                    ->label('User\'s Name'),
                TextColumn::make('created_at')
                    ->label('Posted At'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                DeleteAction::make(),
                Action::make('Reply To Comment')
                    ->mountUsing(fn (ComponentContainer $form, Comment $record) => $form->fill([
                        'reply' => $record->reply,
                        'comment' => $record->comment,
                    ]))
                    ->action(function (Comment $record, array $data): void {
                        $record->reply = $data['reply'];
                        $record->is_approved = $data['is_approved'];
                        $record->save();
                    })
                    ->form([
                        Textarea::make('comment')
                            ->disabled()
                            ->dehydrated(false),
                        Textarea::make('reply')
                            ->label('Reply'),
                        Toggle::make('is_approved')
                            ->label('Show on profile')
                            ->required(),
                    ]),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageComments::route('/'),
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
