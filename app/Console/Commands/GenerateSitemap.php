<?php

namespace App\Console\Commands;

use App\Models\Ballot;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the site';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
                        ->add(Url::create(config('app.url')));
        $ballots = Ballot::with(['candidates.candidate'])->get();

        foreach($ballots as $ballot) {
            $sitemap->add(Url::create('ballot/' . $ballot->slug)
                            ->setPriority(0.5)
                            ->setChangeFrequency('weekly'));
            foreach($ballot->candidates as $candidate) {
                $sitemap->add(Url::create('candidate/profile/' . $candidate->candidate->slug)
                                ->setPriority(0.9)
                                ->setChangeFrequency('weekly')
                                ->setLastModificationDate($candidate->updated_at));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
