<?php

namespace Database\Seeders;
use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            'job_opening_id'=>100,
            'image_url'=>'img/imagen-scrum.png',
            'description1'=>'Para el equipo de IT en importante fintech',
            'description2'=>'Experiencia de más de 2 años',
            'order' => 1
        ]);
        Carousel::create([
            'job_opening_id'=>99,
            'image_url'=>'img/datahub.png',
            'description1'=>'Experiencia en manejo de base de datos',
            'description2'=>'Para importante banco',
            'order' => 2
        ]);
        Carousel::create([
            'job_opening_id'=>98,
            'image_url'=>'img/contable.png',
            'description1'=>'Disponibilidad para viajar',
            'description2'=>' ',
            'order' => 3
        ]);
    }
}
