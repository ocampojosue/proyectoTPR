<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->String('name');
            $table->String('description');
            $table->integer('quantity');
            $table->decimal('price');
            //$table->unsignedBigInteger('categoria_id');
            //$table->foreign('categoria_id')->references('id_categoria')->on('Category')->onDelete('cascade');
            //$table->unsignedBigInteger('usuario_id');
            //$table->foreign('usuario_id')->references('id_usuario')->on('User')->onDelete('cascade');
            //$table->unsignedBigInteger('proveedor_id');           
            //$table->foreign('categoria_id')->references('id_proveedor')->on('Provider')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
