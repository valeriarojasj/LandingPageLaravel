<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobOpening;

class ActiveJobs extends Component
{
    public $page = 0;
    public $cantidad=0;
    public $maxPages;
    public $jobs = [];
    public $title;
    public $isMount = true;
    public $selectedJob;
    public $job_opening_id;
    protected $listeners = [
        'setSelectedJob' => 'setSelectedJob'
    ];

    protected $rules = [
        'job_opening_id' => 'required|numeric|exists:job_openings,id'
        
    ];
    protected $messages =[
        'job_opening_id.required' => 'Por favor ingresa un ID.',
        'job_opening_id.numeric' => 'El ID den=be ser numérico',
        'job_opening_id.exists' => 'El ID ingresado no existe'

       
    ];
    public function render()
    {
 
  
        return view('livewire.active-jobs');
    }
    public function increment(){
        $this->cantidad = JobOpening::select('*')->where('job_status','=','Publicada')->count();
        $this->maxPages = floor($this->cantidad/9);
        if($this->page < $this->maxPages){
            $this->page++;
            $this->jobs = $this->getJobOpening();
        }
    }
    public function mount(){
        $this->jobs = $this->getJobOpening();
        $this->cantidad = JobOpening::select('*')->where('job_status','Publicada')->count();
        $this->maxPages = floor($this->cantidad/9);
        
    }
    public function decrement(){
        if($this->page>0){
            $this->page--;
            $this->jobs = $this->getJobOpening();
        }
    }
 
    public function getJobOpening(){
        $records = JobOpening::select('*')
        ->where('job_status','Publicada')
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

    public function search(){
        $this->validate();
        
        $job=JobOpening::find($this->job_opening_id);
        
        $this->setSelectedJob($job);
        $this->job_opening_id=null;
        
      

    }



}