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
            'description1'=>'<p>Para el equipo de IT en importante fintech</p>',
            'updated_by'=>null,
            'order' => 1
        ]);
        Carousel::create([
            'job_opening_id'=>99,
            'image_url'=>'img/datahub.png',
            'description1'=>'<p>Experiencia en manejo de base de datos</p>',
            'updated_by'=>null,
            'order' => 2
        ]);
        Carousel::create([
            'job_opening_id'=>98,
            'image_url'=>'img/contable.png',
            'description1'=>'<p>Disponibilidad para viajar</p>',
            'updated_by'=>null,
            'order' => 3
        ]);
    }
}
