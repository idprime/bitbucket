<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormLastRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_last_runners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('runner_id');
            $table->string('track');
            $table->timestamps();
            $table->string('distance');
            $table->string('date');
            $table->foreign('runner_id')->references('id')->on('runners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_last_runners');
    }
}
