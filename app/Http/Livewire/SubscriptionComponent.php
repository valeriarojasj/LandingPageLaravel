<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use Livewire\Component;

class SubscriptionComponent extends Component
{
    public $email;
    public $modalOpen=false;

    protected $rules = [
        'email' => 'required|email|unique:subscriptions,email'
    ];
    protected $messages =[
        'email.required' => 'Por favor ingresa tu email.',
        'email.email' => 'El formato de email no es válido.',
        'email.unique' => 'Éste email ya está subscrito a nuestro newsletter.'
    ];


    public function render()
    {
        return view('livewire.subscription-component');
    }

    public function modalOpen(){
        $this->modalOpen = true;
    }


    public function save(){
        $this->validate();
        $subscription = new Subscription();
        $subscription->email = $this->email;
        $subscription->save();
        
        $this->resetAttributes();
        $this->modalOpen = true;
     
    }
    public function resetAttributes(){
       
        $this->email='';
        

       
    }
}
