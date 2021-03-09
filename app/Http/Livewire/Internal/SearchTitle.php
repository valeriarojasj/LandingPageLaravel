<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\JobOpening;
class SearchTitle extends Component
{
    public $carousel;
    public $job_opening_id;
    public $title;
    public function render()
    {
        return view('livewire.internal.search-title');
    }
    public function mount(){
        $this->job_opening_id = $this->carousel->job_opening_id;
        $this->search();
    }
    public function search(){
        $job=JobOpening::find($this->job_opening_id);
        if($job){
            $this->title=$job->job_title;
        }else{
            $this->title='';
        }
    }
}
