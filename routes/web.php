<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PoliticianController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

/* -----HOME------ */
Route::get('/', function () {
    return view('home');
});

/* -----AUTHENTICATION------ */
Route::get('/login-page', function() {
    return view('login');
});

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);

/* -----CANDIDATE------ */
Route::get('/profile/candidate/{id}', [CandidateController::class, 'getCandidateView']);

/* -----BALLOT------ */
Route::get('/ballot', [BallotController::class, 'getBallot']);

/* -----ASYNC AUTOCOMPLETE CALLS------ */
Route::group(['namespace' => 'autocomplete', 'prefix' => 'autocomplete'], function() {
    Route::get('/state', [SearchController::class, 'autocompleteState'])->name('state');
});
