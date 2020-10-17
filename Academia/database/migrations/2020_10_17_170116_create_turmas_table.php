<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('Turma');//Numero da turma desejada.
            $table->string('Modalidade');//Sera mostrado um array com todas modalidades para escolher qual modalidade a turma pertence.
            $table->string('Horario_Inicio');//Define o horario de inicio da turma
            $table->string('Horario_Fim');//Defini o horario de termino desta turma
            $table->integer('QtdVagasTotal');//Mostra a capacidade maxima da turma
            $table->integer('vagas_restante');//Mostra a quantidade de vagas restantes na turma (total-ocupada)
            $table->string('Professor');//Define qual instrutor sera o orientador da turma
            $table->boolean('Disponivel'); //Ira verificar se a turma esta disponivel para cadastro 1 pra sim 1 0 pra nao, caso a turma estiver Lotada, devera ir pra 0
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
