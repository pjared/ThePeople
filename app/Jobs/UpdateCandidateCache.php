<?php

namespace App\Jobs;

use App\Models\Candidate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;

class UpdateCandidateCache implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Candidate $candidate;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Candidate $candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $candidate = $this->candidate;
        Cache::forget('candidate-' . $candidate->slug);
        Cache::rememberForever('candidate-' . $candidate->slug, function () use ($candidate) {
                    return $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name',
                        'required_stances', 'stances',
                        'opinions', 'manual_candidate', 'educations', 'backgrounds')
                        ->loadCount('events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions',
                        'opinions', 'educations', 'backgrounds');
                });
    }
}
