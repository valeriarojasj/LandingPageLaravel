<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\UserController;

Route::get('',[HomeController::class,'index']);
Route::resource('users',UserController::class)->names('admin.users');
Route::resource('subscriptions',SubscriptionController::class)->names('admin.subscriptions');
