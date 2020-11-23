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
            $table->engine = 'InnoDB';
            $table->id('id_sale');
            $table->date('date');
            $table->decimal('price');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id_client')->on('clients')->onDelete('cascade');
            $table->String('client_name');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id_product')->on('products')->onDelete('cascade');
            $table->String('product_name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->String('user_name');
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

