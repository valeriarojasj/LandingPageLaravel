<?php

namespace Database\Factories;

use App\Models\JobOpening;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobOpeningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobOpening::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'job_status'=>$this->faker->randomElement(['Borrador', 'Publicada', 'Cerrada']),
            'job_title'=>$this->faker->jobTitle($nbWords = 3, $variableNbWords = true),
            'company_type'=>$this->faker->randomElement(['Importante banco', 'Empresa de retail', 'Empresa lider de tecnología', 'Startup', 'Importante compañía automotriz','Empresa de la industria farmaceútica' ,'Empresa Multinacional']),
            'job_location'=>$this->faker->city(),
            'open_question_1'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true).'?',
            'open_question_2'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true).'?',
            'multiple_choice_question_1'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true).'?',
            'multiple_choice1_option_1'=>$this->faker->sentence($nbWords = 4,  $variableNbWords = true),
            'multiple_choice1_option_2'=>$this->faker->sentence($nbWords = 4,  $variableNbWords = true),
            'multiple_choice1_option_3'=>$this->faker->sentence($nbWords = 4,  $variableNbWords = true),
            'multiple_choice_question_2'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true).'?',
            'multiple_choice2_option_1'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true),
            'multiple_choice2_option_2'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true),
            'multiple_choice2_option_3'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true),
            'checkbox_question_1'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true).'?',
            'checkbox1_option_1'=>$this->faker->sentence($nbWords = 3,  $variableNbWords = true),
            'checkbox1_option_2'=>$this->faker->sentence($nbWords = 3,  $variableNbWords = true),
            'checkbox1_option_3'=>$this->faker->sentence($nbWords = 3,  $variableNbWords = true),
            'checkbox_question_2'=>$this->faker->sentence($nbWords = 5,  $variableNbWords = true).'?',
            'checkbox2_option_1'=>$this->faker->sentence($nbWords = 3,  $variableNbWords = true),
            'checkbox2_option_2'=>$this->faker->sentence($nbWords = 3,  $variableNbWords = true),
            'checkbox2_option_3'=>$this->faker->sentence($nbWords = 3,  $variableNbWords = true),
            'created_by'=>'system',
            'updated_by'=>null

            
            
        ];
    }
}
