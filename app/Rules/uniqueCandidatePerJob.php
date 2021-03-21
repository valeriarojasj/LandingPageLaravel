<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Candidate;

class uniqueCandidatePerJob implements Rule
{
    private $array;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(array $array)
    {
        $this->array=$array;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        dd('value =' . $value,'attribute ='. $attribute,'$array='.$this->array);
        return false;
    //    $result1= Candidate::where('job_id', $value['job_id'])
    //     ->where('dni',$value['dni'])
    //     ->get();
    //     $result2= Candidate::where('job_id', $value['job_id'])
    //     ->where('email',$value['email'])
    //     ->get();
    //     return !$result1||!$result2;
           
    }


    

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ya te postulaste a éste empleo.';
    }
}
