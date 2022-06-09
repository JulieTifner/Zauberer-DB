<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTricksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tricks', function (Blueprint $table) {
            $table->id();
            $table->string('trickname');
            $table->string('description');
            $table->integer('rating');
            $table->integer('time');
            
            $table->unsignedBigInteger('style_id')->constrained();
            $table->unsignedBigInteger('storage_person_id')->constrained();
            $table->unsignedBigInteger('act_person_id')->constrained();
            $table->unsignedBigInteger('performance_id')->constrained();
            
            $table->foreign('style_id')->references('id')->on('styles');
            $table->foreign('storage_person_id')->references('id')->on('person');
            $table->foreign('act_person_id')->references('id')->on('person');
            $table->foreign('performance_id')->references('id')->on('performance');

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
        Schema::dropIfExists('tricks');
    }
}
