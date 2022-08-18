<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use Filament\Tables;
use App\Filament\Resources\ManualCandidateResource;
use App\Models\CandidatePhoto;
use App\Models\ManualCandidate;
use Filament\Resources\Pages\Page;
use Filament\Pages\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;

class AddManualCandidatePhotos extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;
    protected static string $resource = ManualCandidateResource::class;

    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-manual-candidate-photos';
    public $candidate_id;
    public function mount(ManualCandidate $record) {
        $this->candidate_id = $record->candidate_id;
    }


    protected function getTableQuery(): Builder
    {
        return CandidatePhoto::query()->where('candidate_id', $this->candidate_id);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\ImageColumn::make('attachment'),
            Tables\Columns\TextColumn::make('order'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\DeleteAction::make(),
        ];
    }


    protected function getActions(): array
    {
        return [
            Action::make('Add Stance')->action(function (array $data): void {
                CandidatePhoto::create([
                    'candidate_id' => $this->candidate_id,
                    'attachment' => $data['attachment'],
                    'order' => $data['order'],
                ]);
            })
            ->form([
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
            ]),
        ];
    }

}
