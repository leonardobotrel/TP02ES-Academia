<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\AptidaoFisica;
use App\Models\Models\User;
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
        //$aptidaoFisica = new AptidaoFisica();
        //$aptidaoFisica = AptidaoFisica::where('id', 1)->first();
        //$item = new AptidaoFisica;
        $aptidaoFisica = $this->repository->latest()->paginate(10);
        //$users = $item->usuario;//->latest()->paginete(10);

        

        return view ('aptidaoFisica/index',[
            'AptidaoFisica'=> $aptidaoFisica,
          //  'Usuario' => $users,
        ]);
    }

    public function cadastro()
    {
        $aptidaoFisica = AptidaoFisica::find(1);
        $Users = $aptidaoFisica->usuario();


        return view ('aptidaoFisica/cadastro', [
            'Usuarios' => $Users,
        ]);
    }

    public function pesquisa(Request $request){

        $exames = $this->repository->pesquisar($request->filter);

        return view('aptidaoFisica/pesquisa',[
           'Exames' => $exames,
        ]);
    }
}
