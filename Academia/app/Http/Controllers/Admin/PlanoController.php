<?php

namespace App\Http\Controllers\Admin;
use App\Models\Models\Plano;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
        private $repository;
    public function __construct(Plano $plan){

            $this->repository = $plan;
        }
    public function index(){

        $planos =$this->repository->paginate();

        return view ('planos',[
            'planos'=>$planos,
        ]);
    }
    public function criar(){

        return view('criar_plano');
    }
    public function salvar(Request $request){
        //dd($request->all());
        
         $this->repository->create( $request->all());
        return redirect()->route('planos.index');
    }
    public function detalhe($id){
        $plano = $this->repository->where('id', $id)->first();
      if(!$plano)
      return redirect()->back();
        return view('detalhe',[
            'plano'=>$plano        ]);
    }

    public function deletar($id){
        $plano = $this->repository->where('id', $id)->first();
      if(!$plano)
         return redirect()->back();
    $plano->delete();
    return redirect()->route('planos.index');
    }
    
}
