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
        Schema::create('rentas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->int('nhAdulto');
            $table->int('nhMenor');
            $table->string('cProcedencia');
            $table->string('telefono');
            $table->string('correo');
            $table->string('nomCasa');
            $table->string('fechaIngreso');
            $table->string('fechaSalida');
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
        Schema::dropIfExists('rentas');
    }
};
