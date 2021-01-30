<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobOpening;
class ActiveJobs extends Component
{
    public $page = 0;
    public $cantidad=0;
    public $maxPages;
    public function render()
    {
        
        
        $jobs = $this->getJobOpening();
        return view('livewire.active-jobs', compact('jobs'));
    }
    public function increment(){
        $this->cantidad = JobOpening::select('*')->count();
        $this->maxPages = floor($this->cantidad/9);
        if($this->page < $this->maxPages){
            $this->page++;
            $jobs = $this->getJobOpening();
        }
        
    }
    
    public function decrement(){
        if($this->page>0){
            $this->page--;
            $job = $this->getJobOpening();
        }
    }
    public function getJobOpening(){
        $records = JobOpening::select('*')
        ->orderby('id', 'desc')
        ->skip($this->page*9)
        ->take(9)
        ->get();
        return $records;
    }
}
