<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Internal\HomeController;
use App\Http\Controllers\Internal\SubscriptionController;
use App\Http\Controllers\Internal\UserController;

Route::get('',[HomeController::class,'index']);
Route::resource('users',UserController::class, [
    'names' => [
        'index' => 'internal.users.index',
        'create' => 'internal.users.register',
        'store' => 'internal.register'
    ]
]);
Route::resource('subscriptions',SubscriptionController::class)->names('internal.subscriptions');