<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobOpening;

class JobOpeningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        JobOpening::create([

            'job_status'=>'Publicada',
            'job_title'=>'Líder UX',
            'company_type'=> 'Startup' ,
            'job_location'=>'CABA',
            'job_link'=>'https://lnkd.in/dCzzgTV',
            'open_question_1'=>'Cuentanos tu experiencia',
            'open_question_2'=>'Por qué te interesa esta posición?',
            'multiple_choice_question_1'=>'Cuántos años de experiencia tienes en Diseño UX',
            'multiple_choice1_option_1'=>"0-1 años",
            'multiple_choice1_option_2'=>"2-4 años",
            'multiple_choice1_option_3'=>"más de 5 años",
            'multiple_choice_question_2'=>"Tienes conocimientos en usabilidad web y heurística?",
            'multiple_choice2_option_1'=>"Si",
            'multiple_choice2_option_2'=>"No",
            'multiple_choice2_option_3'=>null,
            'checkbox_question_1'=>'Tienes experiencia en:',
            'checkbox1_option_1'=>"Diseño de interfaces web responsive",
            'checkbox1_option_2'=>"Diseño de apps mobile",
            'checkbox1_option_3'=>"Flujos de producto, de usuario y diseño de interacción",
            'checkbox_question_2'=>null,
            'checkbox2_option_1'=>null,
            'checkbox2_option_2'=>null,
            'checkbox2_option_3'=>null,
            'created_by'=>1,
            'updated_by'=>null
          
        ]);

        JobOpening::create([

            'job_status'=>'Publicada',
            'job_title'=>'Diseñador/a Gráfico/a',
            'company_type'=> 'Startup' ,
            'job_location'=>'CABA',
            'job_link'=>'https://lnkd.in/dG7UwFY',
            'open_question_1'=>'Cuentanos tu experiencia',
            'open_question_2'=>'Por qué te interesa esta posición?',
            'multiple_choice_question_1'=>'Cuántos años de experiencia tienes en Diseño Gráfico',
            'multiple_choice1_option_1'=>"0-1 años",
            'multiple_choice1_option_2'=>"2-4 años",
            'multiple_choice1_option_3'=>"más de 5 años",
            'multiple_choice_question_2'=>null,
            'multiple_choice2_option_1'=>null,
            'multiple_choice2_option_2'=>null,
            'multiple_choice2_option_3'=>null,
            'checkbox_question_1'=>null,
            'checkbox1_option_1'=>null,
            'checkbox1_option_2'=>null,
            'checkbox1_option_3'=>null,
            'checkbox_question_2'=>null,
            'checkbox2_option_1'=>null,
            'checkbox2_option_2'=>null,
            'checkbox2_option_3'=>null,
            'created_by'=>1,
            'updated_by'=>null
          
        ]);

        JobOpening::create([

            'job_status'=>'Publicada',
            'job_title'=>'Desarrollador/a Mobile',
            'company_type'=> 'Startup' ,
            'job_location'=>'CABA',
            'job_link'=>'https://lnkd.in/drJ9PcT',
            'open_question_1'=>'Cuentanos tu experiencia',
            'open_question_2'=>'Por qué te interesa esta posición?',
            'multiple_choice_question_1'=>'Cuántos años de experiencia tienes en Desarrollo Mobile',
            'multiple_choice1_option_1'=>"0-1 años",
            'multiple_choice1_option_2'=>"2-4 años",
            'multiple_choice1_option_3'=>"más de 5 años",
            'multiple_choice_question_2'=>'Cuántos años de experiencia tienes en desarrollo de software con Angular IONIC / Capacitor?',
            'multiple_choice2_option_1'=>'No tengo experiencia',
            'multiple_choice2_option_2'=>'1-2 años',
            'multiple_choice2_option_3'=>'3 o más años',
            'checkbox_question_1'=>'Tienes conocimientos en:',
            'checkbox1_option_1'=> 'Cloud Platform' ,
            'checkbox1_option_2'=>'utilización de API rest',
            'checkbox1_option_3'=>null,
            'checkbox_question_2'=>'Tienes conocimientos en:',
            'checkbox2_option_1'=>'.NET Core',
            'checkbox2_option_2'=>'SQL Server',
            'checkbox2_option_3'=>null,
            'created_by'=>1,
            'updated_by'=>null
          
        ]);


            
    }
}
