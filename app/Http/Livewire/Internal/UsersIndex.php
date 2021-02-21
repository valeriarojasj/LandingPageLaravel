<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $users=User::paginate(10);
        return view('livewire.internal.users-index',compact('users'));
    }
}
