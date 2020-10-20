<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $fillable = ['Nome','RG','Email','Telefone','Bandeira_cartao','idExame','cpf','Data_Nascimento','Numero_cartao','Nome_Dono_Cartao'];

}
