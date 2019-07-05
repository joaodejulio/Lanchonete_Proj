<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->bigIncrements('id_pedido_produto');
            $table->unsignedBigInteger('id_produto');
            $table->unsignedBigInteger('id_pedido');
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('id_produto')
                  ->references('id_produto')
                  ->on('produtos')
                  ->onDelete('cascade');
            
            $table->foreign('id_pedido')
            ->references('id_pedido')
            ->on('pedidos')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produto');
    }
}
