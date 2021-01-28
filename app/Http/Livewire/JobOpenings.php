<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobOpening;
use Livewire\WithPagination;


class JobOpenings extends Component
{
    use WithPagination;

    public  
    $job_id, 
    $job_title,
    $company_type,
    $job_location,
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
    $created_at,
    $updated_at,
    $confirmingDestroy=false;


  
    public function render()
    {
        $jobOpenings= JobOpening::latest('id')->paginate('10');        
        return view('livewire.job-openings',compact('jobOpenings'));
    }

    public function showJobOpenings()
    {
        $jobOpenings= JobOpening::latest('id')->paginate('10');        
        return view('index',compact('jobOpenings'));
    }

    public function store()
    {
        JobOpening::create([
            
            'job_title' => $this->job_title,
            'company_type' => $this->company_type,
            'job_location' => $this->job_location,
            'open_question_1' => $this->open_question_1,
            'open_question_2' => $this->open_question_2,
            'multiple_choice_question_1' => $this->multiple_choice_question_1,
            'multiple_choice1_option_1' => $this->multiple_choice1_option_1,
            'multiple_choice1_option_2' => $this->multiple_choice1_option_2,
            'multiple_choice1_option_3' => $this->multiple_choice1_option_3,
            'multiple_choice_question_2' => $this->multiple_choice_question_2,
            'multiple_choice2_option_1' => $this->multiple_choice2_option_1,
            'multiple_choice2_option_2' => $this->multiple_choice2_option_2,
            'multiple_choice2_option_3' => $this->multiple_choice2_option_3,
            'checkbox_question_1' => $this->checkbox_question_1,
            'checkbox1_option_1' => $this->checkbox1_option_1,
            'checkbox1_option_2' => $this->checkbox1_option_2,
            'checkbox1_option_3' => $this->checkbox1_option_3,
            'checkbox_question_2' => $this->checkbox_question_2,
            'checkbox2_option_1' => $this->checkbox2_option_1,
            'checkbox2_option_2' => $this->checkbox2_option_2,
            'checkbox2_option_3' => $this->checkbox2_option_3
         


        ]);
    }
    public function update()
    {
        $jobOpening= JobOpening::find($this->id);
        $jobOpening->update(
        [
            'job_title' => $this->job_title,
            'company_type' => $this->company_type,
            'job_location' => $this->job_location,
            'open_question_1' => $this->open_question_1,
            'open_question_2' => $this->open_question_2,
            'multiple_choice_question_1' => $this->multiple_choice_question_1,
            'multiple_choice1_option_1' => $this->multiple_choice1_option_1,
            'multiple_choice1_option_2' => $this->multiple_choice1_option_2,
            'multiple_choice1_option_3' => $this->multiple_choice1_option_3,
            'multiple_choice_question_2' => $this->multiple_choice_question_2,
            'multiple_choice2_option_1' => $this->multiple_choice2_option_1,
            'multiple_choice2_option_2' => $this->multiple_choice2_option_2,
            'multiple_choice2_option_3' => $this->multiple_choice2_option_3,
            'checkbox_question_1' => $this->checkbox_question_1,
            'checkbox1_option_1' => $this->checkbox1_option_1,
            'checkbox1_option_2' => $this->checkbox1_option_2,
            'checkbox1_option_3' => $this->checkbox1_option_3,
            'checkbox_question_2' => $this->checkbox_question_2,
            'checkbox2_option_1' => $this->checkbox2_option_1,
            'checkbox2_option_2' => $this->checkbox2_option_2,
            'checkbox2_option_3' => $this->checkbox2_option_3
         


        ]);
    }





    public function destroy(JobOpening $jobOpening){

       
        $confirmingDestroy=false;
        $jobOpening->delete();
        


        
    }

}
