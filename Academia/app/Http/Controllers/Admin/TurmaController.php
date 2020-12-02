<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Modalidade;
use App\Models\Models\Turma;
use App\Models\Models\Matricula;

class TurmaController extends Controller
{
    
    private $repository;
    public function __construct(Turma $turma){

            $this->repository = $turma;
        }
    public function index(){
        $matricula = Matricula::all();
        $turma =$this->repository->paginate();
        return view ('turmas', compact('turma', 'matricula'));
    }
    public function criar(){
        $Modalidade = Modalidade::all();
        return view('criar_turma',[
            'Modalidades' =>$Modalidade,
        ]);
    }
    public function salvar(Request $request){       
         $this->repository->create( $request->all());
        return redirect()->route('turma.index');
    }
}
