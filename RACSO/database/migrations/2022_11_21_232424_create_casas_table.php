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
        Schema::create('casas', function (Blueprint $table) {
            $table->id();
            $table->string('nomCasa');
            $table->int('numHabitaciones');
            $table->int('numBanos');
            $table->int('numAlbercas');
            $table->string('aC');
            $table->int('numVentilador');
            $table->int('numTV');
            $table->string('wifi');
            $table->string('cochera');
            $table->string('direccionCompleta');
            $table->string('descripcion');
            $table->string('imagen');
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
        Schema::dropIfExists('casas');
    }
};
