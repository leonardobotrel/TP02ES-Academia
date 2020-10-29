<?php

namespace App\Http\Controllers\Admin;
use App\Models\Models\Modalidade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    //
    private $repository;
    public function __construct(Modalidade $modalidade){

            $this->repository = $modalidade;
        }
    public function index(){
        $modalidade =$this->repository->latest()->paginate(10);
        return view ('modalidade',[
            'modalidade'=>$modalidade,
        ]);
    }
    public function criar(){

        return view ('criar_modalidade');
    }
    public function salvar(Request $request){
              
         $this->repository->create( $request->all());
        return redirect()->route('modalidade.index');
    }
}
