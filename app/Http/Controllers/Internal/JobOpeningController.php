<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class JobOpeningController extends Controller
{
    public function createPermission(Request $request){
        $users = User::with('roles')->get();
        //dd($users[0]->getRoleNames()[0]);
        $adminUsers = User::role('Admin')->get();
        dd($adminUsers);
        return 'se guardo';
    }
}
