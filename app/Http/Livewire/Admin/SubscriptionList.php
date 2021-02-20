<?php

namespace App\Http\Livewire\Admin;
use App\Models\Subscription;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriptionList extends Component
{
   use WithPagination;
    public function render()
    {
        $subscriptions= Subscription::latest('id')->paginate('10');
        return view('livewire.admin.subscription-list', compact('subscriptions'));
    }
}
