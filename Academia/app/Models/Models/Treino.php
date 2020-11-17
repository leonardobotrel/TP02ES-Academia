<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $table = 'ficha_treinos';

    protected $fillable = ['user','exercicios'];
    protected $casts = [
        'exercicios'=>'array'
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user', 'id');
        //return $this->hasMany('User');
    }

    public function pesquisar($filter = null){
        $results = $this
                        ->where('user','LIKE',"%{$filter}%")
                        ->paginate();
        return $results;
    }
}
