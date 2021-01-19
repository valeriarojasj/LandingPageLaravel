<?php

namespace App\Http\Livewire;
use App\Http\Controllers\CandidateController;
use Livewire\Component;
use Illuminate\Support\Facades\Schema;

class CandidatesTable extends Component
{
    
    public function render()
    {
        $candidate = new CandidateController();
        return view('livewire.candidates-table', [
            'selectInfo' => $candidate->getSelectInfo()
        ]);
    }
    

}
