<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id_client');
            $table->String('name');
            $table->String('surname');
            $table->String('direction');
            $table->String('email')->unique();
            $table->Integer('phone');
            $table->Integer('ci');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('clients');
    }
}
