<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermaLinkController;
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

Route::get('/', [HomeController::class, 'getWelcomeView']);

/* -----LOGIN------ */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* -----BALLOT------ */
Route::get('/ballot/{id}', [BallotController::class, 'getBallotView'])->name('ballot');

/* -----CANDIDATE------ */

//Route for users to apply
Route::get('/apply', function () {
    return view('candidate.apply');
})->name('candidate-apply');

//The candidate profile route
Route::get('candidate/profile/{id}', [CandidateController::class, 'getCandidateView']);

Route::group(['prefix' =>'candidate', 'namespace' => 'candidate','middleware' => ['role:candidate']], function() {
    Route::get('/edit', function () {
        return view('candidate.profile');
    })->name('candidate-edit-profile');
});
/* -----ADMIN------ */
Route::group(['prefix' =>'admin', 'namespace' => 'admin','middleware' => ['role:admin']], function() {
    Route::get('/', function () {
        return view('admin.show');
    })->name('admin');
    Route::get('/candidate-approve', function () {
        return view('admin.approve-candidates');
    })->name('approve_candidates');
    Route::get('/candidate-assignment', function () {
        return view('admin.assign-candidates');
    })->name('assign_candidates');
    Route::get('/create-ballot', function () {
        return view('admin.create-ballot');
    })->name('create-ballot');
    Route::get('/candidate-links', function () {
        return view('admin.permalinks');
    })->name('candidate-links');
});

/* -----PERMALINK------ */
Route::get('/permalink/{permalink}', [PermaLinkController::class, 'directLink']);