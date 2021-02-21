<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.internal.users-index');
    }
}
