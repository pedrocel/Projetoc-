<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->date('nascimento');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('cidade');
            $table->string('bairro');
            $table->string('cep');
            $table->string('naturalidade');
            $table->string('logradouro');
            $table->integer('numero');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->integer('etnia_id')->unsigned();
            $table->foreign('etnia_id')->references('id')->on('etnias');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
}
