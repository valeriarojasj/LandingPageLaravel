<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('job_opening_id');
            $table->string('image_url')->default('img/imagen-scrum.png');
            $table->string('description1')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('job_opening_id')->references('id')->on('fyg_jet.job_openings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousel');
    }
}
