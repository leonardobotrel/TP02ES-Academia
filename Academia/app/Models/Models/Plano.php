<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = ['Nome','url','preco','Frequencia','descricao','Periodo'];
}
