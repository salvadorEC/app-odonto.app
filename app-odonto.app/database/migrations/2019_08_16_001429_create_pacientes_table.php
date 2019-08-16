<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
          $table->increments('id_paciente');
          $table->string('nombre_paciente', 100)->default('');
          $table->double('tel_paciente')->nullable();
          $table->string('direccion_paciente', 100)->nullable();

          $table->unique('nombre_paciente', 'nombre_paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
