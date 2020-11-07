<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nome');
            $table->string('RG');
            $table->string('Email');
            $table->string('Telefone');
            $table->string('bandeira');
            $table->integer('idExame')->nullable();
            $table->integer('CPF');
            $table->date('Data_Nascimento');
            $table->integer('Numero_Cartao');
            $table->string('Nome_Dono_Cartao');

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
        Schema::dropIfExists('matriculas');
    }
}
