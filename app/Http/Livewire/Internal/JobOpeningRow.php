<?php

namespace App\Http\Livewire\Internal;

use Livewire\Component;
use App\Models\JobOpening;
use App\Models\JobUser;
use App\Models\User;
use App\Models\Candidate;
class JobOpeningRow extends Component{
    public $uuid;
    public $job_status;
    public $job_title;
    public $company_type;
    public $job_location;
    public $job_link;
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
    public $created_by;
    public $updated_by;
    public $created_at;
    public $updated_at;
    public $objeto;
    public $nuevoObjeto=false;
    public $editable=false;
    public $isAdmin = false;

    protected $rules = [
        'job_title'  => 'required|max:50',
        'company_type' => 'required|max:50',
        'job_location' => 'required|max:50'
    ];
    protected $messages =[
        'job_title.required' => 'Por favor ingresa el nombre del cargo.',
        'job_title.max' => 'Sólo puedes ingresar hasta 50 caracteres.',
        'company_type.required' => 'Por favor ingresa una descripción del tipo de empresa.',
        'company_type.max' => 'Sólo puedes ingresar hasta 50 caracteres.',
        'job_location.required' => 'Por favor ingresa la ubicación del trabajo.',
        'job_location_type.max' => 'Sólo puedes ingresar hasta 50 caracteres.'
    ];
  
    public function render(){
        $candidates = Candidate::where('job_id', $this->uuid)->count();
        $this->isAdmin = User::find(auth()->user()->id)->getRoleNames()[0] == 'Admin';
        return view('livewire.internal.job-opening-row', compact('candidates'));
    }

    public function mount(){
        $this->job_status=$this->objeto->job_status;
        $this->uuid=$this->objeto->id;
        $this->job_title=$this->objeto->job_title;
        $this->company_type=$this->objeto->company_type;
        $this->job_location=$this->objeto->job_location;
        $this->job_link=$this->objeto->job_link;
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
        $this->created_by=$this->objeto->createdBy ? $this->objeto->createdBy->email : null;
        $this->updated_by=$this->objeto->updatedBy ?  $this->objeto->updatedBy->email : null;

        if(!$this->objeto->created_at){
            $this->created_at="";
        } else{
            $this->created_at=$this->objeto->created_at->format('d-m-Y H:i:s');
        }
        
        if(!$this->objeto->updated_at){
            $this->updated_at="";
        } else{
            $this->updated_at=$this->objeto->updated_at->format('d-m-Y H:i:s');
        }
    }

    public function ver(){
        dd($this->objeto);
    }

    public function open($id){
        $this->emit('abrirModal', $id);
    }

    public function save(){  
        $this->uuid='save';
    }

    public function edit(){
        $this->editable=true;  
    }

    public function cancel($id){
        $this->editable=false;
        $this->job_status=$this->objeto->job_status;
        $this->uuid=$this->objeto->id;
        $this->job_title=$this->objeto->job_title;
        $this->company_type=$this->objeto->company_type;
        $this->job_location=$this->objeto->job_location;
        $this->job_link=$this->objeto->job_link;
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
        $this->created_by=$this->objeto->createdBy ? $this->objeto->createdBy->email : null;
        $this->updated_by=$this->objeto->updatedBy ?  $this->objeto->updatedBy->email : null;
        $this->dispatchBrowserEvent('deshabilitarTextArea', ['id' => $id]);
    }

    public function update($id){
        $jobOpening= JobOpening::find($id);
        $this->validate();
        $jobOpening->update([
            'job_status' => $this->job_status,
            'job_title' => $this->job_title,
            'company_type' => $this->company_type,
            'job_location' => $this->job_location,
            'job_link' => $this->job_link,
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
            'checkbox2_option_3' => $this->checkbox2_option_3,
            'updated_by' => auth()->user()->id
        ]);
        $this->editable=false;
        return redirect('/internal/job-openings');
    }

    public function store(){
        $this->validate();
        $job= JobOpening::create([
            'job_status' => "Borrador",
            'job_title' => $this->job_title,
            'company_type' => $this->company_type,
            'job_location' => $this->job_location,
            'job_link' => $this->job_link,
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
            'checkbox2_option_3' => $this->checkbox2_option_3,
            'created_by' => auth()->user()->id,
            'updated_by' => null
        ]);
        $this->assignPermission($job);
        $this->emit('hideNewRow');
        $this->emit('reloadJobsopenings');
    }
    public function assignPermission($job) {
        JobUser::create([
            'job_id'=>$job->id,
            'user_id'=> auth()->user()->id
        ]);
        $admins = User::role('Admin')->get()->pluck('id')->toArray();
        foreach($admins as $admin_id) {
            JobUser::create([
                'job_id'=>$job->id,
                'user_id'=> $admin_id
            ]);
        }
    }
    public function hideRow(){
        $this->emit('hideNewRow');
    }
}
