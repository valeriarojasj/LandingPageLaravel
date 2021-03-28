<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use Livewire\Component;

class SubscriptionComponent extends Component{

    public $email;
    public $success=false;
    public $messageSuccess='Gracias por subscribirte!';

    protected $rules = ['email' => 'required|email|unique:subscriptions,email'];
    protected $messages =[
        'email.required' => 'Por favor ingresa tu email.',
        'email.email' => 'El formato de email no es válido.',
        'email.unique' => 'Éste email ya está subscrito a nuestro newsletter.'
    ];

    public function render(){
        return view('livewire.subscription-component');
    }

    public function save(){
        $this->validate();
        $subscription = new Subscription();
        $subscription->email = $this->email;
        $subscription->save();
        $this->success=true;        
        $this->resetAttributes();
    }

    public function closeSuccess(){
        $this->success=false;
    }

    public function resetAttributes(){   
        $this->email='';
    }
}
