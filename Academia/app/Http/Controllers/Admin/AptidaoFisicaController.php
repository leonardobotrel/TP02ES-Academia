<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\AptidaoFisica;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class AptidaoFisicaController extends Controller
{
    private $repository;
    public function __construct(AptidaoFisica $aptidao)
    {
        $this->repository = $aptidao;
    }

    public function index()
    {
        $users = User::all();
        $AptidaoFisica = $this->repository->latest()->paginate(10);

        return view ('aptidaoFisica/index', compact('AptidaoFisica', 'users'));
    }

    public function cadastro()
    {
        $users = User::all();

        return view ('aptidaoFisica/cadastro',[
            'users'=> $users,
        ]);
    }

    public function salvar(Request $dados)
    {
        $mensagens = [
            'Nome.unique' => 'Já existe uma ficha cadastrada para esse usuário.',
        ];

        $dados->validate([
            'Nome' => 'unique:aptidao_fisicas,user',
        ], $mensagens);

        $add = new AptidaoFisica;
        $add->user = $dados->name;
        $add->peso = $dados->Peso;
        $add->altura = $dados->Altura;
        $add->pressao = $dados->Pressao;
        $add->gordura = $dados->Gordura;
        $add->massaMagra = $dados->MassaMagra;
        $add->imc = $dados->IMC;
        $add->habilitado = $dados->Situacao;
        $add->name = $dados->name;
        $add->save();
        
        return redirect()->route('aptidao.index');
    }

    public function deletar($id){
        $ficha = $this->repository->where('id', $id)->first();
        if(!$ficha)
            return redirect()->back();
        $ficha->delete();

        return redirect()->route('aptidao.index');
    }

    public function pesquisa(Request $request){
        $users = User::all();
        $AptidaoFisica = $this->repository->pesquisar($request->filter);

        return view ('aptidaoFisica/index', compact('AptidaoFisica', 'use'));
    }
}
