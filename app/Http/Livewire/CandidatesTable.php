<?php

namespace App\Http\Livewire;
use App\Models\Candidate;
use Livewire\Component;

class CandidatesTable extends Component
{
    public function render()
    {
        return view('livewire.candidates-table');
    }
}
