<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use App\Models\JobOpening;
use App\Http\Controllers\Internal\UserController;
class UsersIndex extends Component
{
    use WithPagination;
    public $editable = false;
    public $job_id;
    public $job_title;


    public function render()
    {   $jobs= JobOpening::all();
        $users = User::leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.*', 'roles.name as role')
            ->latest('users.id')
            ->paginate('10');
        return view('livewire.internal.users-index', compact('users'));
    }
    public function search(){
        $job=JobOpening::find($this->job_id);
        if($job){
            $this->job_title=$job->job_title;
        }else{
            $this->job_title='';
        }
    }
    

}
