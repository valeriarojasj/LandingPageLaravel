<?php

namespace App\Http\Livewire\Internal;

use App\Models\User;

use Livewire\Component;

class UserRow extends Component
{
    public $user;
    public $editable=false;
    public $role;
    public $originalRole;
    public $status;
    public $created_at;
    public $updated_at;
    

    public function render()


    {   
        return view('livewire.internal.user-row');
    }
    public function mount(){
        $this->status = $this->user->status;
        $this->role = $this->user->role;
        $this->originalRole = $this->user->role;
        $this->created_at =$this->user->created_at;
      
      
    }
    public function edit(){
        $this->editable = true;
    }
    public function cancel(){
        $this->status = $this->user->status;
        $this->role = $this->originalRole;
        $this->editable = false;
    }
    public function update(){
        $user = User::find($this->user->id);
        $user->status = $this->status;
        $user->removeRole($this->originalRole);
        $user->assignRole($this->role);
        $user->updated_at = date('d-m-Y H:i:s');
        $user->save();
        $this->updateUser();
        $this->editable=false;
    }
    public function updateUser(){
        $this->user = User::find($this->user->id);
    }
}
