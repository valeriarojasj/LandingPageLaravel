<?php

namespace App\Http\Controllers\Internal;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('internal.index');
    }
}
