<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\CampaignVideo;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditVideos extends Component
{
    public Candidate $candidate;

    public CampaignVideo $video;
    public $videos;

    protected $rules = [
        'video.link' => 'required',
    ];

    public function mount()
    {
        $this->video = new CampaignVideo();
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());
        $this->videos = $this->candidate->videos;
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-videos');
    }

    public function add_video()
    {
        $this->validate();
        
        $this->video->candidate_id = $this->candidate->id;
        $this->video->save();

        session()->flash('update-videos-success');
    }

    public function delete_video($video_id)
    {
        $this->videos->find($video_id)->delete();
        session()->flash('update-videos-failure', 'Promise deleted');
    }
}
