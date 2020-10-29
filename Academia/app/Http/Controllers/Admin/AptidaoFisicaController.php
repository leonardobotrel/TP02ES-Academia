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
        $aptidaoFisica = $this->repository->latest()->paginate(10);

        $add = new AptidaoFisica;
        $add->user = $dados->Nome;
        $add->peso = $dados->Peso;
        $add->altura = $dados->Altura;
        $add->pressao = $dados->Pressao;
        $add->gordura = $dados->Gordura;
        $add->massaMagra = $dados->MassaMagra;
        $add->imc = $dados->IMC;
        $add->habilitado = $dados->Situacao;
        $add->save();
        
        return view ('aptidaoFisica/index',[
            'AptidaoFisica'=> $aptidaoFisica,
        ]);
    }

    public function pesquisa(Request $request){

        $exames = $this->repository->pesquisar($request->filter);

        return view('aptidaoFisica/pesquisa',[
           'Exames' => $exames,
        ]);
    }
}
