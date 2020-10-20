<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id('id_proveedor');
            $table->String('name');
            $table->String('surname');
            $table->Integer('phone');
            $table->String('city');
            $table->String('direction');
            $table->Integer('ci');
            $table->String('company_name');
            //$table->unsignedBigInteger('usuario_id');
            //$table->foreign('usuario_id')->references('id_usuario')->on('User')->onDelete('cascade');
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
        Schema::dropIfExists('providers');
    }
}
