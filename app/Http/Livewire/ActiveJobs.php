<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobOpening;
use Illuminate\Support\Facades\Session;
class ActiveJobs extends Component
{
    public $page = 0;
    public $cantidad=0;
    public $maxPages;
    public $jobs = [];
    public $title;
    public $isMount = true;
    public $selectedJob;
    protected $listeners = [
        'setSelectedJob' => 'setSelectedJob'
    ];
    public function render()
    {
        
        return view('livewire.active-jobs');
    }
    public function increment(){
        $this->cantidad = JobOpening::select('*')->count();
        $this->maxPages = floor($this->cantidad/9);
        if($this->page < $this->maxPages){
            $this->page++;
            $this->jobs = $this->getJobOpening();
        }
    }
    public function mount(){
        $this->jobs = $this->getJobOpening();
    }
    public function decrement(){
        if($this->page>0){
            $this->page--;
            $this->jobs = $this->getJobOpening();
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
    public function setSelectedJob(JobOpening $job){
        $this->title=$job->job_title;
        $this->emit('updateJob', $job->id);
    }

    public function showSuccessMessage(){
        $this->dispatchBrowserEvent('showtoast', ['id' => 'liveToastBtn', 'message' => 'Gracias por postularte!']);
    }
}