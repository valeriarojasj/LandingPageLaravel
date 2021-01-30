<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Candidate;
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
    public $step=0;
    public $uuid;

    public $stepActions=[
        'submit1',
        'submit2',
        'submit3'
        // ', submit4',
        // 'submit5'
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
        'jobToApply' => 'required'
    ];
    
    protected $messages =[
        'fullName.required' => 'Por favor ingresa tu nombre y apellido.',
        'dni.required' => 'Por favor ingresa tu DNI.',
        'bday.required' => 'Por favor ingresa tu fecha de nacimiento.',
        'bday.date' => 'El campo Fecha de Nacimiento debe contener una fecha.',
        'bday.before_or_equal:-18 years' => 'Debes ser mayor de 18 años para postularte.',
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

    public function submit(){
       
        $action = $this->stepActions[$this->step];
        $this->$action();

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

    // public function submit4(){
        
    //     $this->step++;

    // }

    // public function submit5(){
        
    //     $this->step++;

    // }


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
        }

    }

    public function decreaseStep(){
        $this->step--;
    }




    public function save(){
        $this->validateProvince();
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
        $candidate->save();
        $this->dispatchBrowserEvent('closeModal', ['uuid' => $this->uuid]);
        $this->resetAttributes();
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
        $this->step=0;
    }
    // validate Province valida si el pais no es Argentina, entonces da valores de null a provincia y a ciudad para que se guarde asi en la base de datos
    public function validateProvince(){
        if($this->country != 'Argentina'){
            $this->province = null;
            $this->city = null;
        }
        // else{
        //     $this->validateCity();
        // }
    }
  
    // public function validateCity(){
    //     $cities = json_decode(Http::get("https://apis.datos.gob.ar/georef/api/localidades?provincia=".$this->province."&orden=nombre&max=5000"))->localidades;
    //     $resetCity = true;
    //     foreach ($cities as $city) {
    //         if ($city->nombre == $this->city) {
    //             $resetCity = false;
    //             break;
    //         }
    //     }
    //     if($resetCity){
    //         $this->city = null;
    //     }
    // }
}