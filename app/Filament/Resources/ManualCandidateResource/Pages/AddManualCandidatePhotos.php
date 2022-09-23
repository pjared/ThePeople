<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use Filament\Tables;
use App\Filament\Resources\ManualCandidateResource;
use App\Jobs\UpdateBallotCache;
use App\Models\Candidate;
use App\Models\CandidatePhoto;
use App\Models\ManualCandidate;
use Filament\Resources\Pages\Page;
use Filament\Pages\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use Filament\Notifications\Notification;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class AddManualCandidatePhotos extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;
    protected static string $resource = ManualCandidateResource::class;

    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-manual-candidate-photos';

    public $photo;
    public $candidate;
    public function mount(ManualCandidate $record) {
        $this->candidate = Candidate::find($record->candidate_id);
    }


    protected function getTableQuery(): Builder
    {
        return CandidatePhoto::query()->where('candidate_id', $this->candidate->id);
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
                    'candidate_id' => $this->candidate->id,
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

    /**
     * Candidates are going to upload a photo.
     * The catch is, they don't know how to even use a computer. I would be surprised if a candidate
     * could tell me what image metadata is. So we're going to strip that for them.
     */
    public function update_photo()
    {
        // 2 Levels of validation. Make sure that it's an image first
        $this->validate([
            'photo' => 'image',
        ]);
        //Now lets run it through and optimizer
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($this->photo->getRealPath());

        // Now lets make sure that it's less than a mb
        $this->validate([
            'photo' => 'max:1024'
        ]);
        if (isset($this->photo)) {
            $this->candidate->updateProfilePhoto($this->photo);
        }
        Notification::make()
        ->title('Saved successfully')
        ->success()
        ->send();

        UpdateBallotCache::dispatch($this->candidate->ballot);
    }

    public function deleteProfilePhoto() {
        // auth()->user()->deleteProfilePhoto($this->photo);
        $this->candidate->updateProfilePhoto($this->photo);
    }
}
