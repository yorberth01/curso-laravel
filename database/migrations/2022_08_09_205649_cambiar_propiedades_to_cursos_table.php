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
        Schema::table('cursos', function (Blueprint $table) {
            //composer require doctrine/dbal    primero se pone este comando en la terminal y despues php artisan make:migration cambiar_propiedades_to_cursos_table
            $table->string('nombre', 150)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            //
             $table->string('nombre', 255)->nullable(false)->change();//se agrega el dropColumn
        });
    }
};
