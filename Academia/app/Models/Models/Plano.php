<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = ['Nome','url','preco','id','Frequencia','descricao','Periodo'];
    public function pesquisar($filter = null){
        $results = $this
                        ->where('Nome','LIKE',"%{$filter}%")
                        ->orwhere('descricao','LIKE',"%{$filter}%")
                        ->paginate();
    return $results;
    }
}
