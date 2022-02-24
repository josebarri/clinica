<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atender_citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreveterinario')->nullable();
            $table->string('nombrepaciente')->nullable();
            $table->string('servicio')->nullable();
            
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
        Schema::dropIfExists('atender_citas');
    }
};
