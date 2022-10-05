<?php

namespace App\Jobs;

use App\Models\Ballot;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;

class UpdateBallotCache implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Ballot $ballot;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Ballot $ballot)
    {
        $this->ballot = $ballot;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $ballot = $this->ballot;
        Cache::forget('ballot-' . $ballot->slug);
        Cache::rememberForever('ballot-' . $ballot->slug, function () use ($ballot) {
                    return $ballot->load('location:id,name,state',
                                            'office:id,name',
                                            'candidates',
                                            'candidates.candidate:id,slug,profile_photo_path,name');
                });
        Cache::forget('ballots');
        Cache::rememberForever('ballots', function () {
            return Ballot::with('office', 'location')->withCount('candidates')->get();
        });
    }
}
