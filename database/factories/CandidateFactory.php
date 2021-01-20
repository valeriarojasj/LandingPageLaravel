<?php

namespace Database\Factories;

use App\Models\Candidate;
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
        return [
            "fullName" => $this->faker->name,
            "dni"=> $this->faker->numberBetween($min = 20000000, $max = 40000000),
            "birthday"=>$this->faker->dateTimeThisCentury->format('Y-m-d'),
            "email"=> $this->faker->unique()->safeEmail,
            "linkedin"=> 'https://linkedin.com/'.$this->faker->username(),
            "country"=> $this->faker->randomElement(['Argentina', 'Uruguay', 'Chile']),
            "education_level"=>$this->faker->randomElement(['Secundario', 'Universitario', 'Doctorado', 'Posgrado']),
            "education_status"=> $this->faker->randomElement(['En curso', 'Graduado', 'Abandonado']),
            "career"=>$this->faker->sentence(),
            "job_to_apply"=> $this->faker->randomElement(['Analista Contable Ssr', 'Ejecutivo Large Corporate', 'Data Hub Jr'])
        ];
    }
}