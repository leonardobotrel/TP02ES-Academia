<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Treino;
use App\Models\User;
use App\Models\Models\Exercicio;
use Illuminate\Database\Eloquent\Collection;

class TreinoController extends Controller
{
    private $repository;
    public function __construct(Treino $treino)
    {
        $this->repository = $treino;
    }

    public function index()
    {
        $exercicio=Exercicio::all();
        $users = User::all();
        $Treinos = $this->repository->latest()->paginate(10);
    
        return view ('treino/index', compact('Treinos', 'users','exercicio'));
    }

    public function cadastro()
    {
        $users = User::all();
        $exercicios = Exercicio::all();
        return view ('treino/cadastro',compact('users','exercicios') );
    }

    public function salvar(Request $dados)
    {
        $mensagens = [
            'Nome.unique' => 'Já existe uma ficha cadastrada para esse usuário.',
        ];

        $dados->validate([
            'Nome' => 'unique:ficha_treinos,user',
        ], $mensagens);
        $this->repository->create( $dados->all());
     
        return redirect()->route('treino.index');
    }

    public function deletar($id){
        $ficha = $this->repository->where('id', $id)->first();
        if(!$ficha)
            return redirect()->back();
        $ficha->delete();

        return redirect()->route('treino.index');
    }

    public function pesquisa(Request $request){
        $users = User::all();
        $Treinos = $this->repository->pesquisar($request->filter);

        return view ('treino/index', compact('Treinos', 'users'));
    }
}
