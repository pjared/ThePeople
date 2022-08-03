<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermaLinkController;
use App\Http\Controllers\SocialiteController;
use App\Http\Livewire\Admin\ApproveCandidates;
use App\Http\Livewire\Admin\AssignCandidates;
use App\Http\Livewire\Admin\CreateBallot;
use App\Http\Livewire\Admin\CreateCandidate;
use App\Http\Livewire\Admin\CreateOpinions;
use App\Http\Livewire\Admin\EditOpinions;
use App\Http\Livewire\Admin\EditPermalinks;
use App\Http\Livewire\Candidate\Application;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Sitemap\SitemapGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()  {
    return view('welcome');
});

Route::get('/about-us', [HomeController::class, 'getAboutUsView'])->name('about-us');

/* -----Site Map------ */
// Route::get('generate-sitemap', function () {
//     SitemapGenerator::create('http://localhost')
//         ->writeToFile(public_path('sitemap.xml'));
// });

/* -----LOGIN------ */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    // 'verified'
])->group(function () {
    Route::get('/home', function()  {
        //Keeping this it's own view because with user information we're going to load them a customized page
        return view('welcome');
    })->name('home');
});

/* -----BALLOT------ */
Route::get('/ballot/{id}', [BallotController::class, 'getBallotView'])->name('ballot');

/* -----CANDIDATE------ */

//APPLICATION
Route::get('/apply', Application::class)->name('candidate-apply')->middleware(['verified', 'has2FAEnabled']);

//PROFILE VIEW
Route::get('candidate/profile/{id}', [CandidateController::class, 'getCandidateView']);

//PROFILE EDITING
Route::group(['prefix' =>'candidate','middleware' => ['role:candidate']], function() {
    Route::get('/dashboard', [CandidateController::class, 'getCandidateDashboard'])->name('candidate-dashboard');
    Route::get('/preview', \App\Http\Livewire\Candidate\Preview::class)->name('candidate-preview');
    Route::group(['prefix' =>'edit'], function() {
        Route::get('/info', \App\Http\Livewire\Candidate\Edit\EditInfo::class);
        Route::get('/bio', \App\Http\Livewire\Candidate\Edit\EditBio::class);
        Route::get('/stances', \App\Http\Livewire\Candidate\Edit\EditStances::class);
        Route::get('/promises', \App\Http\Livewire\Candidate\Edit\EditPromises::class);
        Route::get('/videos', \App\Http\Livewire\Candidate\Edit\EditVideos::class);
        Route::get('/positions', \App\Http\Livewire\Candidate\Edit\EditPositions::class);
    });
});

/* -----ADMIN------ */
Route::group(['prefix' =>'admin','middleware' => ['role:admin']], function() {
    Route::get('/', function () {
        return view('admin.show');
    })->name('admin');
    Route::group(['prefix' =>'candidate'], function() {
        Route::get('/approve', ApproveCandidates::class)->name('approve_candidates');
        Route::get('/assign', AssignCandidates::class)->name('assign_candidates');
        Route::get('/links', EditPermalinks::class)->name('candidate-links');
        Route::get('/create', CreateCandidate::class)->name('create-candidate');

    });

    Route::get('/create-ballot', CreateBallot::class)->name('create-ballot');

    Route::group(['prefix' =>'opinions'], function() {
        Route::get('/create', CreateOpinions::class)->name('create-opinions');

        Route::get('/edit', EditOpinions::class)->name('edit-opinions');
    });
});

/* -----PERMALINK------ */
Route::get('/permalink/{permalink}', [PermaLinkController::class, 'directLink']);

/* -----SOCIALITE------ */

//GOOGLE
Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback',[SocialiteController::class, 'handleGoogleCallback']);

//TWITTER
Route::get('/auth/twitter/redirect', function () {
    return Socialite::driver('twitter-oauth-2')->redirect();
});

Route::get('/auth/twitter/callback', [SocialiteController::class, 'handleTwitterCallback']);

//FACEBOOK
Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/facebook/callback', [SocialiteController::class, 'handleTwitterCallback']);
