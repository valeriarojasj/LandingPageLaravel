<?php

namespace App\Http\Controllers\Internal;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller {
    public function index(){
        return view('internal.subscriptions.index');
    }
}
