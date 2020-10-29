<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AptidaoFisica extends Model
{
    protected $table = 'aptidao_fisicas';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function pesquisar($filter = null){
        $results = $this
                        ->where('Nome','LIKE',"%{$filter}%")
                        ->paginate();
    return $results;
    }
}
