<?php

namespace App\Jobs;

use App\Models\Candidate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateCandidateAndBallotSearches implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $candidate_id;
    public $show;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($candidate_id, $show)
    {
        $this->candidate_id = $candidate_id;
        $this->show = $show;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Get the candidate
        $candidate = Candidate::find($this->candidate_id);
        //Remove candidate if not showing, else upsert the candidate search
        if($this->show) {
            $candidate->searchable();
        } else {
            $candidate->unsearchable();
        }

        if(count($candidate->ballot->candidates) == 0) {
            $candidate->ballot->unsearchable();
        } else {
            $candidate->ballot->searchable();
        }
    }
}
