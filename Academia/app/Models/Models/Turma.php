<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['Turma','Modalidade','Horario_Inicio','Horario_Fim','QtdVagasTotal','Professor','Disponivel','Dia'];
}
