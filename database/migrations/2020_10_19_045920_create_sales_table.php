<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id_sale');
            $table->date('date');
            $table->decimal('price');
            //$table->unsignedBigInteger('cliente_id');
            //$table->foreign('cliente_id')->references('id_cliente')->on('Client')->onDelete('cascade');
            //$table->unsignedBigInteger('producto_id');
            //$table->foreign('producto_id')->references('id_producto')->on('Product')->onDelete('cascade');
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
        Schema::dropIfExists('sales');
    }
}
