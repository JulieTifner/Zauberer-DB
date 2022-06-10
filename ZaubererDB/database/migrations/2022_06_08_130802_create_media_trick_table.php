<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTrickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_trick', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trick_id');
            $table->unsignedBigInteger('media_id');

            $table->foreign('trick_id')->references('id')->on('tricks');
            $table->foreign('media_id')->references('id')->on('media');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_trick');
    }
}
