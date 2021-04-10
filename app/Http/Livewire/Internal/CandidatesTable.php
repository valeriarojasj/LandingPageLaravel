<?php

namespace App\Http\Livewire\Internal;

use App\Models\User;
use Livewire\Component;

class CandidatesTable extends Component
{
    
    public function render()
    {
        //$routes = app('router')->getRoutes();
        //dd($routes);
        $role = User::find(auth()->user()->id)->getRoleNames()[0];
        return view('livewire.internal.candidates-table', compact('role'));
    }
}
