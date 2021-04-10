<?php

namespace App\Http\Livewire\Internal;
use App\Models\Subscription;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriptionList extends Component{
    use WithPagination;

    public $downloadedFilter;

    public function render(){
        $subscriptions= Subscription::latest('id')
            ->when($this->downloadedFilter, function ($query) {
                if($this->downloadedFilter=='SI'){
                    $query->where('download_status', 1);
                } else {
                    $query->where('download_status', 0);
                }
            }, function ($query) {})
            ->with('downloadedBy')
            ->paginate('10');
        return view('livewire.internal.subscription-list', compact('subscriptions'));
    }

    public function destroy($id){
        $subscription = Subscription::find($id);
        $subscription->delete();
    }
    
    public function getAllSubscription(){
        $query = Subscription::when($this->downloadedFilter, function ($query) {
            if($this->downloadedFilter=='SI'){
                $query->where('download_status', 1);
            } else {
                $query->where('download_status', 0);
            }
        }, function ($query) {});

        $subscriptions= $query->get([
            'id as ID',
            'email as EMAIL',
            'created_at as FECHA DE CREACIÓN',
            'updated_at as FECHA DE ACTUALIZACIÓN',
            'download_status as DESCARGADO',
            'downloaded_by as DESCARGADO POR',
            'downloaded_at as FECHA DE DESCARGA'
        ])->toArray();
        $query->update([
            'downloaded_by' => auth()->user()->id,
            'download_status'=>true,
            'downloaded_at' => now()    
        ]);
        $this->dispatchBrowserEvent('downloadSubscriptions', ['subscriptions' => $subscriptions]);
        $this->downloadedFilter=null;
    }
}
