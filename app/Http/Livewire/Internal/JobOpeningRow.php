<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\JobOpening;
class JobOpeningRow extends Component
{
    public $uuid;
    public $job_title;
    public $company_type;
    public $job_location;
    public $open_question_1;
    public $open_question_2;
    public $multiple_choice_question_1;
    public $multiple_choice1_option_1;
    public $multiple_choice1_option_2;
    public $multiple_choice1_option_3;
    public $multiple_choice_question_2;
    public $multiple_choice2_option_1;
    public $multiple_choice2_option_2;
    public $multiple_choice2_option_3;
    public $checkbox_question_1;
    public $checkbox1_option_1;
    public $checkbox1_option_2;
    public $checkbox1_option_3;
    public $checkbox_question_2;
    public $checkbox2_option_1;
    public $checkbox2_option_2;
    public $checkbox2_option_3;
    public $created_at;
    public $updated_at;
    public $objeto;
    public $nuevoObjeto=false;
    public $editable=true;

    public function render()
    {
        return view('livewire.internal.job-opening-row');
    }

    public function mount(){
    $this->uuid=$this->objeto->id;
    $this->job_title=$this->objeto->job_title;
    $this->company_type=$this->objeto->company_type;
    $this->job_location=$this->objeto->job_location;
    $this->open_question_1=$this->objeto->open_question_1;
    $this->open_question_2=$this->objeto->open_question_2;
    $this->multiple_choice_question_1=$this->objeto->multiple_choice_question_1;
    $this->multiple_choice1_option_1=$this->objeto->multiple_choice1_option_1;
    $this->multiple_choice1_option_2=$this->objeto->multiple_choice1_option_2;
    $this->multiple_choice1_option_3=$this->objeto->multiple_choice1_option_3;
    $this->multiple_choice_question_2=$this->objeto->multiple_choice_question_2;
    $this->multiple_choice2_option_1=$this->objeto->multiple_choice2_option_1;
    $this->multiple_choice2_option_2=$this->objeto->multiple_choice2_option_2;
    $this->multiple_choice2_option_3=$this->objeto->multiple_choice2_option_3;
    $this->checkbox_question_1=$this->objeto->checkbox_question_1;
    $this->checkbox1_option_1=$this->objeto->checkbox1_option_1;
    $this->checkbox1_option_2=$this->objeto->checkbox1_option_2;
    $this->checkbox1_option_3=$this->objeto->checkbox1_option_3;
    $this->checkbox_question_2=$this->objeto->checkbox_question_2;
    $this->checkbox2_option_1=$this->objeto->checkbox2_option_1;
    $this->checkbox2_option_2=$this->objeto->checkbox2_option_2;
    $this->checkbox2_option_3=$this->objeto->checkbox2_option_3;
    $this->created_at=$this->objeto->created_at;
    $this->updated_at=$this->objeto->updated_at;
    }
    public function ver(){
        dd($this->objeto);
        //
    }
    public function open($id){
        $this->emit('abrirModal', $id);
    }

    public function save(){
        $this->uuid='save';
    }
    public function edit($id){
        $this->editable=false;
        $this->dispatchBrowserEvent('habilitarTextArea', ['id' => $id]);
    }
    public function cancel($id){
        $this->editable=true;
        $this->uuid=$this->objeto->id;
        $this->job_title=$this->objeto->job_title;
        $this->company_type=$this->objeto->company_type;
        $this->job_location=$this->objeto->job_location;
        $this->open_question_1=$this->objeto->open_question_1;
        $this->open_question_2=$this->objeto->open_question_2;
        $this->multiple_choice_question_1=$this->objeto->multiple_choice_question_1;
        $this->multiple_choice1_option_1=$this->objeto->multiple_choice1_option_1;
        $this->multiple_choice1_option_2=$this->objeto->multiple_choice1_option_2;
        $this->multiple_choice1_option_3=$this->objeto->multiple_choice1_option_3;
        $this->multiple_choice_question_2=$this->objeto->multiple_choice_question_2;
        $this->multiple_choice2_option_1=$this->objeto->multiple_choice2_option_1;
        $this->multiple_choice2_option_2=$this->objeto->multiple_choice2_option_2;
        $this->multiple_choice2_option_3=$this->objeto->multiple_choice2_option_3;
        $this->checkbox_question_1=$this->objeto->checkbox_question_1;
        $this->checkbox1_option_1=$this->objeto->checkbox1_option_1;
        $this->checkbox1_option_2=$this->objeto->checkbox1_option_2;
        $this->checkbox1_option_3=$this->objeto->checkbox1_option_3;
        $this->checkbox_question_2=$this->objeto->checkbox_question_2;
        $this->checkbox2_option_1=$this->objeto->checkbox2_option_1;
        $this->checkbox2_option_2=$this->objeto->checkbox2_option_2;
        $this->checkbox2_option_3=$this->objeto->checkbox2_option_3;
        $this->created_at=$this->objeto->created_at;
        $this->updated_at=$this->objeto->updated_at;
        $this->dispatchBrowserEvent('deshabilitarTextArea', ['id' => $id]);
    }
    public function update($id)
    {
        $jobOpening= JobOpening::find($id);
        $jobOpening->update([
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
        $this->editable=true;
        $this->dispatchBrowserEvent('deshabilitarTextArea', ['id' => $id]);
    }
    public function store()
    {
        /*dd(
            $this->job_title,
            $this->company_type,
            $this->job_location,
            $this->open_question_1,
            $this->open_question_2,
            $this->multiple_choice_question_1,
            $this->multiple_choice1_option_1,
            $this->multiple_choice1_option_2,
            $this->multiple_choice1_option_3,
            $this->multiple_choice_question_2,
            $this->multiple_choice2_option_1,
            $this->multiple_choice2_option_2,
            $this->multiple_choice2_option_3,
            $this->checkbox_question_1,
            $this->checkbox1_option_1,
            $this->checkbox1_option_2,
            $this->checkbox1_option_3,
            $this->checkbox_question_2,
            $this->checkbox2_option_1,
            $this->checkbox2_option_2,
            $this->checkbox2_option_3
        );*/
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
        
        $this->emit('hideNewRow');
        
    }
    public function hideRow(){
        $this->emit('hideNewRow');
    }
}
