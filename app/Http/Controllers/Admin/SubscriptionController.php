<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptions= Subscription::latest('id')->paginate('10');
        return view('admin.subscriptions.index',compact('subscriptions'));
    }
}
