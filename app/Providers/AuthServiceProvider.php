<?php

namespace App\Providers;

use App\Models\BallotOpinions;
use App\Models\ControversialOpinion;
use App\Models\Team;
use App\Policies\BallotOpinionsPolicy;
use App\Policies\ControversialOpinionsPolicy;
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
