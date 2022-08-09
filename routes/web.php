<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermaLinkController;
use App\Http\Controllers\SocialiteController;
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


/* -----ADMIN------ */


/* -----PERMALINK REDIRECTING------ */
Route::get('/permalink/{permalink}', [PermaLinkController::class, 'directLink']);

/* -----SOCIALITE------ */

//GOOGLE
Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback',[SocialiteController::class, 'handleGoogleCallback']);

//TWITTER
Route::get('/auth/twitter/redirect', function () {
    return Socialite::driver('twitter')->redirect();
});

Route::get('/auth/twitter/callback', [SocialiteController::class, 'handleTwitterCallback']);

//FACEBOOK
Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/facebook/callback', [SocialiteController::class, 'handleFacebookCallback']);
