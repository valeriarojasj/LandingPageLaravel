<?php

namespace App\Http\Livewire;

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

    protected $rules = [
        'fullName' => 'required',
        'dni' => 'required|regex:/^[0-9]*$/i',
        'bday' => 'required|date',
        'email' => 'required|email',
        'linkedin' => 'url',
        'country' => 'required',
        'educationLevel' => 'required',
        'educationStatus' => 'required',
        'career' => 'required',
        'jobToApply' => 'required'
    ];
    public function render()
    {
        return view('livewire.formulario');
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
