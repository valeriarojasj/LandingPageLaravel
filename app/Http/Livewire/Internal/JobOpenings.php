<?php

namespace App\Http\Livewire\Internal;


use App\Models\Candidate;
use Livewire\Component;
use App\Models\JobOpening;
use Livewire\WithPagination;
use App\Models\Carousel;
use App\Models\User;



use App\Http\Controllers\Internal\CarouselController;


class JobOpenings extends Component
{
    use WithPagination;
    protected $paginationTheme="tailwind";

    public  
    $job_status,
    $job_id, 
    $job_title,
    $company_type,
    $job_location,
    $job_link,
    $open_question_1,
    $open_question_2,
    $multiple_choice_question_1,
    $multiple_choice1_option_1,
    $multiple_choice1_option_2,
    $multiple_choice1_option_3,
    $multiple_choice_question_2,
    $multiple_choice2_option_1,
    $multiple_choice2_option_2,
    $multiple_choice2_option_3,
    $checkbox_question_1,
    $checkbox1_option_1,
    $checkbox1_option_2,
    $checkbox1_option_3,
    $checkbox_question_2,
    $checkbox2_option_1,
    $checkbox2_option_2,
    $checkbox2_option_3,
    $created_by,
    $updated_by,
    $created_at,
    $updated_at,
    $idToDelete,
    $openModal=false;
    public $showRow=false;
    public $newJob;
    public $filter;
    public $statusFilter;
    protected $listeners = [
        'abrirModal' => 'open',
        'reloadJobsopenings' => 'render',
        'hideNewRow' => 'hideNewRow'
        
    ];
    
   

    public function render()
    {
        $jobOpenings= JobOpening::select('job_openings.*')
        ->join('job_users', 'job_openings.id', '=', 'job_users.job_id')
        ->where('job_users.user_id', auth()->user()->id)
        ->when($this->statusFilter, function ($query, $statusFilter) {
            //busqueda condicional por statusFilter si hay statusFilter
            $query->where('job_status','LIKE','%'.$this->statusFilter.'%');
        }, function ($query) {
            //si no hay statusFilter
        })
        ->where(function ($query) {
            $query->where('job_title','LIKE','%'.$this->filter.'%')
            ->orWhere('company_type','LIKE','%'.$this->filter.'%')
            ->orWhere('job_location','LIKE','%'.$this->filter.'%')
            ->orWhere('job_openings.id','=',$this->filter);
        })
        ->latest('id')
        ->paginate('5');
        $carousels=CarouselController::getAllCarousels();

        

       
        return view('livewire.internal.job-openings',compact('jobOpenings','carousels'));
    }
    
    public function showJobOpenings()
    {
        $jobOpenings= JobOpening::latest('id')->paginate('5');        
        return view('index',compact('jobOpenings'));
    }

    public function open($id){
        $this->idToDelete = $id;
        $this->openModal = true;
    }
    public function edit(JobOpening $jobOpening){

             $this->job_status = $jobOpening->job_status;
             $this->job_title = $jobOpening->job_title;
             $this->company_type = $jobOpening->company_type;
             $this->job_location = $jobOpening->job_location;
             $this->job_link = $jobOpening->job_link;
             $this->open_question_1 = $jobOpening->open_question_1;
             $this->open_question_2 = $jobOpening->open_question_2;
             $this->multiple_choice_question_1 = $jobOpening->multiple_choice_question_1;
             $this->multiple_choice1_option_1 = $jobOpening->multiple_choice1_option_1;
             $this->multiple_choice1_option_2 = $jobOpening->multiple_choice1_option_2;
             $this->multiple_choice1_option_3 = $jobOpening->multiple_choice1_option_3;
             $this->multiple_choice_question_2 = $jobOpening->multiple_choice_question_2;
             $this->multiple_choice2_option_1 = $jobOpening->multiple_choice2_option_1;
             $this->multiple_choice2_option_2 = $jobOpening->multiple_choice2_option_2;
             $this->multiple_choice2_option_3 = $jobOpening->multiple_choice2_option_3;
             $this->checkbox_question_1 = $jobOpening->checkbox_question_1;
             $this->checkbox1_option_1 = $jobOpening->checkbox1_option_1;
             $this->checkbox1_option_2 = $jobOpening->checkbox1_option_2;
             $this->checkbox1_option_3 = $jobOpening->checkbox1_option_3;
             $this->checkbox_question_2 = $jobOpening->checkbox_question_2;
             $this->checkbox2_option_1 = $jobOpening->checkbox2_option_1;
             $this->checkbox2_option_2 = $jobOpening->checkbox2_option_2;
             $this->checkbox2_option_3 = $jobOpening->checkbox2_option_3;
             $this->created_by = $jobOpening->created_by;
             $this->updated_by = $jobOpening->updated_by;
     
    }

    

    public function destroy($id){
        $jobOpening = JobOpening::find($id);
        $candidates=Candidate::where('job_id',$id)->delete();
        $carousels=Carousel::where('job_opening_id',$id)->delete();
        $jobOpening->delete();
        $this->openModal = false;
    }
    public function newRow(){
        $this->newJob = new JobOpening();
        $this->showRow=true;

     
    }
    public function hideNewRow(){
       
        $this->showRow=false;
       
    }
    public function reload(){
        $jobOpenings= JobOpening::where('job_title','LIKE','%'.$this->filter.'%')
        ->orWhere('job_status','LIKE','%'.$this->filter.'%')
        ->orWhere('company_type','LIKE','%'.$this->filter.'%')
        ->orWhere('job_location','LIKE','%'.$this->filter.'%')
        ->orWhere('id','=',$this->filter)
        ->latest('id')
        ->paginate('5');
        $carousels=CarouselController::getAllCarousels();
        return view('livewire.internal.job-openings',compact('jobOpenings','carousels'));
    }

    public function updatingFilter(){
        $this->resetPage();
        
    }

}
