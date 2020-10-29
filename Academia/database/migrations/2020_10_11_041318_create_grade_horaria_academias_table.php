<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeHorariaAcademiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_horaria_academias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Modalidade');
            $table->string('Dias_da_Semana');
            $table->string('Horarios');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_horaria_academias');
    }
}
