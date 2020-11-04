<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_treinos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user')->unique();
            $table->string('peito');
            $table->string('biceps');
            $table->string('triceps');
            $table->string('costas');
            $table->string('ombros');
            $table->string('gluteos');
            $table->string('pernas');
            $table->string('panturrilhas');
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
        Schema::dropIfExists('ficha_treinos');
    }
}
