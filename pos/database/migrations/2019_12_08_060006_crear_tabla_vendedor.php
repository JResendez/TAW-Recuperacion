<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVendedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',200);  
            $table->string('rfc',50);
            $table->string('curp',18);
            $table->string('num_ext',10);
            $table->string('num_int',10);
            $table->string('colonia',100);
            $table->string('localidad',100);
            $table->string('estado',100);
            $table->string('telefono',100);
            $table->string('correo',100);
            $table->string('cod_pos',100);
            $table->string('municipio',100);
            $table->string('pais',100);
            $table->string('celular',100);
            $table->text('coment');
            $table->unsignedBigInteger('id_user');
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
        Schema::dropIfExists('vendedor');
    }
}
