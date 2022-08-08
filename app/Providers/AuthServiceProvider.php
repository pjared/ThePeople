<?php

namespace App\Providers;

use App\Models\Ballot;
use App\Models\BallotOpinions;
use App\Models\Candidate;
use App\Models\CandidatePermaLink;
use App\Models\ControversialOpinion;
use App\Models\Location;
use App\Models\Team;
use App\Policies\BallotOpinionsPolicy;
use App\Policies\BallotPolicy;
use App\Policies\CandidatePermaLinkPolicy;
use App\Policies\CandidatePolicy;
use App\Policies\ControversialOpinionsPolicy;
use App\Policies\LocationPolicy;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        BallotOpinions::class => BallotOpinionsPolicy::class,
        ControversialOpinion::class => ControversialOpinionsPolicy::class,
        Ballot::class => BallotPolicy::class,
        CandidatePermaLink::class => CandidatePermaLinkPolicy::class,
        Candidate::class => CandidatePolicy::class,
        Location::class => LocationPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
