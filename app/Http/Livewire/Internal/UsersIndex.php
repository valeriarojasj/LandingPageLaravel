<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use App\Models\JobOpening;
use App\Models\JobUser;

class UsersIndex extends Component{
    use WithPagination;

    public $editable = false;
    public $job_id;
    public $job_title;
    public $job;
    public $jobUsers=[];

    public function mount(){
        $this->job=new JobOpening();
    }

    public function render(){
        $jobs= JobOpening::all();
        $users = User::leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.*', 'roles.name as role')
            ->latest('users.id')
            ->paginate('10');

        $allUsers=User::leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.*', 'roles.name as role')
            ->get();
   
        return view('livewire.internal.users-index', compact('users','jobs','allUsers'));       
    }

    public function search(){    
        $this->job=JobOpening::find($this->job_id);
        if($this->job){
            $this->job_title=$this->job->job_title;
            $this->jobUsers=JobUser::where('job_id', $this->job_id)->get()->pluck('user_id')->toArray();
        }else{
            $this->job_title='';
            $this->job=new JobOpening();
            $this->jobUsers=[];
        }
    }
}
