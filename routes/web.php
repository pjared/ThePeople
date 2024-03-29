<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermaLinkController;
use App\Http\Controllers\SocialiteController;
use App\Http\Livewire\Ballot\FlagComparison;
use App\Http\Livewire\Ballot\PrintBallot;
use App\Http\Livewire\Candidate\Application;
use App\Http\Livewire\Groups\PoliticalGroupApplication;
use App\Http\Livewire\Groups\ShowGroup;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/view-email', function() {
//     $list = [
//         "Provo Mayor" => "Lord Macbeth",
//         "Utah US Senate" => "Jared Pacheco"
//     ];
//     $mail = new App\Mail\EmailBallotToUser($list);
//     return $mail->render();
// });

Route::get('/', [HomeController::class, 'getWelcomeView'])->name('welcome');

Route::get('/wireframe', function() {
    return view('wireframe');
})->name('wireframe');

Route::get('about-us', [HomeController::class, 'getAboutUsView'])->name('about-us');

Route::get('admin/login', function() {
    return redirect('/login');
});

Route::post('submit-feedback', [HomeController::class, 'submitFeedback'])->middleware(['auth:sanctum']);

/* -----GROUPS------ */
Route::get('groups', function()  {
    return view('groups');
})->name('groups');

Route::get('groups/{political_group}', ShowGroup::class);

Route::get('group/apply', PoliticalGroupApplication::class)->name('group-apply')->middleware(['auth:sanctum', 'verified']);

/* -----LOGIN------ */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    Route::get('home', function()  {
        //Keeping this it's own view because with user information we're going to load them a customized page
        return view('welcome');
    })->name('home');
});

/* -----BALLOT------ */
Route::get('ballot/{ballot:slug}', [BallotController::class, 'getView'])->name('ballot');
//[BallotController::class, 'getView']

Route::post('ballot/vote/{ballot:slug}', [BallotController::class, 'update_vote'])->name('ballot.vote')->middleware(['auth:sanctum']);

Route::get('flag-comparison/{ballot:slug}', FlagComparison::class)->middleware(['auth:sanctum']);

Route::get('print-ballot', PrintBallot::class)->middleware(['auth:sanctum']);

/* -----CANDIDATE------ */

//APPLICATION
Route::get('apply', Application::class)->name('candidate-apply')->middleware(['auth:sanctum', 'verified', 'has2FAEnabled']);

//PROFILE VIEW
Route::get('candidate/profile/{candidate:slug}', [CandidateController::class, 'getView'])->name('candidate.show');


/* -----ADMIN------ */


/* -----PERMALINK REDIRECTING------ */
Route::get('permalink/{permalink}', [PermaLinkController::class, 'directLink']);

/* -----SOCIALITE------ */



//GOOGLE
Route::get('auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('auth/google/callback',[SocialiteController::class, 'handleGoogleCallback']);

//FACEBOOK
Route::get('auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('auth/facebook/callback', [SocialiteController::class, 'handleFacebookCallback']);


//TWITTER
Route::get('auth/twitter/redirect', function () {
    return Socialite::driver('twitter')->redirect();
});

Route::get('auth/twitter/callback', [SocialiteController::class, 'handleTwitterCallback']);


// Route::get('/newfeatures', NewFeature::class);
