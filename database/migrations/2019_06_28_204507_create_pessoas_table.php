<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstrains();
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id_pessoa');

            $table->unsignedBigInteger('id_endereco');
            
            $table->string('nome');
            $table->string('email');
            $table->integer('telefone');
            $table->bigInteger('cpf');
            
            $table->integer('num_endereco');
            $table->string('rua');
            $table->timestamps();
        
            $table->foreign('id_endereco')
                  ->references('id_endereco')
                  ->on('enderecos')
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
        Schema::dropIfExists('pessoas');
    }
}
