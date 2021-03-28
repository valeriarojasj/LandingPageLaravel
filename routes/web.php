<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmittedMailable;
use Illuminate\Support\Facades\Auth;
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
Auth::routes(['reset' => false]);




/*Route::get('importExportView', [CandidateController::class, 'importExportView']);
Route::get('export', [CandidateController::class, 'export'])->name('export');
Route::post('import', [CandidateController::class, 'import'])->name('import');
*/