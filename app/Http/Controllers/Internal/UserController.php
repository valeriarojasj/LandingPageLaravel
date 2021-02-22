<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;
class UserController extends Controller
{
    use PasswordValidationRules;

    public function __construct()
    {
        $this->middleware('can:internal.users.index')->only('index');
        $this->middleware('can:internal.users.register')->only('create');
        $this->middleware('can:internal.users.store')->only('store');
    }
    
    public function index(){
        return view('internal.users.index');
    }
    public function create(){
        return view('internal.users.register');
    }
    public function store(Request $request){
        $input = $request->all();
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();
        User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'status' => "activo"
        ]);
    }
}
