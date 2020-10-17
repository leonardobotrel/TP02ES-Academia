<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $fillable = ['Nome','Capacidade','QtdTurma','Hora_Inicio','Hora_Inicio'];
}
