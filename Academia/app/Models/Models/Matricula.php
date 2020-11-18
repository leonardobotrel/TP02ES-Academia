<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $fillable = ['turmas','Nome','RG','Email','Telefone','plan_id','bandeira','idExame','CPF','Data_Nascimento','Numero_cartao','Nome_Dono_Cartao','logo','subscription_plan','Subscription_suspensded'];
    protected $casts = [
        'turmas'=>'array'
    ];
    public function pesquisar($filter = null){
        $results = $this
                        ->where('Nome','LIKE',"%{$filter}%")
                        ->orwhere('cpf','LIKE',"%{$filter}%")
                        ->paginate();
    return $results;
    }
}
