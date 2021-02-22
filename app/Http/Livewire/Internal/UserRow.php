<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;

class UserRow extends Component
{
    public $user;
    public $editable=false;
    public function render()
    {
        return view('livewire.internal.user-row');
    }
    public function edit(){
        $this->editable = true;
    }
    public function cancel(){
        $this->editable = false;
    }
}
