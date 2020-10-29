<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAptidaoFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aptidao_fisicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user')->unique();
            $table->double('peso');
            $table->double('altura');
            $table->string('pressao');
            $table->integer('gordura');
            $table->integer('massaMagra');
            $table->double('imc');
            $table->integer('habilitado');//1 se não estiver habilitado e 2 caso esteja
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aptidao_fisicas');
    }
}
