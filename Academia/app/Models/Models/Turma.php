<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['Turma','Modalidade','Hora_Inicio','Hora_Inicio','QtdVagasTotal','vagas_restante','Professor','Disponivel'];
}
