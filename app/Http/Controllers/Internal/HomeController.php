<?php

namespace App\Http\Controllers\Internal;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index(){
       return view('internal.index');
    }
}
