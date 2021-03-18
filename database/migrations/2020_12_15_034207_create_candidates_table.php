<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fullName');
            $table->string('dni');
            $table->date('birthday');
            $table->string('email');
            $table->string('linkedin');
            $table->string('country');
            $table->string('province')->nullable($value = true);
            $table->string('city')->nullable($value = true);
            $table->string('education_level');
            $table->string('education_status');
            $table->string('career');
            $table->string('job_to_apply');
            $table->text('open_answer_1')->nullable($value = true);
            $table->text('open_answer_2')->nullable($value = true);
            $table->string('multiple_choice_1_a')->nullable($value = true);
            $table->string('multiple_choice_2_a')->nullable($value = true);
            $table->string('checkbox_1_a_op_1')->nullable($value = true);
            $table->string('checkbox_1_a_op_2')->nullable($value = true);
            $table->string('checkbox_1_a_op_3')->nullable($value = true);
            $table->string('checkbox_2_a_op_1')->nullable($value = true);
            $table->string('checkbox_2_a_op_2')->nullable($value = true);
            $table->string('checkbox_2_a_op_3')->nullable($value = true);

          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
