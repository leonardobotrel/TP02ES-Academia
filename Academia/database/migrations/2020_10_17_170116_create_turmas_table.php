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
            $table->time('Horario_Inicio');//Define o horario de inicio da turma
            $table->time('Horario_Fim');//Defini o horario de termino desta turma
            $table->integer('QtdVagasTotal');//Mostra a capacidade maxima da turma
            $table->integer('vagas_ocupadas')->nullable();//Mostra a quantidade de vagas restantes na turma (total-ocupada)
            $table->string('Professor');//Define qual instrutor sera o orientador da turma
            $table->boolean('Disponivel')->nullable(); //Ira verificar se a turma esta disponivel para cadastro 1 pra sim 1 0 pra nao, caso a turma estiver Lotada, devera ir pra 0
            $table->string('Dia');
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
