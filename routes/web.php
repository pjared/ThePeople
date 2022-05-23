<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PoliticianController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/candidate/{id}', [CandidateController::class, 'getCandidateView']);

Route::post('/ballot', [BallotController::class, 'getBallot']);

Route::get('/edit/search', [PoliticianController::class, 'politician_edit_search']);

Route::get('/edit/profile', [PoliticianController::class, 'politician_edit_page']);