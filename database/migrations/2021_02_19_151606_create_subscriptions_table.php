<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
        $table->increments('id');   
        $table->string('email');
        $table->timestamps();
        $table->boolean('download_status')->nullable($value = true); 
        $table->unsignedBigInteger('downloaded_by')->nullable($value = true);
        $table->timestamp('downloaded_at')->nullable($value = true);
        $table->foreign('downloaded_by')->references('id')->on('users');
    });
}
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
