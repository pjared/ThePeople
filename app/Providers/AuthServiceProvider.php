<?php

namespace App\Providers;

use App\Models\Ballot;
use App\Models\BallotOpinions;
use App\Models\BallotPrecinct;
use App\Models\CampaignVideo;
use App\Models\Candidate;
use App\Models\CandidateApplication;
use App\Models\CandidateEvent;
use App\Models\CandidateOfficePositions;
use App\Models\CandidateOpinion;
use App\Models\CandidatePermaLink;
use App\Models\CandidatePhoto;
use App\Models\CandidatePromise;
use App\Models\CandidateRequiredStance;
use App\Models\CandidateStance;
use App\Models\Comment;
use App\Models\ControversialOpinion;
use App\Models\GroupApplication;
use App\Models\GroupBallotQuestions;
use App\Models\GroupOrganizer;
use App\Models\Location;
use App\Models\ManualCandidate;
use App\Models\PoliticalGroup;
use App\Models\PoliticalGroupCandidates;
use App\Models\PoliticalGroupEvents;
use App\Models\PublicOfficePosition;
use App\Models\RequiredStance;
use App\Models\Team;
use App\Policies\BallotOpinionsPolicy;
use App\Policies\BallotPolicy;
use App\Policies\BallotPrecinctPolicy;
use App\Policies\CampaignVideoPolicy;
use App\Policies\CandidateApplicationPolicy;
use App\Policies\CandidateEventPolicy;
use App\Policies\CandidateOfficePositionsPolicy;
use App\Policies\CandidateOpinionPolicy;
use App\Policies\CandidatePermaLinkPolicy;
use App\Policies\CandidatePhotoPolicy;
use App\Policies\CandidatePolicy;
use App\Policies\CandidatePromisePolicy;
use App\Policies\CandidateRequiredStancePolicy;
use App\Policies\CandidateStancePolicy;
use App\Policies\CommentPolicy;
use App\Policies\ControversialOpinionsPolicy;
use App\Policies\GroupApplicationPolicy;
use App\Policies\GroupBallotQuestionsPolicy;
use App\Policies\GroupOrganzierPolicy;
use App\Policies\LocationPolicy;
use App\Policies\ManualCandidatePolicy;
use App\Policies\PoliticalGroupCandidatesPolicy;
use App\Policies\PoliticalGroupEventsPolicy;
use App\Policies\PoliticalGroupPolicy;
use App\Policies\PublicOfficePositionPolicy;
use App\Policies\RequiredStancePolicy;
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
        Location::class => LocationPolicy::class,
        PublicOfficePosition::class => PublicOfficePositionPolicy::class,
        Ballot::class => BallotPolicy::class,
        BallotPrecinct::class => BallotPrecinctPolicy::class,
        BallotOpinions::class => BallotOpinionsPolicy::class,
        ControversialOpinion::class => ControversialOpinionsPolicy::class,
        RequiredStance::class => RequiredStancePolicy::class,
        CandidateApplication::class => CandidateApplicationPolicy::class,
        ManualCandidate::class => ManualCandidatePolicy::class,
        Candidate::class => CandidatePolicy::class,
        CampaignVideo::class => CampaignVideoPolicy::class,
        CandidatePermaLink::class => CandidatePermaLinkPolicy::class,
        CandidateStance::class => CandidateStancePolicy::class,
        CandidateRequiredStance::class => CandidateRequiredStancePolicy::class,
        CandidateOpinion::class => CandidateOpinionPolicy::class,
        CandidateEvent::class => CandidateEventPolicy::class,
        CandidatePhoto::class => CandidatePhotoPolicy::class,
        CandidatePromise::class => CandidatePromisePolicy::class,
        Comment::class => CommentPolicy::class,
        CandidateOfficePositions::class => CandidateOfficePositionsPolicy::class,
        GroupApplication::class => GroupApplicationPolicy::class,
        PoliticalGroup::class => PoliticalGroupPolicy::class,
        PoliticalGroupEvents::class => PoliticalGroupEventsPolicy::class,
        GroupBallotQuestions::class => GroupBallotQuestionsPolicy::class,
        GroupOrganizer::class => GroupOrganzierPolicy::class,
        PoliticalGroupCandidates::class => PoliticalGroupCandidatesPolicy::class,
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
