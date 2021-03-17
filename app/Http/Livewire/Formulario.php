<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Candidate;
use App\Models\JobOpening;
use Illuminate\Validation\Rule;

class Formulario extends Component
{   
    public $fullName;
    public $dni;
    public $bday;
    public $email;
    public $linkedin;
    public $country;
    public $province;
    public $city;
    public $educationLevel;
    public $educationStatus;
    public $career;
    public $jobToApply;
    //nuevos campos
    public $openAnswer1;
    public $openAnswer2;
    public $multipleChoice1A;
    public $multipleChoice2A;
    public $checkBox1AOp1;
    public $checkBox1AOp2;
    public $checkBox1AOp3;
    public $checkBox2AOp1;
    public $checkBox2AOp2;
    public $checkBox2AOp3;
    //fin de nuevos campos
    public $job;
    public $step=0;
    public $uuid;
    public $stepActions=[
        'submit1',
        'submit2',
        'submit3', 
        'submit4',
        'submit5'
    ];
 
    protected $rules = [
        'fullName' => 'required',
        'dni' => 'required|regex:/^[0-9]*$/i',
        'bday' => 'required|date|before_or_equal:-18 years',
        'email' => 'required|email',
        'linkedin' => 'required|url|starts_with:https://www.linkedin.com/in/',
        'country' => 'required',
        'educationLevel' => 'required',
        'educationStatus' => 'required',
        'career' => 'required',
        'jobToApply' => 'required',
        
    ];
    protected $messages =[
        'fullName.required' => 'Por favor ingresa tu nombre y apellido.',
        'dni.required' => 'Por favor ingresa tu DNI.',
        'bday.required' => 'Por favor ingresa tu fecha de nacimiento.',
        'bday.date' => 'El campo Fecha de Nacimiento debe contener una fecha.',
        'bday.before_or_equal' => 'Debes ser mayor de 18 años para postularte.',
        'email.required' => 'Por favor ingresa tu email.',
        'email.email' => 'El formato de email no es válido.',
        'linkedin.required' => 'Por favor ingresa tu perfil de LinkedIn. Debe comenzar por https://www.linkedin.com/in/ seguido por tu perfil.',
        'linkedin.url' => 'El perfil de LinkedIn debe comenzar por: https://www.linkedin.com/in/ seguido por tu perfil.',
        'linkedin.starts_with:https://www.linkedin.com/in/' => 'El formato de perfil de LinkedIn debe comenzar por: https://www.linkedin.com/in/ seguido por tu perfil.',
        'country.required' => 'Por favor selecciona tu país de residencia.',
        'educationLevel.required' => 'Por favor selecciona tu Nivel Educativo.',
        'educationStatus.required' => 'Por favor selecciona el status de tus estudios.',
        'career.required' => 'Por favor ingresa tu Título Universitario, si no tienes escribe: Ninguno.',
        'jobToApply' => 'Para postularte debes indicar la posición a la que quieres aplicar.'
    ];
    protected $listeners = ['updateJob' => 'updateFormulario'];
    public function submit(){
        
        $action = $this->stepActions[$this->step];
        $this->$action();
    }

    protected function validator(array $data)
    {
        $uniqueRule =  Rule::unique('candidates')->where(function ($query) use 
                        ($data){
                            return $query->where('dni', $data['dni']??'')
                            ->where('jobToApply', $data['jobToApply']??'');
                        });
                    }
    public function submit1(){
        $this->step++;
    }
    public function submit2(){
        $this->step++;
    }
    public function submit3(){
        $this->step++;
    }

    public function submit4(){ 
       $this->step++;
    }

    public function submit5(){ 
     $this->step++;
    }


    public function render()
    {
        return view('livewire.formulario');
    }

    public function mount(){
        $this->step=0;
    }

    public function increaseStep(){
        if($this->step==0){
            $this->validate([
                'fullName' => 'required',
                'dni' => 'required|regex:/^[0-9]*$/i',
                'bday' => 'required|date|before_or_equal:-18 years',
                'email' => 'required|email',
                'linkedin' => 'url|starts_with:https://www.linkedin.com/in/'
            ]);
            $this->step++;
        }elseif($this->step==1){
            $this->validate([
                'country' => 'required'
            ]);
            $this->step++;
        }elseif($this->step>=2){
            $this->step++;
        }
    }

    public function decreaseStep(){
        $this->step--;
    }

    public function save(){
        $this->validate();

        $candidate = new Candidate;
        $candidate->fullName = $this->fullName;
        $candidate->dni = $this->dni;
        $candidate->birthday = $this->bday;
        $candidate->email = $this->email;
        $candidate->linkedin = $this->linkedin;
        $candidate->country = $this->country;
        $candidate->province = $this->province;
        $candidate->city = $this->city;
        $candidate->education_level = $this->educationLevel;
        $candidate->education_status= $this->educationStatus;
        $candidate->career = $this->career;
        $candidate->job_to_apply = $this->jobToApply;
        $candidate->open_answer_1 = $this->openAnswer1;
        $candidate->open_answer_2 = $this->openAnswer2;
        $candidate->multiple_choice_1_a = $this->multipleChoice1A;
        $candidate->multiple_choice_2_a = $this->multipleChoice2A;
        $candidate->checkbox_1_a_op_1 = $this->checkBox1AOp1;
        $candidate->checkbox_1_a_op_2 = $this->checkBox1AOp2;
        $candidate->checkbox_1_a_op_3 = $this->checkBox1AOp3;
        $candidate->checkbox_2_a_op_1 = $this->checkBox2AOp1;
        $candidate->checkbox_2_a_op_2 = $this->checkBox2AOp2;
        $candidate->checkbox_2_a_op_3 = $this->checkBox2AOp3;
        $candidate->save();
        $this->dispatchBrowserEvent('toggle-modal');
        $this->resetAttributes();
        $this->dispatchBrowserEvent('showSuccessMessage');
    }
    public function resetAttributes(){
        $this->fullName = '';
        $this->dni='';
        $this->bday='';
        $this->email='';
        $this->linkedin='';
        $this->country='';
        $this->province='';
        $this->city='';
        $this->educationLevel='';
        $this->educationStatus='';
        $this->career='';
        $this->jobToApply='';
        $this->openAnswer1='';
        $this->openAnswer2='';
        $this->multipleChoice1A='';
        $this->multipleChoice2A='';
        $this->checkBox1AOp1='';
        $this->checkBox1AOp2='';
        $this->checkBox1AOp3='';
        $this->checkBox2AOp1='';
        $this->checkBox2AOp2='';
        $this->checkBox2AOp3='';
        $this->step=0;
    }
    // validate Province valida si el pais no es Argentina, entonces da valores de null a provincia y a ciudad para que se guarde asi en la base de datos
    public function validateProvince(){
        if($this->country != 'Argentina'){
            $this->province = null;
            $this->city = null;
        }
    }
    public function updateFormulario(JobOpening $job){
        $this->job=$job;
        $this->jobToApply = $job->job_title;
        $this->dispatchBrowserEvent('toggle-modal');
    }
}