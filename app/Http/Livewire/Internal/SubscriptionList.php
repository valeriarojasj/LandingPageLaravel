<?php

namespace App\Http\Livewire\Internal;
use App\Models\Subscription;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriptionList extends Component{
    use WithPagination;

    public $downloadedFilter=false;

    public function render(){
        $subscriptions= Subscription::latest('id')->paginate('10');
        return view('livewire.internal.subscription-list', compact('subscriptions'));
    }

    public function destroy($id){
        $subscription = Subscription::find($id);
        $subscription->delete();
    }
    
    public function getAllSubscription(){
        
        $subscriptions = Subscription::get([
            'id as ID',
            'email as EMAIL',
            'created_at as FECHA DE CREACIÓN',
            'updated_at as FECHA DE ACTUALIZACIÓN',
            'download_status as DESCARGADO',
            'downloaded_by as DESCARGADO POR',
            'downloaded_at as FECHA DE DESCARGA'
        ])->toArray();


        $this->dispatchBrowserEvent('downloadSubscriptions', ['subscriptions' => $subscriptions]);

    
    }
}
