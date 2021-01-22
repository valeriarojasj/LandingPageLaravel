<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CandidateController;
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
    return view('index');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/candidatos', [CandidateController::class, 'getCandidates'])->name('candidatos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/job-openings', function () {
    return view('livewire.job-openings');
})->name('job-openings');
Route::middleware(['auth:sanctum', 'verified'])->post('/candidates-excel', [CandidateController::class, 'getCandidatesExcel']);
/*Route::get('importExportView', [CandidateController::class, 'importExportView']);
Route::get('export', [CandidateController::class, 'export'])->name('export');
Route::post('import', [CandidateController::class, 'import'])->name('import');
*/