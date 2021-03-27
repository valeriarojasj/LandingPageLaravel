<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\JobOpening;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $job_id = JobOpening::inRandomOrder()->value('id');
        $job = JobOpening::find($job_id);
        $job_title = $job->job_title;
        return [
            "fullName" => $this->faker->name,
            "dni"=> $this->faker->numberBetween($min = 20000000, $max = 40000000),
            "birthday"=>$this->faker->dateTimeThisCentury->format('Y-m-d'),
            "email"=> $this->faker->unique()->safeEmail,
            "linkedin"=> 'https://linkedin.com/in/'.$this->faker->username(),
            "country"=> $this->faker->randomElement(['Argentina', 'Uruguay', 'Chile']),
            "education_level"=>$this->faker->randomElement(['Secundario', 'Universitario', 'Doctorado', 'Posgrado']),
            "education_status"=> $this->faker->randomElement(['En curso', 'Graduado', 'Abandonado']),
            "career"=>$this->faker->sentence($nbWords = 3, $variableNbWords = true),
            "job_id" => $job_id,
            "job_to_apply"=> $job_title,
            "open_answer_1" => $this->faker->text($maxNbChars = 200),
            "open_answer_2" => $this->faker->text($maxNbChars = 200),
            "multiple_choice_1_a" => $this->faker->sentence($nbWords = 3, $variableNbWords = true) ,
            "multiple_choice_2_a" => $this->faker->sentence($nbWords = 3, $variableNbWords = true) ,
            "checkbox_1_a_op_1" => $this->faker->sentence($nbWords = 2, $variableNbWords = true) ,
            "checkbox_1_a_op_2" => $this->faker->sentence($nbWords = 2, $variableNbWords = true) ,
            "checkbox_1_a_op_3" => $this->faker->sentence($nbWords = 2, $variableNbWords = true) ,
            "checkbox_2_a_op_1" => $this->faker->sentence($nbWords = 2, $variableNbWords = true) ,
            "checkbox_2_a_op_2" => $this->faker->sentence($nbWords = 2, $variableNbWords = true) ,
            "checkbox_2_a_op_3" => $this->faker->sentence($nbWords = 2, $variableNbWords = true) ,
            'created_at' => $this->faker->dateTimeThisMonth(),
            'download_status'=>false,
            'downloaded_by'=>null,
            'downloaded_at'=>null
        ];
    }
}