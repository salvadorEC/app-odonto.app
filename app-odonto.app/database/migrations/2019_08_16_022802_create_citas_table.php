<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {

          $table->increments('id_cita');
          $table->string('email_users', 191)->default('');
          $table->date('fecha_cita');
          $table->time('hora_cita')->nullable();
          $table->string('nombre_pacientes', 100)->default('');
          $table->string('tratamiento_tratamientos', 20)->default('');

          $table->index('email_users', 'email_users');
          $table->index('nombre_pacientes', 'nombre_pacientes');
          $table->index('tratamiento_tratamientos', 'tratamiento_tratamientos');

          $table->foreign('nombre_pacientes', 'cita_has_pacientes')->references('nombre_paciente')->on('pacientes')->onDelete('CASCADE
')->onUpdate('CASCADE');
          $table->foreign('tratamiento_tratamientos', 'cita_has_tratamientos')->references('tratamiento_tratamiento')->on('tratamientos')->onDelete('CASCADE
')->onUpdate('CASCADE');
          $table->foreign('email_users', 'cita_has_users')->references('email')->on('users')->onDelete('CASCADE
')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
