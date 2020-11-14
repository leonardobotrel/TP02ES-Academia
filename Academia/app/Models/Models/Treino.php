<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $table = 'ficha_treinos';

    protected $fillable = ['user','exercicios'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function pesquisar($filter = null){
        $results = $this
                        ->where('user','LIKE',"%{$filter}%")
                        ->paginate();
        return $results;
    }
}
