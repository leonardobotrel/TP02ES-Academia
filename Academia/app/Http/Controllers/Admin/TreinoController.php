<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Treino;
use App\Models\User;
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
        $users = User::all();
        $Treinos = $this->repository->latest()->paginate(10);

        return view ('treino/index', compact('Treinos', 'users'));
    }

    public function cadastro()
    {
        $users = User::all();

        return view ('treino/cadastro',[
            'users'=> $users,
        ]);
    }

    public function salvar(Request $dados)
    {
        $mensagens = [
            'Nome.unique' => 'Já existe uma ficha cadastrada para esse usuário.',
        ];

        $dados->validate([
            'Nome' => 'unique:ficha_treinos,user',
        ], $mensagens);

        $add = new Treino;
        $add->user = $dados->Nome;
        $add->peito = $dados->peito;
        $add->biceps = $dados->biceps;
        $add->triceps = $dados->triceps;
        $add->costas = $dados->costas;
        $add->ombros = $dados->ombros;
        $add->gluteos = $dados->gluteos;
        $add->pernas = $dados->pernas;
        $add->panturrilhas = $dados->panturrilhas;

        $add->save();
        
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
