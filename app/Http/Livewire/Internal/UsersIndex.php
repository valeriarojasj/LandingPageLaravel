<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use App\Http\Controllers\Internal\UserController;
class UsersIndex extends Component
{
    use WithPagination;
    public $editable = false;
    public function render()
    {
        $users = User::leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.*', 'roles.name as role_name')
            ->paginate(10);
        return view('livewire.internal.users-index',compact('users'));
    }
    public function edit(){
        $this->editable = true;
    }
    public function cancel(){
        $this->editable = false;
    }

}
