<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('company_type');
            $table->string('job_location');
            $table->string('open_question_1');
            $table->string('open_question_2');
            $table->string('multiple_choice_question_1');
            $table->string('multiple_choice1_option_1');
            $table->string('multiple_choice1_option_2');
            $table->string('multiple_choice1_option_3');
            $table->string('multiple_choice_question_2');
            $table->string('multiple_choice2_option_1');
            $table->string('multiple_choice2_option_2');
            $table->string('multiple_choice2_option_3');
            $table->string('checkbox_question_1');
            $table->string('checkbox1_option_1');
            $table->string('checkbox1_option_2');
            $table->string('checkbox1_option_3');
            $table->string('checkbox_question_2');
            $table->string('checkbox2_option_1');
            $table->string('checkbox2_option_2');
            $table->string('checkbox2_option_3');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_openings');
    }
}
