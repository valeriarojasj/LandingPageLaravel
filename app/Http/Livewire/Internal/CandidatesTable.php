<?php

namespace App\Http\Livewire\Internal;
use Livewire\Component;
class CandidatesTable extends Component
{
    
    public function render()
    {
        //$routes = app('router')->getRoutes();
        //dd($routes);
        return view('livewire.internal.candidates-table');
    }
    

}