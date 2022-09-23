<?php

namespace App\Providers;

use App\Models\Ballot;
use Illuminate\Support\ServiceProvider;
use Spatie\Export\Exporter;

class ExportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Exporter $exporter)
    {
        $exporter->crawl(false);

        $exporter->paths(['/']);

        $ballot_paths = [];
        $candidate_paths = [];
        $ballots = Ballot::with('candidates')->get();
        foreach($ballots as $ballot) {
            $ballot_paths[] = 'ballot/' . $ballot->slug;
            foreach($ballot->candidates as $candidate) {
                $candidate_paths[] = 'candidate/profile/' . $candidate->slug;
            }
        }
        $exporter->paths($ballot_paths);
        $exporter->paths($candidate_paths);
    }

}
