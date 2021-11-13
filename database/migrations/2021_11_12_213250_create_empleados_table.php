<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('sexo');
            $table->string('fNacimiento');
            $table->string('puestoTrabajo');
            $table->string('curp', 18);
            $table->string('rfc', 13);
            $table->string('estado');
            $table->integer('codigoPostal');
            $table->integer('salario');
            $table->string('correo');
            $table->string('horarioTrabajo');
            $table->string('areaTrabajo');
            $table->string('facebook');
            $table->string('telefono', 10);
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
        Schema::dropIfExists('empleados');
    }
}
