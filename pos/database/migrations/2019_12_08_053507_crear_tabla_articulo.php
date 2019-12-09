<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaArticulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clave',100);
            $table->integer('servicio');
            $table->text('descripcion');
            $table->string('categoria',50);
            $table->string('departamento',50);
            $table->string('unidad_compra',20);
            $table->string('unidad_venta',20);
            $table->string('factor',100);
            $table->string('localizacion',100);
            $table->integer('inv_min');
            $table->integer('inv_max');
            $table->float('precio_compra', 10, 2);	
            $table->float('precio_venta', 10, 2);	
            $table->float('precio_compra_prom', 10, 2);	
            $table->float('margen_util', 10, 2);	
            $table->float('existencia', 10, 2);	
            $table->unsignedBigInteger('id_impuesto');
            $table->unsignedBigInteger('id_proveedor');

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
        Schema::dropIfExists('articulo');
    }
}
