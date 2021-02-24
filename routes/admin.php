<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Internal\HomeController;
use App\Http\Controllers\Internal\SubscriptionController;
use App\Http\Controllers\Internal\UserController;
use App\Http\Controllers\CandidateController;

Route::get('',[HomeController::class,'index']);
Route::resource('users',UserController::class,
[
    'names' => [
        'index' => 'internal.users.index',
        'create' => 'internal.users.register',
        'store' => 'internal.users.store'
    ]
])->only(['index','create','store']);
Route::resource('subscriptions',SubscriptionController::class)->names('internal.subscriptions')->only(['index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/candidatos', [CandidateController::class, 'getCandidates'])->name('candidatos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('internal.index');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/job-openings', function () {
    return view('internal.job-openings');
})->name('job-openings');
Route::middleware(['auth:sanctum', 'verified'])->post('/candidates-excel', [CandidateController::class, 'getCandidatesExcel']);
