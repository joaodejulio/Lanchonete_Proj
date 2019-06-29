<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('id_pessoa');
            $table->unsignedBigInteger('id_ator');
            $table->string('nome');
            $table->string('login')->unique();
            $table->string('senha');
            // $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('id_pessoa')
                  ->references('id_pessoa')
                  ->on('pessoas')
                  ->onDelete('cascade');
            
            $table->foreign('id_ator')
                  ->references('id_tipo_ator')
                  ->on('tipos_ator')
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
        Schema::dropIfExists('usuarios');
    }
}
