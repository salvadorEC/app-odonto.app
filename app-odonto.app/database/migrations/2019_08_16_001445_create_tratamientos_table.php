<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
          $table->increments('id_tratamiento');
          $table->string('tratamiento_tratamiento', 20)->default('');
          $table->string('descripcion_tratamiento', 100)->nullable()->default('');

          $table->unique('tratamiento_tratamiento', 'tratamiento_tratamiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamientos');
    }
}
