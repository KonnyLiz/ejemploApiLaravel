<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblestudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // aqui creamos la tablas a utilizar
        Schema::create('tblestudiantes', function (Blueprint $table) {
            $table->id();
            // primero el nombre del campo y luego se le pueden pasar parametros
            // Como por ejemplo las restricciones de las tablas
            $table->string('nombre')->nullable();
            $table->boolean('activo')->nullable();

            // esta linea crea 2 columnas de auditoria updated_at y delete_at
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
        Schema::dropIfExists('tblestudiantes');
    }
}
