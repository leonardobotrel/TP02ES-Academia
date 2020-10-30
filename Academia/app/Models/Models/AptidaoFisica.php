<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AptidaoFisica extends Model
{
    protected $table = 'aptidao_fisicas';

    protected $fillable = ['user','peso','altura','pressao','gordura','massaMagra','imc','habilitado'];

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
