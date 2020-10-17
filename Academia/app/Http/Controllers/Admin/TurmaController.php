<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Modalidade;
class Turma extends Controller
{
    
    private $repository;
    public function __construct(Turma $turma){

            $this->repository = $turma;
        }
    public function index(){

        $turma =$this->repository->paginate();

        return view ('turmas',[
            'turma'=>$turma,
        ]);
    }
    public function criar(){
        $Modalidade = Modalidade::all();
        return view('criar_turma',[
            'modalidades' =>$Modalidade,
        ]);
    }
    public function salvar(Request $request){
        //dd($request->all());
        
         $this->repository->create( $request->all());
        return redirect()->route('turma.index');
    }
}
