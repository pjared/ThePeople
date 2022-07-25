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

Route::get('/', function()  {
    return view('welcome');
});

/* -----LOGIN------ */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
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
Route::get('/apply', function () {
    return view('candidate.apply');
})->name('candidate-apply');

//PROFILE VIEW
Route::get('candidate/profile/{id}', [CandidateController::class, 'getCandidateView']);

//PROFILE EDITING
Route::group(['prefix' =>'candidate', 'namespace' => 'candidate','middleware' => ['role:candidate']], function() {
    Route::get('/dashboard', function () {
        return view('candidate.dashboard');
    })->name('candidate-dashboard');
    Route::get('/preview/{id}', [CandidateController::class, 'getCandidatePreview'])->name('candidate-preview');
    Route::group(['prefix' =>'edit', 'namespace' => 'edit'], function() {
        Route::get('/info', function () {
            return view('candidate.profile');
        })->name('candidate-edit-profile');
    });    
});

/* -----ADMIN------ */
Route::group(['prefix' =>'admin', 'namespace' => 'admin','middleware' => ['role:admin']], function() {
    Route::get('/', function () {
        return view('admin.show');
    })->name('admin');
    Route::group(['prefix' =>'candidate', 'namespace' => 'candidate'], function() {
        Route::get('/approve', function () {
            return view('admin.approve-candidates');
        })->name('approve_candidates');
        Route::get('/assign', function () {
            return view('admin.assign-candidates');
        })->name('assign_candidates');
        Route::get('/links', function () {
            return view('admin.permalinks');
        })->name('candidate-links');
    });
    
    Route::get('/create-ballot', function () {
        return view('admin.create-ballot');
    })->name('create-ballot');

    Route::group(['prefix' =>'opinions', 'namespace' => 'opinions'], function() {
        Route::get('/create', function () {
            return view('admin.create-opinions');
        })->name('create-opinions');
        Route::get('/edit', function () {
            return view('admin.edit-opinions');
        })->name('edit-opinions');
    });
});

/* -----PERMALINK------ */
Route::get('/permalink/{permalink}', [PermaLinkController::class, 'directLink']);