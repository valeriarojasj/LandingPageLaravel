<?php

namespace App\Http\Livewire;

use App\Models\Subscription;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;

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
        $subscription->download_status = false;
        $subscription->save();
        $this->success=true;
        $mail = new SubscriptionMail();
        Mail::to($this->email)->send($mail);
        $this->resetAttributes();
    }

    public function closeSuccess(){
        $this->success=false;
    }

    public function resetAttributes(){   
        $this->email='';
    }
}
