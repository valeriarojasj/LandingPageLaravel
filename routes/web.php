<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmittedMailable;

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

Route::get('application-submitted', function () {

    $correo = new ApplicationSubmittedMailable;
    Mail::to('valeriarojasj@gmail.com')->send($correo);
    return "Mensaje enviado";
});



/*Route::get('importExportView', [CandidateController::class, 'importExportView']);
Route::get('export', [CandidateController::class, 'export'])->name('export');
Route::post('import', [CandidateController::class, 'import'])->name('import');
*/